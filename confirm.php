<?php

require_once('header.php');
require 'vendor/autoload.php';

use Stripe\Stripe;

if (isset($_POST['confirmed'])) {
    // var_dump($_POST);
    // die();
    include("admin/config.php");
    $config = require 'stripe_config.php';

    $customTransactionId = 's-dev' . uniqid();
    $valid = 1;
    $error_message = '';

    if (empty($_POST['customerName'])) {
        $valid = 0;
        $error_message .= '*Customer Name cannot be empty<br>';
    }
    if (empty($_POST['customerEmail'])) {
        $valid = 0;
        $error_message .= '*Customer Email cannot be empty<br>';
    }
    if (empty($_POST['customerAddress'])) {
        $valid = 0;
        $error_message .= '*Customer Address cannot be empty<br>';
    }
    if (empty($_POST['invoiceNo'])) {
        $valid = 0;
        $error_message .= '*Invoice No. cannot be empty<br>';
    }

    if ($valid === 1) {
       
        
        $stripe = new \Stripe\StripeClient($config['secret_key']);
       
       // Retrieve POST data
        $amount = $_POST['gross_amount'] * 100; // Convert dollars to cents
        $customerName = $_POST['customerName'];
        $customerEmail = $_POST['customerEmail'];
        $customerAddress = $_POST['customerAddress'];
        $invoiceNo = $_POST['invoiceNo'];
        $paymentNote = $_POST['paymentNote'];
        $customTransactionId = $_POST['customTransactionId'];

        // Create a new checkout session with additional metadata
        try {
            $session = $stripe->checkout->sessions->create([
                'mode' => 'payment',
                'payment_method_types' => ['card', 'us_bank_account'],
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'usd',
                            'unit_amount' => $amount, // Amount in cents
                            'product_data' => [
                                'name' => 'Invoice Number :'.$_POST['invoiceNo'],
                            ],
                        ],
                        'quantity' => 1,
                    ],
                ],
                'success_url' => BASE_URL . 'success?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => BASE_URL . 'success?session_id={CHECKOUT_SESSION_ID}',
                    'customer_email' => $customerEmail,
                'metadata' => [
                    'customer_name' => $customerName,
                    'customer_email' => $customerEmail,
                    'customer_address' => $customerAddress,
                    'invoice_no' => $invoiceNo,
                    'payment_note' => $paymentNote,
                    'transaction_id' => $customTransactionId,
                    'amount' => $amount,
                ],
            ]);
            $customTransactionId =  $session->id;
             // Store payment details in your database
        $statement = $pdo->prepare("INSERT INTO tbl_payment (customer_name, customer_email, customer_address, invoice_no, payment_note, status, transaction_id, amount) VALUES(?,?,?,?,?,?,?,?)");
        $statement->execute(array($_POST['customerName'], $_POST['customerEmail'], $_POST['customerAddress'], $_POST['invoiceNo'], $_POST['paymentNote'], '2', $customTransactionId, $_POST['amount']));

            // Redirect to the Stripe Checkout page
            header("Location: " . $session->url);
            exit;

        } catch (\Stripe\Exception\ApiErrorException $e) {
            // Handle errors
            echo  $e->getMessage();
        }
    }
}
?>

<style>
        /* Custom styles to center the modal */
        .modal-dialog {
            margin: 0 auto;
            position: relative;
            top: 30%;
            transform: translateY(-50%);
        }
        tr *{
            font-size: 18px;
            padding-bottom: 15px;
        }
    </style>
<section class="about-v2">
    <div class="container">
        <?php if ($error_message): ?>
            <div>
                <p class="text-danger">
                    <?php echo $error_message; ?>
                </p>
            </div>
        <?php endif; ?>
        <form class="form-horizontal" action="" method="post" id="payment-form">
            <!-- <div class="form-group">
                <label for="customerName" class="col-sm-2 control-label">Customer Name<span class="text-danger">*</span></label>
                <div class="col-sm-10"> -->
                    <input type="hidden" name="customerName" class="form-control" id="customerName" value="<?php echo $_POST["customerName"]; ?>">
                <!-- </div> -->
            <!-- </div>
            <div class="form-group">
                <label for="customerEmail" class="col-sm-2 control-label">Customer Email<span class="text-danger">*</span></label> -->
                <!-- <div class="col-sm-10"> -->
                    <input type="hidden" name="customerEmail" class="form-control" id="customerEmail" value="<?php echo $_POST["customerEmail"]; ?>" placeholder="Customer Email">
                <!-- </div> -->
            <!-- </div>
            <div class="form-group">
                <label for="customerAddress" class="col-sm-2 control-label">Customer Address<span class="text-danger">*</span></label>
                <div class="col-sm-10"> -->
                    <input type="hidden" name="customerAddress" class="form-control" id="customerAddress" value="<?php echo $_POST["customerAddress"]; ?>" placeholder="Customer Address">
                <!-- </div> -->
            <!-- </div> -->
            <!-- <div class="form-group"> -->
                <!-- <label for="invoiceNo" class="col-sm-2 control-label">Invoice No.<span class="text-danger">*</span></label> -->
                <!-- <div class="col-sm-10"> -->
                    <input type="hidden" name="invoiceNo" class="form-control" id="invoiceNo" value="<?php echo $_POST["invoiceNo"]; ?>" placeholder="Invoice No.">
                <!-- </div> -->
            <!-- </div> -->
            <!-- <div class="form-group"> -->
                <!-- <label for="amount" class="col-sm-2 control-label">Invoice Amount<span class="text-danger">*</span></label> -->
                <!-- <div class="col-sm-10"> -->
                    <input type="hidden" name="amount"  class="form-control" id="gross_amount" value="<?php echo $_POST["amount"]; ?>" placeholder="Amount">
                <!-- </div> -->
            <!-- </div> -->
            
            <input type="hidden" name="gross_amount" id="hidden_amount" value="<?php echo $_POST["gross_amount"]; ?>"/>
            <!-- <div class="form-group"> -->
                <!-- <label for="paymentNote" class="col-sm-2 control-label">Payment Note:</label> -->
                <!-- <div class="col-sm-10"> -->
                    <input type="hidden" name="paymentNote" value="<?php echo $_POST["customerName"]; ?>">
                    <input type="hidden" name="confirmed" value="1">
                <!-- </div> -->
            <!-- </div> -->
         <div class="col-md-3"></div>
         <div class="col-md-6 text-center" style="display: flex; align-items:center; justify-content:center;">
         <div class="panel staff-box panel-default" style="width: 100%;">
				<div class="panel-heading">
					<h3 style="color:rgb(101, 100, 100); margin-top:10px;">Confirm Your Details</h3>
				</div>
				<div class="panel-body">
                <table class="text-left" style="width: 100%;">
                    <tr>
                        <td style="font-weight: bold;" >Customer Name</td>
                        <td  class="text-right"><?php echo $_POST["customerName"]; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Customer Email</td>
                        <td  class="text-right"><?php echo $_POST["customerEmail"]; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Customer Address</td>
                        <td  class="text-right"><?php echo $_POST["customerAddress"]; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Invoice No.</td>
                        <td  class="text-right"><?php echo $_POST["invoiceNo"]; ?></td>
                    </tr>
                    <!-- <span>Invoice Amount ($): <strong id="invoice_amount">0.00</strong></span>
                    <br>
                    <span>Service Charge ($): <strong id="service_charge">0.00</strong></span>
                    <br>
                    <span>Total Payable ($): <strong id="total_payable_display">0.00</strong></span> -->
                    <tr>
                        <td style="font-weight: bold;">Invoice Amount ($)</td>
                        <td  class="text-right"><?php echo $_POST["amount"]; ?></td>
                    </tr>
                    <?php $service_charge =  $_POST["gross_amount"]-$_POST["amount"]; ?>
                        <td style="font-weight: bold;">Service Charge ($)</td>
                        <td  class="text-right"><?php echo $service_charge; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Total Payable ($)</td>
                        <td  class="text-right"><?php echo $_POST["gross_amount"]; ?></td>
                    </tr>
                    <?php if($_POST["paymentNote"]) {?>
                        <tr>
                            <td style="font-weight: bold;">Payment Note</td>
                            <td  class="text-right"><?php echo $_POST["paymentNote"]; ?></td>
                        </tr>
                    <?php } ?>
                    <tr class="text-center">
                        <td colspan="2" style="padding-top: 15px;padding-bottom:0px;  font-size:small;">
                           <p style="text-align:justify;"><span style="font-weight:600;">Disclaimer:</span> By selecting the “Confirm & Pay”, you will be redirected to a third-party payment processor’s website to complete your transaction. Please note that your payment will be processed according to the terms, conditions, and privacy policies of the payment processor. DGMTS does not own or control the website to which you are being redirected.</p>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="2" style="padding-top: 15px;padding-bottom:0px;">
                            <button type="submit" id="" class="btn btn-primary" data-toggle="" data-target="">Confirm & Pay</button>
                        </td>
                    </tr>
                </table>
				</div>
			</div>
             
             <!-- <button type="button" style="display:none" class="btn btn-primary">Edit</button> -->
         </div>
         <div class="col-md-3"></div>
        </form>
  
    <!-- Button to trigger modal -->
   

    

    </div>
</section>

<?php require_once('footer.php'); ?>