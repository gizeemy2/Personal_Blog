
<?php

require_once   'admin_panel/db_connection.php';


$setting_sql = $pdo->prepare("SELECT * FROM settings where id=?");
$setting_sql->execute(array(1));
$setting_get = $setting_sql->fetch(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$setting_get['title']?></title>
  <meta content="<?=$setting_get['description']?>" name="description">
  <meta content="<?=$setting_get['keyword']?>" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">GİZEM YILDIZ</a></h1>
    

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">ANASAYFA</a></li>
          <li><a href="about.php">HAKKIMIZDA</a></li>
          <li><a href="team_members.php">EKİBİMİZ</a></li>
          <li><a href="gallery.php">GALERİ</a></li>
          <li><a href="blogs.php">BLOG YAZILARI</a></li>
          <li class="drop-down"><a href="">Kategoriler</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="contact.php">İletişim</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="courses.html" class="get-started-btn">Get Started</a>

    </div>
  </header><!-- End Header -->
