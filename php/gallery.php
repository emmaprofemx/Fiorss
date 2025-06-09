<?php
session_start();
$total_items = 0;
if (isset($_SESSION['carrito'])) {
  foreach ($_SESSION['carrito'] as $item) {
    $total_items += $item['cantidad'];
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Fior</title>

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
<link href="../css/style.css" rel="stylesheet" />

<link href="../css/responsive.css" rel="stylesheet" />

<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>

<script type="text/javascript" src="../js/bootstrap.js"></script>

<script type="text/javascript" src="../js/custom.js"></script>
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section starts -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>Fior</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">Nosotros</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="gallery.php">Galería</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="productos.php">Productos</a>
                </li>
              </ul>
            </div>
            <div class="quote_btn-container d-flex align-items-center gap-3">
              <a href="login.html">Ingresar</a>
              <a href="php/ver_carrito.php" class="position-relative d-inline-block" style="width: 32px;">
                <img src="../images/cart.png" alt="Carrito" style="width: 100%;">
                <?php if ($total_items > 0): ?>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                  <?= $total_items ?>
                </span>
                <?php endif; ?>
              </a>
              <form class="form-inline">
                <button class="btn my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- gallery section -->
  <section class="gallery_section layout_padding">
    <div class="heading_container justify-content-center">
      <h2>Nuestra Galería</h2>
    </div>
    <div class="container">
      <div class="img_container">
        <div class="box-1">
          <div class="box-1-container">
            <div class="b-1">
              <div class="img-box">
                <img src="../images/g-1.jpg" alt="">
              </div>
              <div class="img-box">
                <img src="../images/g-4.jpg" alt="">
              </div>
            </div>
            <div class="b-2">
              <div class="img-box">
                <img src="../images/g-2.jpg" alt="">
              </div>
              <div class="img-box">
                <img src="../images/g-5.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="b-3">
            <div class="img-box">
              <img src="../images/g-7.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="box-2">
          <div class="img-box">
            <img src="../images/g-3.jpg" alt="">
          </div>
          <div class="img-box">
            <img src="../images/g-6.jpg" alt="">
          </div>
          <div class="img-box flex-grow-1">
            <img src="../images/g-8.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end gallery section -->

  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_logo">
            <h5>Fior</h5>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links pl-lg-5">
            <h5>Enlaces</h5>
            <ul>
              <li class="active"><a href="index.html">Inicio</a></li>
              <li><a href="about.html">Nosotros</a></li>
              <li><a href="gallery.php">Galería</a></li>
              <li><a href="productos.php">Productos</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_insta">
            <h5>Instagram</h5>
            <div class="insta_container">
              <div>
                <a href=""><div class="insta-box b-1"><img src="images/insta-1.png" alt=""></div></a>
                <a href=""><div class="insta-box b-2"><img src="images/insta-2.png" alt=""></div></a>
              </div>
              <div>
                <a href=""><div class="insta-box b-3"><img src="images/insta-3.png" alt=""></div></a>
                <a href=""><div class="insta-box b-4"><img src="images/insta-4.png" alt=""></div></a>
              </div>
              <div>
                <a href=""><div class="insta-box b-3"><img src="images/insta-5.png" alt=""></div></a>
                <a href=""><div class="insta-box b-4"><img src="images/insta-6.png" alt=""></div></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_contact">
            <h5>Contacto</h5>
            <div>
              <img src="../images/location-white.png" alt="Ubicación">
              <p>Av. Té 950, Granjas México, Iztacalco, 08400 Ciudad de México, CDMX</p>
            </div>
            <div>
              <img src="../images/telephone-white.png" alt="Teléfono">
              <p>+52 (55) 214 5588</p>
            </div>
            <div>
              <img src="../images/envelope-white.png" alt="Correo electrónico">
              <p>contacto@fiorflores.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p></p>
  </footer>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>
