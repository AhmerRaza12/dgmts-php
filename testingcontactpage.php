<!-- 6-form 6-offices original had 4-8 -->

<?php if($page_layout == 'Contact Us Page Layout'): ?>
<?php
	$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
	foreach ($result as $row) 
	{
		$contact_email = $row['contact_email'];
		$contact_address = $row['contact_address'];
		$contact_map_iframe = $row['contact_map_iframe'];
	}
?>
<section class="contact-v1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading-normal">
					<h2><?php echo CONTACT_FORM; ?></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">

<?php
// After form submit checking everything for email sending
if(isset($_POST['form_contact']))
{
	$error_message = '';
	$success_message = '';
	$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
	foreach ($result as $row) 
	{
		$receive_email = $row['receive_email'];
		$receive_email_subject = $row['receive_email_subject'];
		$receive_email_thank_you_message = $row['receive_email_thank_you_message'];
	}

    $valid = 1;

    if(empty($_POST['visitor_name']))
    {
        $valid = 0;
        $error_message .= FULL_NAME_EMPTY_CHECK.'\n';
    }

    if(empty($_POST['visitor_phone']))
    {
        $valid = 0;
        $error_message .= PHONE_EMPTY_CHECK.'\n';
    }


    if(empty($_POST['visitor_email']))
    {
        $valid = 0;
        $error_message .= EMAIL_EMPTY_CHECK.'\n';
    }
    else
    {
    	// Email validation check
        if(!filter_var($_POST['visitor_email'], FILTER_VALIDATE_EMAIL))
        {
            $valid = 0;
            $error_message .= EMAIL_VALID_CHECK.'\n';
        }
    }

    if(empty($_POST['visitor_comment']))
    {
        $valid = 0;
        $error_message .= COMMENT_EMPTY_CHECK.'\n';
    }

    if($valid == 1)
    {
		
		$visitor_name = strip_tags($_POST['visitor_name']);
		$visitor_email = strip_tags($_POST['visitor_email']);
		$visitor_phone = strip_tags($_POST['visitor_phone']);
		$visitor_comment = strip_tags($_POST['visitor_comment']);

        // sending email
		$to_admin = $receive_email;
        $subject = $receive_email_subject;

        $message = '
<html><body>
<table>
<tr>
<td>Name</td>
<td>'.$visitor_name.'</td>
</tr>
<tr>
<td>Email</td>
<td>'.$visitor_email.'</td>
</tr>
<tr>
<td>Phone</td>
<td>'.$visitor_phone.'</td>
</tr>
<tr>
<td>Comment</td>
<td>'.nl2br($visitor_comment).'</td>
</tr>
</table>
</body></html>
';

		try {
		    
		    $mail->setFrom($visitor_email, $visitor_name);
		    $mail->addAddress($to_admin, 'Admin');
		    $mail->addReplyTo($visitor_email, $visitor_name);
		    
		    $mail->isHTML(true);
		    $mail->Subject = $subject;
  
		    $mail->Body = $message;
		    $mail->send();

		    $success_message = $receive_email_thank_you_message;    
		} catch (Exception $e) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}

    }
}
?>
				
				<?php
				if($error_message != '') {
					echo "<script>alert('".$error_message."')</script>";
				}
				if($success_message != '') {
					echo "<script>alert('".$success_message."')</script>";
				}
				?>


				<form action="<?php echo BASE_URL.URL_PAGE.$_REQUEST['slug']; ?>" class="form-horizontal cform-1" method="post">
					<div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="<?php echo FULL_NAME; ?>" name="visitor_name">
                        </div>
                    </div>
					<div class="form-group">
                        <div class="col-sm-12">
                            <input type="email" class="form-control" placeholder="<?php echo EMAIL_ADDRESS; ?>" name="visitor_email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="<?php echo PHONE_NUMBER; ?>" name="visitor_phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea name="visitor_comment" class="form-control" cols="30" rows="8" placeholder="<?php echo MESSAGE; ?>"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
	                    <div class="col-sm-12">
	                        <input type="submit" value="<?php echo SEND_MESSAGE; ?>" class="btn btn-success" name="form_contact">
	                    </div>
	                </div>
				</form>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<div class="contact-details">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Main Office</h3>
								</div>
								<div class="panel-body">
									<p><strong>Address:</strong> 14155 Sullyfield Circle, Suite H,<br> Chantilly VA 20151</p>
									<p><strong>Phone:</strong> 703.488.9953</p>
								</div>
							</div>
							<!-- Maryland Office Card -->
							<!-- <div class="col-sm-4"> -->
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">Maryland Office</h3>
									</div>
									<div class="panel-body">
										<p><strong>Address:</strong> 1001 Prince Georges Blvd. Suite 800,<br> Upper Marlboro, MD 20774</p>
										<p><strong>Phone:</strong> 240.618.7635</p>
									</div>
								</div>
							<!-- </div> -->
						</div>
					</div>
					<div class="col-md-6">
						<div class="contact-details">
							<!-- Hampton Office Card -->
							<!-- <div class="col-sm-4"> -->
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">Hampton Office</h3>
									</div>
									<div class="panel-body">
										<p><strong>Address:</strong> 2046 Exploration Way Unit A,<br> Hampton, VA 23666</p>
										<p><strong>Phone:</strong> 337.965.4600</p>
									</div>
								</div>
							<!-- </div> -->
							<!-- DC Office Card -->
							<!-- <div class="col-sm-4"> -->
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">DC Office</h3>
									</div>
									<div class="panel-body">
										<p><strong>Address:</strong> 100 M Street SE, Suite 600,<br> Washington, DC 20003</p>
										<p><strong>Phone:</strong> 703.999.3207</p>
									</div>
								</div>
							<!-- </div> -->
							<!-- <h4 class="">Contact Address:</h3> -->
							<?php //echo $contact_map_iframe; ?>
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						
					</div>
					<div class="col-md-8">
						
						<h4><span><i class="fa-2xl fa text-primary fa-envelope"></i></span><?php echo "  ".$contact_email; ?></h5>
					</div>
					
					<div class="col-md-2"></div>
				</div>
				
			</div>
			
		</div>
		<div class="col-md-12">
			<div class="google-map">
				<?php echo $contact_map_iframe; ?>
			</div>	
		</div>
	</div>
</section>
<?php endif; ?>


<!-- form-map -->
<?php if($page_layout == 'Contact Us Page Layout'): ?>
<?php
	$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
	foreach ($result as $row) 
	{
		$contact_email = $row['contact_email'];
		$contact_address = $row['contact_address'];
		$contact_map_iframe = $row['contact_map_iframe'];
	}
?>
<section class="contact-v1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading-normal">
					<h2><?php echo CONTACT_FORM; ?></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">

<?php
// After form submit checking everything for email sending
if(isset($_POST['form_contact']))
{
	$error_message = '';
	$success_message = '';
	$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
	foreach ($result as $row) 
	{
		$receive_email = $row['receive_email'];
		$receive_email_subject = $row['receive_email_subject'];
		$receive_email_thank_you_message = $row['receive_email_thank_you_message'];
	}

    $valid = 1;

    if(empty($_POST['visitor_name']))
    {
        $valid = 0;
        $error_message .= FULL_NAME_EMPTY_CHECK.'\n';
    }

    if(empty($_POST['visitor_phone']))
    {
        $valid = 0;
        $error_message .= PHONE_EMPTY_CHECK.'\n';
    }


    if(empty($_POST['visitor_email']))
    {
        $valid = 0;
        $error_message .= EMAIL_EMPTY_CHECK.'\n';
    }
    else
    {
    	// Email validation check
        if(!filter_var($_POST['visitor_email'], FILTER_VALIDATE_EMAIL))
        {
            $valid = 0;
            $error_message .= EMAIL_VALID_CHECK.'\n';
        }
    }

    if(empty($_POST['visitor_comment']))
    {
        $valid = 0;
        $error_message .= COMMENT_EMPTY_CHECK.'\n';
    }

    if($valid == 1)
    {
		
		$visitor_name = strip_tags($_POST['visitor_name']);
		$visitor_email = strip_tags($_POST['visitor_email']);
		$visitor_phone = strip_tags($_POST['visitor_phone']);
		$visitor_comment = strip_tags($_POST['visitor_comment']);

        // sending email
		$to_admin = $receive_email;
        $subject = $receive_email_subject;

        $message = '
<html><body>
<table>
<tr>
<td>Name</td>
<td>'.$visitor_name.'</td>
</tr>
<tr>
<td>Email</td>
<td>'.$visitor_email.'</td>
</tr>
<tr>
<td>Phone</td>
<td>'.$visitor_phone.'</td>
</tr>
<tr>
<td>Comment</td>
<td>'.nl2br($visitor_comment).'</td>
</tr>
</table>
</body></html>
';

		try {
		    
		    $mail->setFrom($visitor_email, $visitor_name);
		    $mail->addAddress($to_admin, 'Admin');
		    $mail->addReplyTo($visitor_email, $visitor_name);
		    
		    $mail->isHTML(true);
		    $mail->Subject = $subject;
  
		    $mail->Body = $message;
		    $mail->send();

		    $success_message = $receive_email_thank_you_message;    
		} catch (Exception $e) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}

    }
}
?>
				
				<?php
				if($error_message != '') {
					echo "<script>alert('".$error_message."')</script>";
				}
				if($success_message != '') {
					echo "<script>alert('".$success_message."')</script>";
				}
				?>


				<form action="<?php echo BASE_URL.URL_PAGE.$_REQUEST['slug']; ?>" class="form-horizontal cform-1" method="post">
					<div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="<?php echo FULL_NAME; ?>" name="visitor_name">
                        </div>
                    </div>
					<div class="form-group">
                        <div class="col-sm-12">
                            <input type="email" class="form-control" placeholder="<?php echo EMAIL_ADDRESS; ?>" name="visitor_email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="<?php echo PHONE_NUMBER; ?>" name="visitor_phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea name="visitor_comment" class="form-control" cols="30" rows="12" placeholder="<?php echo MESSAGE; ?>"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
	                    <div class="col-sm-12">
	                        <input type="submit" value="<?php echo SEND_MESSAGE; ?>" class="btn btn-success" name="form_contact">
	                    </div>
	                </div>
				</form>
			</div>
			<div class="col-md-4">
				<div class="google-map">
					<?php echo $contact_map_iframe; ?>
				</div>	
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Main Office</h3>
							</div>
							<div class="panel-body">
								<p><strong>Address:</strong> 14155 Sullyfield Circle, Suite H,<br> Chantilly VA 20151</p>
								<p><strong>Phone:</strong> 703.488.9953</p>
							</div>
						</div>
					</div>

					<!-- Maryland Office Card -->
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Maryland Office</h3>
							</div>
							<div class="panel-body">
								<p><strong>Address:</strong> 1001 Prince Georges Blvd. Suite 800,<br> Upper Marlboro, MD 20774</p>
								<p><strong>Phone:</strong> 240.618.7635</p>
							</div>
						</div>
					</div>
					<!-- Hampton Office Card -->
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Hampton Office</h3>
							</div>
							<div class="panel-body">
								<p><strong>Address:</strong> 2046 Exploration Way Unit A,<br> Hampton, VA 23666</p>
								<p><strong>Phone:</strong> 337.965.4600</p>
							</div>
						</div>
					</div>
					<!-- DC Office Card -->
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">DC Office</h3>
							</div>
							<div class="panel-body">
								<p><strong>Address:</strong> 100 M Street SE, Suite 600,<br> Washington, DC 20003</p>
								<p></p>
								<p><strong>Phone:</strong> 703.999.3207</p>
							</div>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-4">
						
					</div>
					<div class="col-md-4 text-center">
						
						<h4><span><i class="fa-2xl fa text-primary fa-envelope"></i></span><?php echo "  ".$contact_email; ?></h5>
					</div>
					
					<div class="col-md-2"></div>
				</div>
				
			</div>
			
		</div>
		
	</div>
</section>
<?php endif; ?>




<!-- All 3 in different rows -->
<?php if($page_layout == 'Contact Us Page Layout'): ?>
<?php
	$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
	foreach ($result as $row) 
	{
		$contact_email = $row['contact_email'];
		$contact_address = $row['contact_address'];
		$contact_map_iframe = $row['contact_map_iframe'];
	}
?>
<section class="contact-v1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading-normal">
					<h2><?php echo CONTACT_FORM; ?></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">

<?php
// After form submit checking everything for email sending
if(isset($_POST['form_contact']))
{
	$error_message = '';
	$success_message = '';
	$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
	foreach ($result as $row) 
	{
		$receive_email = $row['receive_email'];
		$receive_email_subject = $row['receive_email_subject'];
		$receive_email_thank_you_message = $row['receive_email_thank_you_message'];
	}

    $valid = 1;

    if(empty($_POST['visitor_name']))
    {
        $valid = 0;
        $error_message .= FULL_NAME_EMPTY_CHECK.'\n';
    }

    if(empty($_POST['visitor_phone']))
    {
        $valid = 0;
        $error_message .= PHONE_EMPTY_CHECK.'\n';
    }


    if(empty($_POST['visitor_email']))
    {
        $valid = 0;
        $error_message .= EMAIL_EMPTY_CHECK.'\n';
    }
    else
    {
    	// Email validation check
        if(!filter_var($_POST['visitor_email'], FILTER_VALIDATE_EMAIL))
        {
            $valid = 0;
            $error_message .= EMAIL_VALID_CHECK.'\n';
        }
    }

    if(empty($_POST['visitor_comment']))
    {
        $valid = 0;
        $error_message .= COMMENT_EMPTY_CHECK.'\n';
    }

    if($valid == 1)
    {
		
		$visitor_name = strip_tags($_POST['visitor_name']);
		$visitor_email = strip_tags($_POST['visitor_email']);
		$visitor_phone = strip_tags($_POST['visitor_phone']);
		$visitor_comment = strip_tags($_POST['visitor_comment']);

        // sending email
		$to_admin = $receive_email;
        $subject = $receive_email_subject;

        $message = '
<html><body>
<table>
<tr>
<td>Name</td>
<td>'.$visitor_name.'</td>
</tr>
<tr>
<td>Email</td>
<td>'.$visitor_email.'</td>
</tr>
<tr>
<td>Phone</td>
<td>'.$visitor_phone.'</td>
</tr>
<tr>
<td>Comment</td>
<td>'.nl2br($visitor_comment).'</td>
</tr>
</table>
</body></html>
';

		try {
		    
		    $mail->setFrom($visitor_email, $visitor_name);
		    $mail->addAddress($to_admin, 'Admin');
		    $mail->addReplyTo($visitor_email, $visitor_name);
		    
		    $mail->isHTML(true);
		    $mail->Subject = $subject;
  
		    $mail->Body = $message;
		    $mail->send();

		    $success_message = $receive_email_thank_you_message;    
		} catch (Exception $e) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}

    }
}
?>
				
				<?php
				if($error_message != '') {
					echo "<script>alert('".$error_message."')</script>";
				}
				if($success_message != '') {
					echo "<script>alert('".$success_message."')</script>";
				}
				?>


				<form action="<?php echo BASE_URL.URL_PAGE.$_REQUEST['slug']; ?>" class="form-horizontal cform-1" method="post">
					<div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="<?php echo FULL_NAME; ?>" name="visitor_name">
                        </div>
                    </div>
					<div class="form-group">
                        <div class="col-sm-12">
                            <input type="email" class="form-control" placeholder="<?php echo EMAIL_ADDRESS; ?>" name="visitor_email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="<?php echo PHONE_NUMBER; ?>" name="visitor_phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea name="visitor_comment" class="form-control" cols="30" rows="8" placeholder="<?php echo MESSAGE; ?>"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
	                    <div class="col-sm-12">
	                        <input type="submit" value="<?php echo SEND_MESSAGE; ?>" class="btn btn-success" name="form_contact">
	                    </div>
	                </div>
				</form>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Main Office</h3>
							</div>
							<div class="panel-body">
								<p><strong>Address:</strong> 14155 Sullyfield Circle, Suite H,<br> Chantilly VA 20151</p>
								<p><strong>Phone:</strong> 703.488.9953</p>
							</div>
						</div>
					</div>

					<!-- Maryland Office Card -->
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Maryland Office</h3>
							</div>
							<div class="panel-body">
								<p><strong>Address:</strong> 1001 Prince Georges Blvd. Suite 800,<br> Upper Marlboro, MD 20774</p>
								<p><strong>Phone:</strong> 240.618.7635</p>
							</div>
						</div>
					</div>
					<!-- Hampton Office Card -->
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Hampton Office</h3>
							</div>
							<div class="panel-body">
								<p><strong>Address:</strong> 2046 Exploration Way Unit A,<br> Hampton, VA 23666</p>
								<p><strong>Phone:</strong> 337.965.4600</p>
							</div>
						</div>
					</div>
					<!-- DC Office Card -->
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">DC Office</h3>
							</div>
							<div class="panel-body">
								<p><strong>Address:</strong> 100 M Street SE, Suite 600,<br> Washington, DC 20003</p>
								<p></p>
								<p><strong>Phone:</strong> 703.999.3207</p>
							</div>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-4">
						
					</div>
					<div class="col-md-4 text-center">
						
						<h4><span><i class="fa-2xl fa text-primary fa-envelope"></i></span><?php echo "  ".$contact_email; ?></h5>
					</div>
					
					<div class="col-md-2"></div>
				</div>
				
			</div>
			
		</div>
		<div class="col-md-12">
			<div class="google-map">
				<?php echo $contact_map_iframe; ?>
			</div>	
		</div>
	</div>
</section>
<?php endif; ?>


<!-- Footer -->
<div class="col-md-5">
					<!-- <div class="link-area"> -->
					<div class="link-area text-center" style="text-decoration:none;">
						<table class="table" > 
							<tr style="border-style:hidden;">
								<th colspan=2 style="text-align: center;color:white;">Useful Links</th>
								<!-- <th style="text-align: center;color:white;">Company</th> -->
								<th colspan=2 style="text-align: center;color:white;">Services</th>
								<!-- <th>the Bird</th> -->
							</tr>
							<tr style="border-style:hidden;">
								
								<td><a style="color:white;" href="<?php echo BASE_URL.""; ?>"> Home</a></td>
								<td><a style="color:white;" href="<?php echo BASE_URL."page/gallery"; ?>"> Gallery</a></td>
								<td><a style="color:white;" href="<?php echo BASE_URL."page/geotechnical-engineering"; ?>"> Geotechnical Engineering</a></td>
								<td><a style="color:white;" href="<?php echo BASE_URL."page/special-inspection"; ?>"> Special Inspection</a></td>
								
							</tr>
							<tr style="border-style:hidden;">
								
								<td><a style="color:white;" href="<?php echo BASE_URL."page/projects"; ?>"> Projects</a></td>
								<td><a style="color:white;" href="<?php echo BASE_URL."page/careers"; ?>"> Careers</a></td>
								<td><a style="color:white;" href="<?php echo BASE_URL."page/construction-materials-testing"; ?>"> Construction Materials Testing</a></td>
								<td><a style="color:white;" href="<?php echo BASE_URL."page/drilling"; ?>"> Drilling</a></td>
								
							</tr>
							<tr style="border-style:hidden;">
								
								<td><a style="color:white;" href="<?php echo BASE_URL."page/locations"; ?>"> Locations</a></td>
								<td><a style="color:white;" href="<?php echo BASE_URL."page/contact"; ?>"> Contact</a></td>
								<td><a style="color:white;" href="<?php echo BASE_URL."page/instrumentation"; ?>"> Instrumentation</a></td>
								<td><a style="color:white;" href="<?php echo BASE_URL."page/laboratory-testing"; ?>"> Laboratory Testing</a></td>
								
							</tr>
							
						<!-- </tbody> -->
					</table> 
						<!-- <h3>COMPANY</h3> -->
						
					</div>
				</div>