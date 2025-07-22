	<?php
	
	
	$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
	foreach ($result as $row) 
	{
		$footer_about                = $row['footer_about'];
		$footer_copyright            = $row['footer_copyright'];
		$contact_address             = $row['contact_address'];
		$contact_email               = $row['contact_email'];
		$contact_phone               = $row['contact_phone'];
		$contact_fax                 = $row['contact_fax'];
		$total_recent_news_footer    = $row['total_recent_news_footer'];
		$total_popular_news_footer   = $row['total_popular_news_footer'];
		$total_recent_news_sidebar   = $row['total_recent_news_sidebar'];
		$total_popular_news_sidebar  = $row['total_popular_news_sidebar'];
		$total_recent_news_home_page = $row['total_recent_news_home_page'];
		$newsletter_title            = $row['newsletter_title'];
		$newsletter_text             = $row['newsletter_text'];
		$newsletter_photo            = $row['newsletter_photo'];
		$newsletter_status           = $row['newsletter_status'];

		$receive_email = $row['receive_email'];
	}
	?>

	<!-- <section class="index-link" style="padding-top: 10px;">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="link-area">
						<h3>ABOUT US</h3> -->
	<section class="index-link" style="padding-top: 10px;background-image:none!important;">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="link-area">
						<!-- <h3>ABOUT US</h3> -->
						<p>
							<?php echo nl2br($footer_about); ?>
						</p>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="link-area" style="text-decoration:none;">
						<table class="table" > 
							<tr style="border-style:hidden;">
								<th colspan="2" ><h3 style="color:white;text-align:center;">Services</h3></th><th></th>
							<!-- <th></th><th></th><th></th> -->
								<!-- <th style="color:white;">Company</th> -->
								<th><h3 style="color:white;">Contact Us</h3></th>
								<!-- <th>the Bird</th> -->
							</tr>
							<tr style="border-style:hidden;">
								
								
								<td><a style="color:white;" href="<?php echo BASE_URL."page/geotechnical-engineering"; ?>"> Construction Inspection and Field Testing</a></td>
								<td><a style="color:white;" href="<?php echo BASE_URL."page/geotechnical-engineering"; ?>"> Special Inspections</a></td><td></td>
								<!-- <td></td><td></td><td></td> -->
								<td>
									<p style="color:white;"><span><i class="fa fa-map-marker"></i></span> <?php echo $contact_address?></p>
								</td>
								
							</tr>
							<tr style="border-style:hidden;">
								
								
								<td><a style="color:white;" href="<?php echo BASE_URL."page/geotechnical-engineering"; ?>"> Construction Material Laboratory Testing</a></td>
								<td><a style="color:white;" href="<?php echo BASE_URL."page/geotechnical-engineering"; ?>"> Geotechnical Drilling</a></td><td></td>
								<!-- <td></td><td></td><td></td> -->
								<td>
									<p style="color:white;"><span><i class="fa fa fa-phone"></i></span> <?php echo $contact_phone?></p>
								</td>
								
							</tr>
							<tr style="border-style:hidden;">
								
							<!-- <i class="fa-2xl fa text-primary fa-envelope"></i> -->
								<td><a style="color:white;" href="<?php echo BASE_URL."page/geotechnical-engineering"; ?>">  Geotechnical Engineering And Design</a></td>
								<td><a style="color:white;" href="<?php echo BASE_URL."page/geotechnical-engineering"; ?>"> Geotechnical Instrumentation</a></td>
								<!-- <td></td><td></td><td></td> --><td></td>
								<!-- <td><a style="color:white;" href="<?php //<?php echo BASE_URL."page/contact"; ?>echo $contact_phone.BASE_URL."page/laboratory-testing"; ?>"> Laboratory Testing</a></td> -->
								<td>
									<p style="color:white;"><span><i class="fa fa-envelope-o"></i></span> <?php echo $contact_email?></p>
									
								</td>
								
							</tr>
							<tr style="border-style:hidden;">
								
							<!-- <i class="fa-2xl fa text-primary fa-envelope"></i> -->
								<td><a style="color:white;" href="<?php echo BASE_URL."page/geotechnical-engineering"; ?>">  Condition Survey</a></td>
								<td><a style="color:white;" href="<?php echo BASE_URL."page/geotechnical-engineering"; ?>">  PDA Testing</a></td>
								<!-- <td></td><td></td><td></td> --><td></td>
								<!-- <td><a style="color:white;" href="<?php //<?php echo BASE_URL."page/contact"; ?>echo $contact_phone.BASE_URL."page/laboratory-testing"; ?>"> Laboratory Testing</a></td> -->
								<td>
									
									
								</td>
								
							</tr>
							
							<!-- <tr style="border-style:hidden;">
								
								
								
							</tr> -->
							
						<!-- </tbody> -->
					</table> 
						<!-- <h3>COMPANY</h3> -->
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
				</div>
				
			</div>
		</div>
	</section>




	<!-- Scripts -->
	<script src="<?php echo BASE_URL; ?>assets/js/jquery-2.2.4.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/jquery.slicknav.min.js"></script>	
	<script src="<?php echo BASE_URL; ?>assets/js/hoverIntent.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/superfish.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/owl.animate.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/wow.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/jquery.bxslider.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/jquery.mixitup.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/waypoints.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/jquery.counterup.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/custom.js"></script>
	<script>
  $(document).ready(function() {
    $('#gross_amount').on('input', function() {
        let grossAmount = parseFloat($(this).val());
        if (!isNaN(grossAmount)) {
            
            //let totalPayable = grossAmount + (grossAmount * 0.0293);
			$targetAmount = grossAmount; // $100.00 in cents

			// Calculate the gross amount to charge
			$processingFeeRate = 0.029;
			$fixedFee = .30; // $0.30 in cents

			$grossAmountNet = ($targetAmount + $fixedFee) / (1 - $processingFeeRate);

			// Round the gross amount to the nearest cent
			let totalPayable = $grossAmountNet;
			$service_charge = $grossAmountNet -$targetAmount;
            $('#invoice_amount').text($targetAmount.toFixed(2)); // Set the value in the hidden input
            $('#service_charge').text($service_charge.toFixed(2)); // Set the value in the hidden input
            $('#hidden_amount').val(totalPayable.toFixed(2)); // Set the value in the hidden input
            $('#total_payable_display').text(totalPayable.toFixed(2)); // Display the total payable amount
        } else {
            $('#total_payable_display').text('0.00'); // Reset if the input is not a valid number
        }
    });

	$('#submitPayment').on('click', function() {
        // Trigger form submission
        $('#payment-form').submit();
		$('button[name="payment_form"]').click();
    });
	// $('#payment-form').on('submit', function(e) {
    //    e.preventDefault(); // Prevent actual form submission for demo purposes
    //     // Close the modal
    //     $('#myModal').modal('hide');
    //     // You can now submit the form using AJAX or proceed with actual form submission.
    //     // This line is optional and for demo purposes:
    //     alert('Payment form submitted!');
    // });
});

</script>
</body>
</html>