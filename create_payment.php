<?php

require 'vendor/autoload.php';

use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

$config = require 'paypal_config.php';

// Create a new instance of Payer
$payer = new Payer();
$payer->setPaymentMethod('paypal');

// Set the amount
$amount = new Amount();
$amount->setTotal('1.00');
$amount->setCurrency('USD');

// Create a transaction
$transaction = new Transaction();
$transaction->setAmount($amount);
$transaction->setDescription('Payment description');

// Set redirect URLs
$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl('http://localhost/dgweb/execute_payment.php?success=true');
$redirectUrls->setCancelUrl('http://localhost/dgweb/execute_payment.php?success=false');

// Create the payment
$payment = new Payment();
$payment->setIntent('sale');
$payment->setPayer($payer);
$payment->setTransactions([$transaction]);
$payment->setRedirectUrls($redirectUrls);

try {
    // Set up API context
    $apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            $config['client_id'],
            $config['secret']
        )
    );
    $apiContext->setConfig($config['settings']);

    // Create the payment
    $payment->create($apiContext);

    // Get PayPal redirect URL and redirect the user
    $approvalUrl = $payment->getApprovalLink();
    header("Location: {$approvalUrl}");
    exit;
} catch (Exception $ex) {
    // Handle the exception
    echo $ex->getMessage();
}
?>
