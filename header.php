<?php
ob_start();
session_start();
include("admin/config.php");
include("admin/functions.php");
include("admin/inc/language_data.php");

require 'assets/mail/PHPMailer.php';
require 'assets/mail/Exception.php';
$mail = new PHPMailer\PHPMailer\PHPMailer();
							
$error_message = '';
$success_message = '';
$error_message1 = '';
$success_message1 = '';
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=?");
$statement->execute(array(1));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
foreach ($result as $row) {
	$mod_rewrite = $row['mod_rewrite'];
	$color = $row['color'];
}
if($mod_rewrite == 'Off') {
	define("URL_CATEGORY", "category.php?slug=");
	define("URL_PAGE", "page.php?slug=");
	define("URL_NEWS", "blog.php?slug=");
	define("URL_SERVICE", "service.php?slug=");
	define("URL_TEAM", "team-member.php?slug=");
	define("URL_SEARCH", "search.php");
} else {
	define("URL_CATEGORY", "category/");
	define("URL_PAGE", "page/");
	define("URL_NEWS", "blog/");
	define("URL_SERVICE", "service/");
	define("URL_TEAM", "team-member/");
	define("URL_SEARCH", "search");
}
?>
<?php
// Getting the basic data for the website from database
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	$logo = $row['logo'];
	$favicon = $row['favicon'];
	$contact_email = $row['contact_email'];
	$contact_phone = $row['contact_phone'];
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

	<!-- Meta Tags -->	
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title>DGMTS</title>


	<!-- Showing the SEO related meta tags data -->
	<?php
	
	// Getting the current page URL
	$cur_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);

	if($cur_page == 'blog.php')
	{
		$statement = $pdo->prepare("SELECT * FROM tbl_news WHERE news_slug=?");
		$statement->execute(array($_REQUEST['slug']));
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
		foreach ($result as $row) 
		{
		    $og_photo = $row['photo'];
		    $og_title = $row['news_title'];
		    $og_slug = $row['news_slug'];
			$og_description = substr(strip_tags($row['news_content']),0,200).'...';
			echo '<meta name="description" content="'.$row['meta_description'].'">';
			echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
			echo '<title>'.$row['meta_title'].'</title>';
		}
	}

	if($cur_page == 'page.php')
	{
		$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE page_slug=?");
		$statement->execute(array($_REQUEST['slug']));
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
		foreach ($result as $row) 
		{
			echo '<meta name="description" content="'.$row['meta_description'].'">';
			echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
			echo '<title>'.$row['meta_title'].'</title>';
		}
	}

	if($cur_page == 'category.php')
	{
		$statement = $pdo->prepare("SELECT * FROM tbl_category WHERE category_slug=?");
		$statement->execute(array($_REQUEST['slug']));
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
		foreach ($result as $row)
		{
			echo '<meta name="description" content="'.$row['meta_description'].'">';
			echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
			echo '<title>'.$row['meta_title'].'</title>';
		}
	}

	if($cur_page == 'index.php')
	{
		$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
		foreach ($result as $row) 
		{
			echo '<meta name="description" content="'.$row['meta_description_home'].'">';
			echo '<meta name="keywords" content="'.$row['meta_keyword_home'].'">';
			echo '<title>'.$row['meta_title_home'].'</title>';
		}
	}
	
	if($cur_page == 'team-member.php')
	{
		$statement = $pdo->prepare("SELECT * FROM tbl_team_member WHERE slug=?");
		$statement->execute(array($_REQUEST['slug']));
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
		foreach ($result as $row) 
		{
			echo '<meta name="description" content="'.$row['meta_description'].'">';
			echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
			echo '<title>'.$row['meta_title'].'</title>';
		}
	}
	
	if($cur_page == 'service.php')
	{
		$statement = $pdo->prepare("SELECT * FROM tbl_service WHERE slug=?");
		$statement->execute(array($_REQUEST['slug']));
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
		foreach ($result as $row) 
		{
			echo '<meta name="description" content="'.$row['meta_description'].'">';
			echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
			echo '<title>'.$row['meta_title'].'</title>';
		}
	}
	?>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/slicknav.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/superfish.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/animate.css">
	
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery.bxslider.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/hover.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/responsive.css">

	<script src="<?php echo BASE_URL; ?>assets/js/modernizr.min.js"></script>

	<?php if($cur_page == 'blog.php'): ?>
		<meta property="og:title" content="<?php echo $og_title; ?>">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo BASE_URL.URL_NEWS.$og_slug; ?>">
		<meta property="og:description" content="<?php echo $og_description; ?>">
		<meta property="og:image" content="<?php echo BASE_URL; ?>assets/uploads/<?php echo $og_photo; ?>">
	<?php endif; ?>

	<!-- <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons"></script> -->
	
	
<style>
	/* Your existing color and theme styles */
	.sf-menu li a {
		color: #fff;
	}
	.sf-menu li li:hover,
	.slider p.button a,
	.team-member-v1 .text,
	.why-us .overlay,
	.team-member-v1 .owl-controls .owl-prev:hover, 
	.team-member-v1 .owl-controls .owl-next:hover,
	.news-v1 .owl-controls .owl-prev:hover, 
	.news-v1 .owl-controls .owl-next:hover,
	.testimonial-v1 .overlay,
	.newsletter-area .overlay,
	.footer-col h3:after,
	.scrollup i,
	.page-banner .overlay,
	.team-member-v3 .text p.button a,
	.team-member-detail .contact .icon,
	.team-member-detail .team-member-single .social ul li a,
	ul.gallery-menu li.filter.active,
	ul.gallery-menu li:hover,
	.gallery .inner .icons-inner a,
	.widget h4,
	.widget-search button,
	.blog p.button a:hover,
	.contact-v1 .cform-1 .btn-success {
		background: #<?php echo $color; ?>!important;
	}
	.service-v1 .heading h2,
	.service-v1 .text h3 a,
	.team-member-v1 .heading h2,
	.news-v1 .heading h2,
	.news-v1 .text h3 a,
	.testimonial-v1 .owl-controls .owl-prev, 
	.testimonial-v1 .owl-controls .owl-next,
	.partner-v1 .heading h2,
	.team-member-v3 .text h3 a,
	.team-member-detail .team-member-single .text p,
	.team-member-detail .team-member-detail-tab .nav-tabs>li>a,
	ul.gallery-menu li,
	.widget ul li a:hover,
	.blog .text ul.status li a,
	.blog .text ul.status li,
	.blog h3 a:hover,
	.heading-normal h2 {
		color: #<?php echo $color; ?>!important;	
	}
	ul.gallery-menu li.filter.active,
	ul.gallery-menu li:hover,
	.widget-search input:focus,
	.widget-search button,
	.form-control:focus,
	.contact-v1 .cform-1 .btn-success {
		border-color: #<?php echo $color; ?>!important;		
	}
	.heading-normal h2 {
		border-bottom-color: #<?php echo $color; ?>!important;			
	}
	.slider p.button a:hover,
	.team-member-v1 .text:hover,
	.team-member-v3 .text p.button a:hover,
	.team-member-detail .team-member-single .social ul li a:hover,
	.gallery .inner .icons-inner a:hover,
	.contact-v1 .cform-1 .btn-success:hover {
		background: #333!important;
	}
	.news-v1 .text h3 a:hover {
		color: #333!important;	
	}
	.contact-v1 .cform-1 .btn-success:hover {
		border-color: #333!important;
	}
	ul.gallery-menu li.filter.active,
	ul.gallery-menu li:hover {
		color: #fff!important;
	}

	.index-social {
		background-color: #2c2c2c;
		color: #fff;
	}
	.link-area .fa-li {
		width: 40px;
		height: 40px;
		border-radius: 50%;
		border: solid 1px #fff;
		list-style-type: none;
		margin: 5px;
		display: inline-block;
	}
	.index-social a {
		color: #fff;
		font-size: 25px;
		display: block;
		float: left;
		padding: 10px;
	}
	.index-link h3 {
		text-align: center;
		color: #f1f1f1;
		text-align: left;
	}
	.index-link {
		background-color: #000;
	}
	.index-link ul {
		padding: 0px;
	}
	.index-link ul li {
		list-style-type: none;
	}
	.index-link ul li a {
		text-decoration: none;
		font-size: 16px;
		color: #fff;
		display: block;
		padding: 5px 0;
		text-align: left;
	}
	.index-link ul li a:hover {
		text-decoration: underline;
	}
	.copy-c {
		padding-top: 15px;
	}
	.logo_image {
		position: relative;
		left: 50%;
		transform: translateX(-50%);
	}

	/* -------------------- NEW FLEX NAV STYLING -------------------- */

	/* Center and wrap nav menu */
	.sf-menu {
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		padding: 0;
		margin: 0;
		list-style: none;
	}

	/* Top-level nav items */
	.sf-menu li {
		margin: 0 10px;
		position: relative;
	}

	.sf-menu li a {
		display: block;
		padding: 10px 15px;
		white-space: nowrap;
		color: #fff;
	}

	/* Submenu dropdown */
	.sf-menu li ul {
		position: absolute;
		left: 0;
		top: 100%;
		display: none;
		background: #000;
		z-index: 1000;
		min-width: 180px;
	}

	.sf-menu li:hover ul {
		display: block;
	}

	/* Submenu items */
	.sf-menu li ul li a {
		padding: 10px;
		white-space: normal;
	}
</style>


</head>
<body>

<?php
// Getting Facebook comment code from the database
$statement = $pdo->prepare("SELECT * FROM tbl_comment WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
foreach ($result as $row) 
{
	echo $row['code_body'];
}
?>
	
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<div class="page-wrapper">
		
		<!-- Top Bar Start -->
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<a href="<?php echo BASE_URL; ?>index.php">
							<img class="logo_image" src="<?php echo BASE_URL; ?>assets/img/logo.png" alt="logo">
						</a>
					</div>
					<div class="col-md-6" style="text-align: right; padding-top: 25px;">
						<img src="<?php echo BASE_URL; ?>assets/uploads/geo5-authorized-partner-footer.png" alt="GEO5 Authorized Partner" style="max-height: 80px; max-width: 180px; vertical-align: middle;">
					</div>
				</div>
			</div>
		</div>
		<!-- Top Bar End -->

		<!-- Header Start -->
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12 nav-wrapper">

						<!-- Nav Start -->
						<nav>
							<ul class="sf-menu" id="menu">
								<?php
                                $q = $pdo->prepare("SELECT * FROM tbl_menu WHERE menu_parent=? ORDER BY menu_order ASC");
                                $q->execute(array(0));
                                $res = $q->fetchAll();
                                foreach ($res as $row) {
                                    
                                    $r = $pdo->prepare("SELECT * FROM tbl_menu WHERE menu_parent=?");
                                    $r->execute(array($row['menu_id']));
                                    $total = $r->rowCount();

                                    echo '<li>';
                                    
                                    if($row['page_id'] == 0) {
                                        
                                        if($row['menu_url'] == '') {
                                            $final_url = 'javascript:void(0);';
                                        } else if($row['menu_url'] == 'home'){
											$final_url = BASE_URL;
										}                                   
                                         ?>
                                        <a href="<?php echo $final_url; ?>"><?php echo $row['menu_name']; ?></a>
                                        <?php
                                    } else {
                                        $r = $pdo->prepare("SELECT * FROM tbl_page WHERE page_id=? ");
                                        $r->execute(array($row['page_id']));
                                        $res1 = $r->fetchAll();
                                        foreach ($res1 as $row1) {
                                            ?>
                                            <a href="<?php echo BASE_URL.URL_PAGE.$row1['page_slug']; ?>"><?php echo $row1['page_name']; ?><?php if($total) {echo '<em></em>';}; ?></a>
                                            <?php
                                        }
                                    }

                                    // Checking for sub-menu
                                    $r = $pdo->prepare("SELECT * FROM tbl_menu WHERE menu_parent=?");
                                    $r->execute(array($row['menu_id']));
                                    $total = $r->rowCount();
                                    if($total) {
                                        echo '<ul>';

                                        $res1 = $r->fetchAll();
                                        foreach ($res1 as $row1) {
                                            //
                                            echo '<li>';
                                            if($row1['page_id'] == 0) {
                                                if($row1['menu_url'] == '') {
                                                    $final_url1 = 'javascript:void(0);';
                                                } else {
                                                    $final_url1 = $row1['menu_url'];
                                                }
                                                ?>
                                                <a href="<?php echo $final_url1; ?>"><?php echo $row1['menu_name']; ?></a>
                                                <?php
                                            } else {
                                                $s = $pdo->prepare("SELECT * FROM tbl_page WHERE page_id=?");
                                                $s->execute(array($row1['page_id']));
                                                $res2 = $s->fetchAll();
                                                foreach ($res2 as $row2) {
                                                    ?>
                                                    <a href="<?php echo BASE_URL.URL_PAGE.$row2['page_slug']; ?>"><?php echo $row2['page_name']; ?></a>
                                                    <?php
                                                }
                                            }
                                            echo '</li>';
                                            //
                                        }

                                        echo '</ul>';
                                    }


                                    echo '</li>';

                                }
                                ?>
							</ul>
						</nav>
						<!-- Nav End -->

					</div>
				</div>
			</div>
		</header>
		<!-- Header End -->