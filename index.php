<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
foreach ($result as $row) {
	$total_recent_news_home_page = $row['total_recent_news_home_page'];
	$home_title_service          = $row['home_title_service'];
	$home_subtitle_service       = $row['home_subtitle_service'];
	$home_status_service         = $row['home_status_service'];
	$home_title_team_member      = $row['home_title_team_member'];
	$home_subtitle_team_member   = $row['home_subtitle_team_member'];
	$home_status_team_member     = $row['home_status_team_member'];
	$home_title_testimonial      = $row['home_title_testimonial'];
	$home_subtitle_testimonial   = $row['home_subtitle_testimonial'];
	$home_photo_testimonial      = $row['home_photo_testimonial'];
	$home_status_testimonial     = $row['home_status_testimonial'];
	$home_title_news             = $row['home_title_news'];
	$home_subtitle_news          = $row['home_subtitle_news'];
	$home_status_news            = $row['home_status_news'];
	$home_title_partner          = $row['home_title_partner'];
	$home_subtitle_partner       = $row['home_subtitle_partner'];
	$home_status_partner         = $row['home_status_partner'];
	$counter_1_title             = $row['counter_1_title'];
    $counter_1_value             = $row['counter_1_value'];
    $counter_2_title             = $row['counter_2_title'];
    $counter_2_value             = $row['counter_2_value'];
    $counter_3_title             = $row['counter_3_title'];
    $counter_3_value             = $row['counter_3_value'];
    $counter_4_title             = $row['counter_4_title'];
    $counter_4_value             = $row['counter_4_value'];
    $counter_photo               = $row['counter_photo'];
    $counter_status              = $row['counter_status'];
}
?>

<!-- Slider Start -->
<section class="main-slider">
	<div class="slider">
		<ul class="bxslider">
				
			<?php
			$statement = $pdo->prepare("SELECT * FROM tbl_slider WHERE status=? ORDER BY id DESC");
			$statement->execute(array('Active'));
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
			foreach ($result as $row) 
			{
				if($row['position']=='Left') {$align='tal';}
				if($row['position']=='Center') {$align='tac';}
				if($row['position']=='Right') {$align='tar';}
				?>
				<li style="background-image:url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>);">
					<div class="overlay"></div>
					<div class="content">
						<div class="inner <?php echo $align; ?>">
							<div class="text">
							
								<?php if($row['heading']!=''): ?>
								<h2>
									<?php echo $row['heading']; ?>
								</h2>
								<?php endif; ?>
								
								<?php if($row['content']!=''): ?>
								<p>
									<?php echo nl2br($row['content']); ?>
								</p>
								<?php endif; ?>
								
								<?php if($row['button_text']!=''): ?>
								<p class="button">
									<a href="<?php echo $row['button_url']; ?>" class="btn btn-flat"><?php echo $row['button_text']; ?></a>
								</p>
								<?php endif; ?>

							</div>
						</div>
					</div>
				</li>
				<?php
			}
			?>			
		</ul>
	</div>
</section>
<!-- Slider End -->
<section class="service-v1">
	<div class="container">
		<!-- <div class="panel certifications-box panel-default">
			<div class="panel-body"> -->
				<p class="homeP">
					Established in 2012,<strong class="text-primary"> Dulles Geotechnical and Materials Testing Services, Inc. (DGMTS)</strong> is a certified<strong class="text-success"> SWaM</strong> and<strong class="text-success"> MBE/DBE</strong> certified firm, specializing in a wide range of engineering services. is a major contributor to the country's infrastructure and materials testing industry. We provide comprehensive <b>geotechnical engineering</b> including <b>instrumentation, drilling</b> and <b>QA/QC</b> testing services, to both the public and private sectors in <b>Virginia, Maryland</b> and the <b>Washington DC</b> area.
				</p>
				<p class="homeP">
					At Our <strong class="text-primary"> Dulles Geotechnical and Materials Testing Services, Inc. (DGMTS)</strong>, our strength lies in our diverse team of experts. Our highly trained and experienced team of more than 70 professionals includes <b>professional engineers, geotechnical engineers, structural engineers, geologists project managers</b> and construction <b>engineers,</b> inspectors, technicians, designers and administrative support personnel, who are ready to tackle superior engineering consulting and site services while maintaining industry standards. Professionalism and quality are at the heart of everything we do, and these values pervade all aspects of DGMTS' operations.
				</p>
				<p class="homeP">
					<strong style="font-size: 16px;" class="text-primary">DGMTS</strong> has vast track record of completing fast-track projects meeting the deadlines efficiently.
				</p>
				<p class="homeP">
					<strong style="font-size: 16px;" class="text-primary">DGMTS</strong> has its main office in Chantilly, Virginia and branch offices in Prince George's County, Maryland, Hampton, and Washington DC.
				</p>
				<p class="homeP">
					<strong style="font-size: 16px;" class="text-primary">DGMTS</strong> commitment to excellence is underscored by our two accredited well-equipped full services <b>laboratories located in Chantilly and Hampton, Virginia.</b>
				</p>
				<!-- <table>
					<tr>
						<td valign="top"><p><strong>Address:</strong></p></td>
						<td valign="top" style="padding-left:3px" class="colspan-2">
							<p> 2046 Exploration Way,<br>Unit A, Hampton, VA 23666</p>
						</td>
					</tr>
					<tr>
						<td valign="top"><p><strong>Phone:</strong></p></td>
						<td valign="top" style="padding-left:3px" class="colspan-2">
							<p> +1 337 965 4600</p>
						</td>
					</tr>
				</table> -->
			<!-- </div> -->
		<!-- </div> -->
		

	</div>
</section>
<section class="">
<div class="container">
    <div class="row">
		<div class="col-xs-6" >
			<div class="panel certifications-box panel-default">
				<div class="panel-heading" style="background: rgb(21,154,0);
background: linear-gradient(90deg, rgba(21,154,0,1) 16%, rgba(221,247,213,1) 33%, rgba(221,247,213,1) 67%, rgba(21,154,0,1) 84%);">
					<h3><strong>MBE/DBE<br>CERTIFICATIONS</strong></h3>
				</div>
				<div class="panel-body" style="background: rgb(255,255,255);
background: linear-gradient(135deg, rgba(255,255,255,1) 30%, rgba(49,208,0,1) 71%, rgba(107,255,176,1) 100%);">
					<ul class="certifications-list">
						<li>Virginia Department of Transportation (VDOT)</li>
						<li>District Department of Transportation (DDOT)</li>
						<li>Metropolitan Washington Airport Authority (MWAA)</li>
						<li>Washington Metropolitan Area Transit Authority (WMATA)</li>
						<li>Maryland Department of Transportation (MDOT)</li>
						<li>Maryland Transit Administration (MTA)</li>
						<li>Maryland Transportation Authority (MDTA)</li>
					</ul>
					<!-- <table>
						<tr>
							<td valign="top"><p><strong>Address:</strong></p></td>
							<td valign="top" style="padding-left:3px" class="colspan-2">
								<p> 2046 Exploration Way,<br>Unit A, Hampton, VA 23666</p>
							</td>
						</tr>
						<tr>
							<td valign="top"><p><strong>Phone:</strong></p></td>
							<td valign="top" style="padding-left:3px" class="colspan-2">
								<p> +1 337 965 4600</p>
							</td>
						</tr>
					</table> -->
				</div>
			</div>
		</div>
		<div class="col-xs-6" >
			<div class="panel staff-box panel-default">
				<div class="panel-heading" style="background: rgb(0,244,254);
background: linear-gradient(90deg, rgba(0,244,254,1) 16%, rgba(195,247,244,1) 33%, rgba(195,247,244,1) 67%, rgba(0,244,254,1) 100%);">
					<h3>RESOURCES</h3>
				</div>
				<div class="panel-body" style="background: rgb(107,217,255);
background: linear-gradient(135deg, rgba(107,217,255,1) 29%, rgba(0,189,255,1) 58%, rgba(107,217,255,1) 100%);">
					<h4>DGMTS Staff:</h4>
					<ul class="staff-list">
						<li>Geotechnical Engineers/Geologists</li>
						<li>Project Managers / QAM</li>
						<li>QC Inspectors & Fields Technicians</li>
						<li>Drillers</li>
						<li>Lab Director / Managers /Technicians</li>
					</ul>
					<h4>DGMTS Trainings:</h4>
					<ul class="staff-list">
						<li>OSHA-10</li>
						<li>Nuclear Gauge Safety</li>
						<li>E&S</li>
					</ul>
					<h4>DGMTS Certifications:</h4>
					<ul class="staff-list">
						<li>VDOT</li>
						<li>WACEL</li>
						<li>MDOT</li>
						<li>ACI</li>
					</ul>
					<!-- <table>
						<tr>
							<td valign="top"><p><strong>Address:</strong></p></td>
							<td valign="top" style="padding-left:3px" class="colspan-2">
								<p> 2046 Exploration Way,<br>Unit A, Hampton, VA 23666</p>
							</td>
						</tr>
						<tr>
							<td valign="top"><p><strong>Phone:</strong></p></td>
							<td valign="top" style="padding-left:3px" class="colspan-2">
								<p> +1 337 965 4600</p>
							</td>
						</tr>
					</table> -->
				</div>
			</div>
		</div>
        <!-- <div class="col-xs-6">
            <div class="certifications-box">
                <h3>MBE/DBE<br>CERTIFICATIONS</h3>
                <ul class="certifications-list">
                    <li>Virginia Department of Transportation (VDOT)</li>
                    <li>District Department of Transportation (DDOT)</li>
                    <li>Metropolitan Washington Airport Authority (MWAA)</li>
                    <li>Washington Metropolitan Area Transit Authority (WMATA)</li>
                    <li>Maryland Department of Transportation (MDOT)</li>
                    <li>Maryland Transit Administration (MTA)</li>
                    <li>Maryland Transportation Authority (MDTA)</li>
                </ul>
            </div>
        </div> -->
		<!-- <div class="col-xs-6">
            <div class="staff-box">
                <h3>RESOURCES</h3>
                <h4>DGMTS Staff:</h4>
                <ul class="staff-list">
                    <li>Geotechnical Engineers/Geologists</li>
                    <li>Project Managers / QAM</li>
                    <li>QC Inspectors & Fields Technicians</li>
                    <li>Drillers</li>
                    <li>Lab Director / Managers /Technicians</li>
                </ul>
                <h4>DGMTS Trainings:</h4>
                <ul class="staff-list">
                    <li>OSHA-10</li>
                    <li>Nuclear Gauge Safety</li>
                    <li>E&S</li>
                </ul>
                <h4>DGMTS Certifications:</h4>
                <ul class="staff-list">
                    <li>VDOT</li>
                    <li>WACEL</li>
                    <li>MDOT</li>
                    <li>ACI</li>
                </ul>
            </div>
        </div> -->
    </div>
</div>
</section>
<?php if($home_status_service == 'ShowRm'): ?>
<!-- Service Start -->
<section class="service-v1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading wow fadeInUp">
					<h2><?php echo $home_title_service; ?></h2>
					<p><?php echo $home_subtitle_service; ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
			$statement = $pdo->prepare("SELECT * FROM tbl_service ORDER BY id ASC");
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
			foreach ($result as $row) {
				?>
				<div class="col-sm-6 col-md-3 col-lg-3">
					<div class="item">
						<div class="photo" style="background-image:url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>);">
						</div>
						<div class="text">
							<h3><a href="<?php echo BASE_URL.URL_SERVICE.$row['slug']; ?>"><?php echo $row['name']; ?></a></h3>
							<p>
								<?php echo $row['short_description']; ?>
							</p>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>
<!-- Service End -->
<?php endif; ?>



<?php if($home_status_team_member == 'Show'): ?>
<!-- Team Member Start -->
<section class="team-member-v1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading wow fadeInUp">
					<h2><?php echo $home_title_team_member; ?></h2>
					<p><?php echo $home_subtitle_team_member; ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				
				<!-- Team Member Carousel Start -->
				<div class="team-member-carousel">
					<?php
					$statement = $pdo->prepare("SELECT 
												
												t1.id,
												t1.name,
												t1.slug,
												t1.designation_id,
												t1.photo,
												t1.facebook,
												t1.twitter,
												t1.linkedin,
												t1.youtube,
												t1.google_plus,
												t1.instagram,
												t1.flickr,

												t2.designation_id,
												t2.designation_name

					                           FROM tbl_team_member t1
					                           JOIN tbl_designation t2
					                           ON t1.designation_id = t2.designation_id
					                           WHERE t1.status = ?
					                           ");
					$statement->execute(array('Active'));
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
					foreach ($result as $row) {
						?>
						<div class="item wow fadeInUp">
							<div class="thumb">
								<div class="photo" style="background-image:url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>);"></div>
								<div class="overlay"></div>
								<div class="social-icons">
									<ul>
										<?php if($row['facebook']!=''): ?>
											<li><a href="<?php echo $row['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<?php endif; ?>

										<?php if($row['twitter']!=''): ?>
											<li><a href="<?php echo $row['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<?php endif; ?>

										<?php if($row['linkedin']!=''): ?>
											<li><a href="<?php echo $row['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
										<?php endif; ?>

										<?php if($row['youtube']!=''): ?>
											<li><a href="<?php echo $row['youtube']; ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
										<?php endif; ?>

										<?php if($row['google_plus']!=''): ?>
											<li><a href="<?php echo $row['google_plus']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
										<?php endif; ?>

										<?php if($row['instagram']!=''): ?>
											<li><a href="<?php echo $row['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
										<?php endif; ?>

										<?php if($row['flickr']!=''): ?>
											<li><a href="<?php echo $row['flickr']; ?>" target="_blank"><i class="fa fa-flickr"></i></a></li>
										<?php endif; ?>
									</ul>
								</div>
							</div>
							<div class="text">
								<h3><a href="<?php echo BASE_URL.URL_TEAM.$row['slug']; ?>"><?php echo $row['name']; ?></a></h3>
								<p><?php echo $row['designation_name']; ?></p>
							</div>
						</div>
						<?php
					}
					?>					
				</div>
				<!-- Team Member Carousel End -->

			</div>
		</div>
	</div>
</section>
<!-- Team Members End -->
<?php endif; ?>



<?php if($counter_status == 'Show'): ?>
<div class="why-us" style="background-image:url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $counter_photo; ?>);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row why-us-counter">
			<div class="col-md-3">
				<div class="counter"><?php echo $counter_1_value; ?></div>
				<div class="title"><?php echo $counter_1_title; ?></div>
			</div>
			<div class="col-md-3">
				<div class="counter"><?php echo $counter_2_value; ?></div>
				<div class="title"><?php echo $counter_2_title; ?></div>
			</div>
			<div class="col-md-3">
				<div class="counter"><?php echo $counter_3_value; ?></div>
				<div class="title"><?php echo $counter_3_title; ?></div>
			</div>
			<div class="col-md-3">
				<div class="counter"><?php echo $counter_4_value; ?></div>
				<div class="title"><?php echo $counter_4_title; ?></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>



<?php if($home_status_news == 'Show'): ?>
<!-- News Start -->
<section class="news-v1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading wow fadeInUp">
					<h2><?php echo $home_title_news; ?></h2>
					<p><?php echo $home_subtitle_news; ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				
				<!-- News Carousel Start -->
				<div class="news-carousel">

					<?php
					$i=0;
					$statement = $pdo->prepare("SELECT * FROM tbl_news ORDER BY news_id DESC");
					$statement->execute();
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
					foreach ($result as $row) {
						$i++;
						if($i>$total_recent_news_home_page) {break;}
						?>
						<div class="item wow fadeInUp">
							<div class="thumb">
								<div class="photo" style="background-image:url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>);"></div>
							</div>
							<div class="text">
								<h3><a href="<?php echo BASE_URL.URL_NEWS.$row['news_slug']; ?>"><?php echo $row['news_title']; ?></a></h3>
								<?php echo substr($row['news_content'],0,120).' ...'; ?>
							</div>
						</div>
						<?php
					}
					?>
					
				</div>
				<!-- News Carousel End -->

			</div>
		</div>
	</div>
</section>
<!-- News End -->
<?php endif; ?>





<?php if($home_status_testimonial == 'Show'): ?>
<!-- Testimonial Start -->
<section class="testimonial-v1" style="background-image:url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $home_photo_testimonial; ?>);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading">
					<h2><?php echo $home_title_testimonial; ?></h2>
					<p><?php echo $home_subtitle_testimonial; ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				
				<!-- Testimonial Carousel Start -->
				<div class="testimonial-carousel">
					<?php
					$statement = $pdo->prepare("SELECT * FROM tbl_testimonial ORDER BY id ASC");
					$statement->execute();
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
					foreach ($result as $row) {
						?>
						<div class="item">
							<div class="testimonial-wrapper">								
								<div class="content">									
									<div class="author">
										<div class="photo">
											<img src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>">
										</div>
										<div class="text">
											<h3><?php echo $row['name']; ?></h3>
											<h4><?php echo $row['designation']; ?> 
											<?php if($row['company']!=''): ?>
											<span>(<?php echo $row['company']; ?>)</span>
											<?php endif; ?>
											</h4>
										</div>
									</div>	
									<div class="comment">
										<p>
											<?php echo nl2br($row['comment']); ?>
										</p>
										<div class="icon"></div>
									</div>									
								</div>
							</div>
						</div>
						<?php
					}
					?>
				</div>
				<!-- Testimonial Carousel End -->

			</div>
		</div>
	</div>
</section>
<!-- Testimonial End -->
<?php endif; ?>


	


<?php if($home_status_partner == 'Show'): ?>
<!-- Partner Start -->
<section class="partner-v1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading">
					<h2><?php echo $home_title_partner; ?></h2>
					<p><?php echo $home_subtitle_partner; ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="partner-carousel">
					<?php
					$statement = $pdo->prepare("SELECT * FROM tbl_partner ORDER BY id ASC");
					$statement->execute();
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
					foreach ($result as $row) {
						?>
						<div class="item">
							<div class="inner">
								<?php if($row['url']==''): ?>
									<img src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>">
								<?php else: ?>
									<a href="<?php echo $row['url']; ?>" target="_blank"><img src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>"></a>
								<?php endif; ?>
								
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Partner End -->
<?php endif; ?>

<?php require_once('footer.php'); ?>