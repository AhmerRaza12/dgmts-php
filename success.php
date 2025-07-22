<?php 
require 'vendor/autoload.php';
require_once('header.php'); 
$config = require 'stripe_config.php';
// Initialize the Stripe client with your secret key
$stripe = new \Stripe\StripeClient($config['secret_key']);

// Get the session_id from the query parameters
$session_id = $_GET['session_id'];
$statusStr = @$_GET['status'];
$payment_id = @$_GET['session_id'];
$slug = "Payment";
try {
    // Retrieve the checkout session
    $session = $stripe->checkout->sessions->retrieve($session_id);

    // Retrieve the payment intent (for more details)
    $payment_intent = $stripe->paymentIntents->retrieve($session->payment_intent);
   
    // Retrieve the customer email (optional)
    $customer_email = $session->customer_email;
	$res = json_encode($payment_intent);
	//die();
    // Check if the payment was successful
    if ($payment_intent->status == 'succeeded') {
		$res = json_encode($payment_intent);
		$updateStmt = $pdo->prepare("UPDATE tbl_payment SET status = ?, response = ? WHERE transaction_id = ?");
        $updateStmt->execute([1, $res, $session_id]);
		$statusStr = "succeeded";
        $message = "Thank you for your payment!";
		$payment_id = $payment_intent->id;
        $amount = $payment_intent->amount_received / 100; // Amount in dollars
    } else {
		$updateStmt = $pdo->prepare("UPDATE tbl_payment SET status = ?, response = ? WHERE transaction_id = ?");
        $updateStmt->execute([2, $res, $session_id]);
        $message = "Payment failed or was not completed.";
        $amount = 0;
    }
} catch (\Stripe\Exception\ApiErrorException $e) {
    // Handle errors
    $message = "Error retrieving payment details: " . $e->getMessage();
    $amount = 0;
	print_r($message);die();
}

if(!isset($slug))
{
	header('location: index.php');
	exit;
}
else
{
	// Check the page slug is valid or not.
	$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE page_slug=? AND status=?");
	$statement->execute(array($slug,'Active'));
	$total = $statement->rowCount();
	if( $total == 0 )
	{
		header('location: index.php');
		exit;
	}
}

// Getting the detailed data of a page from page slug
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE page_slug=?");
$statement->execute(array($slug));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
foreach ($result as $row) 
{
	$page_name    = $row['page_name'];
	$page_slug    = $row['page_slug'];
	$page_content = $row['page_content'];
	$page_layout  = $row['page_layout'];
	$banner       = $row['banner'];
	$status       = $row['status'];
}

// If a page is not active, redirect the user while direct URL press
if($status == 'Inactive')
{
	header('location: index.php');
	exit;
}
?>
				
<!-- Banner Start -->
<div class="page-banner" style="background-image:url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $banner; ?>);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="banner-text">
					<h1><?php echo $page_name; ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Banner End -->

<!-- Service Start -->
<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<!-- Blog Classic Start -->
				<div class="blog-grid">
					<div class="row">
                    <div class="col-md-4">
                        </div>
						<div class="col-md-4">
							

							<!-- Post Item Start -->
							<div class="post-item">
								<div class="image-holder image-holder-service">
									<img class="img-responsive" src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $photo; ?>" alt="">
								</div>
								<div class="text text-service text-center">
                                    <?php if($statusStr =="succeeded"){ ?>
                                    <i style="font-size:40px" class="fa fa-check-circle text-success" aria-hidden="true"></i>
									<br>
                                    
                                    <h5 class="pt-3">Payment Done</h5>
                                    <p>Payment ID : <?php echo $payment_id; ?></p>
                                    <?php }else{ ?>
                                  
                                    <i style="font-size:40px" class="fa fa-times-circle text-danger" aria-hidden="true"></i>
									<h5 class="pt-3">Payment Failed</h5>
                                    <?php } ?>
								</div>
							</div>
							<!-- Post Item End -->

						</div>

					</div>
				</div>
				<!-- Blog Classic End -->

			</div>

		</div>
	</div>
</section>
<!-- Service End -->
			
<?php require_once('footer.php'); ?>