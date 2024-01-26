<!-- ======= Footer ======= -->
<footer id="footer" style="background-color:grey;">

  <div style="background-color:black;" class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3 style="color: white;">Yazılım Yolcusu</h3>
          <p>
            <b style="color: white;"> Adres: </b> <?= $setting_get['adress']; ?>
            <br>
            <strong style="color: white;">Telefon:</strong> <?= $setting_get['phone']; ?><br>
            <strong style="color: white;">Email:</strong><?= $setting_get['email']; ?><br>
          </p>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4 style="color:aliceblue;">Sayfalarımız</h4>
          <ul>
            <li><i style="color:white; " class="bx bx-chevron-right"></i> <a style="color: white; " href="index">Anasayfa</a></li>
            <li><i style="color:white; " class="bx bx-chevron-right"></i> <a style="color: white; " href="hakkimzda">Hakkımızda</a></li>
            <li><i style="color:white; " class="bx bx-chevron-right"></i> <a style="color: white; " href="hizmetler">Hizmetlerimiz</a></li>
            <li><i style="color:white; " class="bx bx-chevron-right"></i> <a style="color: white; " href="ekip">Ekibimiz</a></li>
            <li><i style="color:white; " class="bx bx-chevron-right"></i> <a style="color: white; " href="blog">Blog</a></li>
            <li><i style="color:white; " class="bx bx-chevron-right"></i> <a style="color: white; " href="iletisim">İletişim</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4 style="color:white;">Hizmetlerimiz</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>

          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4 style="color:white;">E bültene abone ol</h4>
          <p style="color:white;"> Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Abone Ol">
          </form>
        </div>

      </div>
    </div>
  </div>

  <div class="container d-md-flex py-4">

    <div class="mr-md-auto text-center text-md-left">
      <strong>Copyright &copy; <?= date("Y") ?> <a href=""></a> </strong> /
      <b>Tüm hakları saklıdır *Marvel2000*</b>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>