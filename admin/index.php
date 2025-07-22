<?php require_once('header.php'); ?>

<section class="content-header">
  <h1>Dashboard</h1>
</section>

<?php 
$statement = $pdo->prepare("SELECT * FROM tbl_user");
$statement->execute();
$total_user = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_page");
$statement->execute();
$total_page = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_menu");
$statement->execute();
$total_menu = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_photo");
$statement->execute();
$total_photo = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_video");
$statement->execute();
$total_video = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_team_member");
$statement->execute();
$total_team_member = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_slider");
$statement->execute();
$total_slider = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_partner");
$statement->execute();
$total_partner = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_service");
$statement->execute();
$total_service = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_testimonial");
$statement->execute();
$total_testimonial = $statement->rowCount();
?>

<section class="content">

  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <div class="info-box-content bg-green">
          <span class="info-box-text">Total Team Members</span>
          <span class="info-box-number"><?php echo $total_team_member; ?></span>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <div class="info-box-content bg-green">
          <span class="info-box-text">Total Sliders</span>
          <span class="info-box-number"><?php echo $total_slider; ?></span>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <div class="info-box-content bg-green">
          <span class="info-box-text">Total Pages</span>
          <span class="info-box-number"><?php echo $total_page; ?></span>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <div class="info-box-content bg-green">
          <span class="info-box-text">Total Menu</span>
          <span class="info-box-number"><?php echo $total_menu; ?></span>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <div class="info-box-content bg-green">
          <span class="info-box-text">Total Photos</span>
          <span class="info-box-number"><?php echo $total_photo; ?></span>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <div class="info-box-content bg-green">
          <span class="info-box-text">Total Services</span>
          <span class="info-box-number"><?php echo $total_service; ?></span>
        </div>
      </div>
    </div>
  </div>


</section>

<?php require_once('footer.php'); ?>