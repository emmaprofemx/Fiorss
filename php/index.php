<!DOCTYPE html>
<html>

<head>
    <?php
session_start();
$nombreUsuario = $_SESSION['usuario']['nombre'] ?? null;
?>

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

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />
</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Fiorss
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">Nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="gallery.html"> Galeria </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="php/productos.php">Productos</a>
                </li>
              </ul>
            </div>
            <div class="quote_btn-container ">
             <?php if ($nombreUsuario): ?>
    <p class="bienvenida">Bienvenido, <?php echo htmlspecialchars($nombreUsuario); ?> 👋</p>
<?php else: ?>
    <a href="login.html">Ingresar</a>
<?php endif; ?>

              <a href="">
                <img src="../images/cart.png" alt="">
              </a>
              
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="slider_number-container ">
        <div class="number-box">
          <span>
            01
          </span>
          <hr>
          <span>
            02
          </span>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="col-lg-6 col-md-8">
                  <div class="detail_box">
                    <h2>
                      Bienvenido a
                    </h2>
                    <h1>
                      Flowers shop
                    </h1>
                    <p>
                      ¡Que poder que tienen las flores!
                      Llevan color y frangancia a dónde gustes.<br>Haz que esa persona especial también lo disfrute.<br>
                      Regálalo hoy.
                    </p>
                    <div>
                      <a href="php/productos.php">Ordenar</a>
                    </div>
                  </div>
                </div>
              </div>


            </div>

          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->
  <section class="about_section ">
    <div class="section_number">
      01
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xl-7">
          <div class="img-box">
            <img src="images/about-img.png" alt="" />
          </div>
        </div>
        <div class="col-md-5 col-xl-5">
          <div class="detail_box">
            <div class="heading_container justify-content-end">
              <h2>
                Nosotros
              </h2>
            </div>
            <p>
              En la era de lo digital y lo vertiginoso, creemos en el poder de lo natural para reconectarnos, son
              bienestar, son diseño, son un toque de lujo cotidiano que transforma cualquier espacio.

              <br>En FiorFlores, curamos cada ramo con una visión de diseño contemporáneo, seleccionando flores frescas
              y de temporada para crear arreglos que son verdaderas obras de arte. Nuestro objetivo es llevar la belleza
              de la naturaleza a tu hogar, tu oficina o tu evento especial, creando atmósferas que inspiran y
              revitalizan.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- end about section -->

  <!-- why section -->
  <section class="why_section layout_padding">
    <div class="section_number">
      02
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>
            ¿Por qué elegirnos?<samp></samp>
          </h2>
          <p>
            La emoción de regalar flores está ligada al momento perfecto. Nuestro servicio de entrega es confiable,
            puntual y cuidadoso. Tratamos cada pedido como si fuera nuestro, garantizando que el arreglo llegue en
            condiciones impecables y justo cuando lo esperas. Con nosotros, puedes tener la tranquilidad de que tu
            sorpresa llegará para iluminar el día de esa persona especial, sin contratiempos.
          </p>
          <div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end why section -->

  <!-- gallery section -->
  <section class="gallery_section layout_padding">
    <div class="section_number">
      03
    </div>
    <div class="heading_container justify-content-center">
      <h2>
        Galeria
      </h2>
    </div>
    <div class="container">
      <div class="img_container">
        <div class="box-1">
          <div class="box-1-container">
            <div class="b-1">
              <div class="img-box">
                <img src="images/g-1.jpg" alt="">
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
  </section>
  <!-- end gallery section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container justify-content-center">
        <h2>
          Comentarios de Clientes
        </h2>
        <div class="section_number">
          04
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="client_box">
            <div class="detail_box">
              <div class="img_box">
                <img src="../images/client-1.png">
              </div>
              <h5>
                Estevan Martínez
              </h5>
              <p>¡Simplemente espectacular! Pedí un arreglo para el aniversario de mis padres y superó todas mis
                expectativas. No era el típico ramo que encuentras en cualquier lado; se notaba el arte y la dedicación
                en cada detalle. Las flores estaban increíblemente frescas y perfumaron su casa por más de una semana.
                ¡La atención fue de primera y me ayudaron a elegir la opción perfecta! Sin duda, mi nueva florería de
                confianza </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="client_box">
            <div class="detail_box">
              <div class="img_box">
                <img src="../images/client-2.png">
              </div>
              <h5>
                Alejandro Garza
              </h5>
              <p>Necesitaba varios centros de mesa para un evento de empresa y el servicio fue impecable de principio a
                fin. El equipo entendió perfectamente nuestra necesidad de un estilo elegante y profesional. La entrega
                fue extremadamente puntual y la calidad de las flores fue excepcional, recibimos muchos cumplidos de
                nuestros socios. Nos hicieron quedar muy bien. Totalmente recomendados por su profesionalismo y
                confianza. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- end client section -->

  <!-- arrange section -->

  <section class="arrange_section">
    <div class="container">
      <div class="detail_box">
        <h2>
          Tu Emoción en las Mejores Manos </h2>
        <p>
          En FiorFlores, entendemos que no solo estás comprando flores; estás enviando un sentimiento. Por eso, cada
          ramo es una promesa: una promesa de frescura excepcional, diseño artístico y entrega puntual. Ponemos nuestra
          pasión y experiencia en cada detalle para asegurar que tu mensaje llegue al corazón, intacto y lleno de
          belleza. Confía en nosotros para convertir tu ocasión especial en un momento inolvidable.
        </p>
      </div>
    </div>
  </section>



  <!-- end arrange section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="section_number">
      05
    </div>
    <div class="container ">
      <div class="heading_container justify-content-center">
        <h2 class="">
          Contáctanos
        </h2>
      </div>

    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
         <form id="formContacto" action="../php/guardar_contacto.php" method="POST" novalidate>
  <div>
    <input type="text" name="nombre" placeholder="Nombre Completo" />
  </div>
  <div>
    <input type="email" name="correo" placeholder="Correo" />
  </div>
  <div>
    <input type="text" name="telefono" placeholder="Teléfono" />
  </div>
  <div>
    <input type="text" name="mensaje" class="message-box" placeholder="Mensaje (opcional)" />
  </div>
  <div class="d-flex mt-4">
    <button type="submit">Enviar</button>
  </div>
</form>

<script>
  document.getElementById('formContacto').addEventListener('submit', function(e) {
    e.preventDefault(); // evita que se recargue la página

    const form = e.target;
    const formData = new FormData(form);

    fetch(form.action, {
      method: 'POST',
      body: formData
    })
    .then(res => res.json())
    .then(data => {
      alert(data.message); // muestra el mensaje del servidor
      if (data.success) {
        form.reset(); // limpia el formulario si fue exitoso
      }
    })
    .catch(err => {
      alert("Error al enviar el formulario.");
      console.error(err);
    });
  });
</script>

        </div>
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
              Enlaces </h5>
            <ul>
              <li class="active">
                <a href="index.html">
                  Inicio
                </a>
              </li>
              <li>
                <a href="about.html">
                  Nosotros
                </a>
              </li>
              <li>
                <a href="gallery.html">
                  Galeria
                </a>
              </li>
              <li>
                <a href="php/productos.php">
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
              <img src="images/location-white.png" alt="Ubicación">
              <p>
                Av. Té 950, Granjas México, Iztacalco, 08400 Ciudad de México, CDMX
              </p>
            </div>
            <div>
              <img src="images/telephone-white.png" alt="Teléfono">
              <p>
                +52 (55) 214 5588
              </p>
            </div>
            <div>
              <img src="images/envelope-white.png" alt="Correo electrónico">
              <p>
                contacto@fiorflores.com
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">

  </footer>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>