
<?php 
require_once('header.php'); ?>

<?php
//print_r($_GET);
// die();
 $statusStr = $_GET['status'];
$payment_id = @$_GET['payment_id'];
$slug = "Payment";


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
                                    <?php if($statusStr =="success"){ ?>
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