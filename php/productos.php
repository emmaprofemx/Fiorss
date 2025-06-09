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
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Fior</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
<link href="../css/style.css" rel="stylesheet" />

<link href="../css/responsive.css" rel="stylesheet" />

<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>

<script type="text/javascript" src="../js/bootstrap.js"></script>

<script type="text/javascript" src="../js/custom.js"></script>


  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>
<body class="sub_page">
  <div class="hero_area">
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>Fior</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="../index.html">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="../about.html">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="../gallery.html">Galeria</a></li>
                <li class="nav-item active"><a class="nav-link" href="../php/productos.php">Productos</a></li>
              </ul>
            </div>
            <div class="quote_btn-container d-flex align-items-center gap-3">
              <a href="login.html" class="text-white">Ingresar</a>
              <a href="ver_carrito.php" class="position-relative d-inline-block" style="width: 32px;">
                <img src="../images/cart.png" alt="Carrito" style="width: 100%;">
                <?php if ($total_items > 0): ?>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                  <?= $total_items ?>
                </span>
                <?php endif; ?>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
  </div>
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container justify-content-center">
        <h2>Productos</h2>
        <?php if (isset($_SESSION['producto_agregado'])): ?>
<div class="alert alert-success text-center">
  Producto agregado correctamente al carrito 🛒
</div>
<?php unset($_SESSION['producto_agregado']); endif; ?>

      </div>
      <div class="row mt-4">
        <?php
       $productos = [
  1 => ['nombre' => 'Arreglo Floral Aniversario', 'precio_original' => 120.00, 'precio' => 99.00, 'imagen' => '../images/producto1.webp'],
  2 => ['nombre' => 'Astromelias Rosadas', 'precio' => 80.00, 'imagen' => '../images/producto2.webp'],
  3 => ['nombre' => 'Flores Primavera', 'precio' => 80.00, 'imagen' => '../images/producto3.webp'],
  4 => ['nombre' => 'Ramo Especial', 'precio_original' => 120.00, 'precio' => 99.00, 'imagen' => '../images/producto4.webp']
];

        foreach ($productos as $id => $producto):
        ?>
        <div class="col-md-3 col-sm-4 mb-3">
          <div class="card h-100 d-flex flex-column">
            <img src="<?= $producto['imagen'] ?>" class="card-img-top" alt="<?= $producto['nombre'] ?>" style="height: 240px; object-fit: cover;">
            <div class="card-body d-flex flex-column text-center">
              <h5 class="card-title"><?= $producto['nombre'] ?></h5>
              <p class="card-text">
                <?php if (isset($producto['precio_original'])): ?>
                <span class="text-muted text-decoration-line-through">
                  $<?= number_format($producto['precio_original'], 2) ?>
                </span>
                <span class="text-danger fw-bold ms-2">
                  $<?= number_format($producto['precio'], 2) ?>
                </span>
                <?php else: ?>
                <span class="fw-bold">$<?= number_format($producto['precio'], 2) ?></span>
                <?php endif; ?>
              </p>
              <form method="GET" action="carrito.php" class="mt-auto">
                <input type="hidden" name="id" value="<?= $id ?>">
                <button type="submit" class="btn btn-primary">Agregar al carrito</button>
              </form>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_logo">
            <h5>
              Fior
            </h5>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links pl-lg-5">
            <h5>
              Enlaces
            </h5>
            <ul>
              <li class="active">
                <a href="../index.html">
                  Inicio
                </a>
              </li>
              <li>
                <a href="../about.html">
                  Nosotros
                </a>
              </li>
              <li>
                <a href="../gallery.html">
                  Galeria
                </a>
              </li>
              <li>
                <a href="../php/productos.php">
                  Productos
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_insta">
            <h5>
              Instagram
            </h5>
            <div class="insta_container">
              <div>
                <a href="">
                  <div class="insta-box b-1">
                    <img src="../images/insta-1.png" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-2">
                    <img src="../images/insta-2.png" alt="">
                  </div>
                </a>
              </div>
              <div>
                <a href="">
                  <div class="insta-box b-3">
                    <img src="../images/insta-3.png" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-4">
                    <img src="../images/insta-4.png" alt="">
                  </div>
                </a>
              </div>
              <div>
                <a href="">
                  <div class="insta-box b-3">
                    <img src="../images/insta-5.png" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-4">
                    <img src="../images/insta-6.png" alt="">
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
  <div class="info_contact">
    <h5>
      Contacto
    </h5>
    <div>
      <img src="../images/location-white.png" alt="Ubicación">
      <p>
        Av. Té 950, Granjas México, Iztacalco, 08400 Ciudad de México, CDMX
      </p>
    </div>
    <div>
      <img src="../images/telephone-white.png" alt="Teléfono">
      <p>
        +52 (55) 214 5588
      </p>
    </div>
    <div>
      <img src="../images/envelope-white.png" alt="Correo electrónico">
      <p>
        contacto@fiorflores.com
      </p>
    </div>
  </div>
</div>
      </div>
    </div>
  </section>
  <footer class="container-fluid footer_section">
  </footer>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
