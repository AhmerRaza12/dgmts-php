<?php
ob_start();
session_start();
include("config.php");
$error_message = '';
$success_message = '';
$error_message1 = '';
$success_message1 = '';

// Check if the user is logged in or not
if(!isset($_SESSION['user'])) {
	header('location: login.php');
	exit;
}

// Getting data from the website settings table
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
foreach ($result as $row) {
	$receive_email = $row['receive_email'];
}

// Current Page Access Level check for all pages
$cur_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DGMTS - Admin Panel</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/datepicker3.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<link rel="stylesheet" href="css/AdminLTE.min.css">
	<link rel="stylesheet" href="css/_all-skins.min.css">
	<link rel="stylesheet" href="css/on-off-switch.css">
	<link rel="stylesheet" href="css/summernote.css">
	<link rel="stylesheet" href="style.css">


</head>

<body class="hold-transition fixed skin-blue sidebar-mini">

	<div class="wrapper">

		<header class="main-header">

			<a href="index.php" class="logo">
				<span class="logo-lg">DGMTS</span>
			</a>

			<nav class="navbar navbar-static-top">
				
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<span style="float:left;line-height:50px;color:#fff;padding-left:15px;font-size:18px;">Admin Panel</span>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="../assets/uploads/<?php echo $_SESSION['user']['photo']; ?>" class="user-image" alt="User Image">
								<span class="hidden-xs"><?php echo 'Admin'; ?></span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-footer">
									<div>
										<a href="profile-edit.php" class="btn btn-default btn-flat">Edit Profile</a>
									</div>
									<div>
										<a href="logout.php" class="btn btn-default btn-flat">Log out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>

			</nav>
		</header>

  		<?php $cur_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); ?>

  		<aside class="main-sidebar">
    		<section class="sidebar">
      
      			<ul class="sidebar-menu">

			        <li class="treeview <?php if($cur_page == 'index.php') {echo 'active';} ?>">
			          <a href="index.php">
			            <i class="fa fa-hand-o-right"></i> <span>Dashboard</span>
			          </a>
			        </li>

					

			        <li class="treeview <?php if( ($cur_page == 'settings.php') ) {echo 'active';} ?>">
			          <a href="settings.php">
			            <i class="fa fa-hand-o-right"></i> <span>Settings</span>
			          </a>
			        </li>



			        <li class="treeview <?php if( ($cur_page == 'page-add.php')||($cur_page == 'page.php')||($cur_page == 'page-edit.php') ) {echo 'active';} ?>">
			          <a href="page.php">
			            <i class="fa fa-hand-o-right"></i> <span>Page</span>
			          </a>
			        </li>


			        <li class="treeview <?php if( ($cur_page == 'menu-add.php')||($cur_page == 'menu.php')||($cur_page == 'menu-edit.php') ) {echo 'active';} ?>">
			          <a href="menu.php">
			            <i class="fa fa-hand-o-right"></i> <span>Menu</span>
			          </a>
			        </li>



										

					<li class="treeview <?php if( ($cur_page == 'designation-add.php')||($cur_page == 'designation.php')||($cur_page == 'designation-edit.php') || ($cur_page == 'team-member-add.php')||($cur_page == 'team-member.php')||($cur_page == 'team-member-edit.php') ) {echo 'active';} ?>">
						<a href="#">
							<i class="fa fa-hand-o-right"></i>
							<span>Team Member</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="designation.php"><i class="fa fa-circle-o"></i> Designation</a></li>
							<li><a href="team-member.php"><i class="fa fa-circle-o"></i> Team Member</a></li>
						</ul>
					</li>

					
					<li class="treeview <?php if( ($cur_page == 'slider-add.php')||($cur_page == 'slider.php')||($cur_page == 'slider-edit.php') ) {echo 'active';} ?>">
			          <a href="slider.php">
			            <i class="fa fa-hand-o-right"></i> <span>Slider</span>
			          </a>
			        </li>

			        


			        <li class="treeview <?php if( ($cur_page == 'service-add.php')||($cur_page == 'service.php')||($cur_page == 'service-edit.php') ) {echo 'active';} ?>">
			          <a href="service.php">
			            <i class="fa fa-hand-o-right"></i> <span>Service</span>
			          </a>
			        </li>
			        <li class="treeview <?php if( ($cur_page == 'blog.php')||($cur_page == 'blog.php')||($cur_page == 'service-edit.php') ) {echo 'active';} ?>">
			          <a href="blog.php">
			            <i class="fa fa-hand-o-right"></i> <span>Blog</span>
			          </a>
			        </li>
			        <li class="treeview <?php if( ($cur_page == 'published-papers.php')||($cur_page == 'published-papers.php')) {echo 'active';} ?>">
			          <a href="published-papers.php">
			            <i class="fa fa-hand-o-right"></i> <span>Published Papers</span>
			          </a>
			        </li>
			        <li class="treeview <?php if( ($cur_page == 'payments.php')) {echo 'active';} ?>">
			          <a href="payments.php">
			            <i class="fa fa-hand-o-right"></i> <span>Payments</span>
			          </a>
			        </li>
					




			        <li class="treeview <?php if( ($cur_page == 'photo-category-add.php')||($cur_page == 'photo-category.php')||($cur_page == 'photo-category-edit.php') || ($cur_page == 'photo-add.php')||($cur_page == 'photo.php')||($cur_page == 'photo-edit.php') || ($cur_page == 'video-category-add.php')||($cur_page == 'video-category.php')||($cur_page == 'video-category-edit.php') || ($cur_page == 'video-add.php')||($cur_page == 'video.php')||($cur_page == 'video-edit.php') ) {echo 'active';} ?>">
						<a href="#">
							<i class="fa fa-hand-o-right"></i>
							<span>Photo</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="photo-category.php"><i class="fa fa-circle-o"></i> Photo Category</a></li>
							<li><a href="photo.php"><i class="fa fa-circle-o"></i> Photo Gallery</a></li>
							<!-- <li><a href="video-category.php"><i class="fa fa-circle-o"></i> Video Category</a></li>
							<li><a href="video.php"><i class="fa fa-circle-o"></i> Video</a></li> -->
						</ul>
					</li>

					
					


					<li class="treeview <?php if( ($cur_page == 'file-add.php')||($cur_page == 'file.php')||($cur_page == 'file-edit.php') ) {echo 'active';} ?>">
			          <a href="file.php">
			            <i class="fa fa-hand-o-right"></i> <span>File Upload (Media)</span>
			          </a>
			        </li>


					

        
      			</ul>
    		</section>
  		</aside>

  		<div class="content-wrapper">