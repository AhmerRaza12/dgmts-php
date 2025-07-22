<?php

require 'vendor/autoload.php';

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

$config = require 'paypal_config.php';
include("admin/config.php");
if (isset($_GET['success']) && $_GET['success'] == 'true') {
    $paymentId = $_GET['paymentId'];
    $payerId = $_GET['PayerID'];

    try {
        // Set up API context
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                $config['client_id'],
                $config['secret']
            )
        );
        $apiContext->setConfig($config['settings']);

        // Get the payment
        $payment = Payment::get($paymentId, $apiContext);

        // Execute the payment
        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);
        $result = $payment->execute($execution, $apiContext);
        //echo "Payment successful! Transaction ID: " . $result->getId() . "\n";
        $paypal_payment_id = $result->getId();
        // Extract payer ID, amount, and status
        $payerInfo = $result->getPayer()->getPayerInfo();
        $payerId = $payerInfo->getPayerId();
        $firstName = $payerInfo->getFirstName();
        $lastName = $payerInfo->getLastName();
        $email = $payerInfo->getEmail();
        $transactions = $result->getTransactions();
        $amount = $transactions[0]->getAmount()->getTotal();
        $paymentStatus = $result->getState();
        $customTransactionId = $transactions[0]->getInvoiceNumber();
   
        $responseData = array(
            "paypal_id" => $paypal_payment_id,
            'payerId' => $payerId,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'amount' => $amount,
            'paymentStatus' => $paymentStatus,
            'customTransactionId' => $customTransactionId
        );
        
        // Encode the data to JSON
        $jsonResponse = json_encode($responseData);

        // echo "Payer ID: {$payerId}</br>";
        // echo "First Name: {$firstName}</br>";
        // echo "Last Name: {$lastName}</br>";
        // echo "Email: {$email}</br>";
        // echo "Amount: {$amount}</br>";
        // echo "Status: {$paymentStatus}</br>";
        // echo "Custom Transaction ID: {$customTransactionId}\n";

        $statement = $pdo->prepare("
    UPDATE tbl_payment
    SET
        amount = ?,
        status = ?,
        response = ?
    WHERE
        transaction_id = ?
");

$statement->execute(array(
    $amount,
    1,
    $jsonResponse,
    $customTransactionId
));
        //die();
        header('location: paypal_success.php?status=success&payment_id='. $paypal_payment_id);
	exit;
        

    } catch (Exception $ex) {
        // Handle the exception
        echo $ex->getMessage();
    }
} else {
     header('location: paypal_success.php?status=failed');
	exit;
}