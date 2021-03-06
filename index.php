<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
  <?php include("includes/head-tag-contents.php");?>
  <link rel="stylesheet" href="css/video.css">
  <link rel="stylesheet" href="css/cookies.css"/>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="js/cookies.js" type="text/javascript"></script>
</head>
<body>

<?php include("includes/navigation.php");?>

<div id="overbox3">
  <div id="infobox3">
    <p>Esta web utiliza cookies para obtener datos estadísticos de la navegación de sus usuarios. Si continúas navegando consideramos que aceptas su uso.
      <a href="politica.php">Más información</a>
      <a onclick="aceptar_cookies();" style="cursor:pointer;">X Cerrar</a></p>
  </div>
</div>

<!-- CONTENIDO -->

<body id="page-top">

<!-- Header -->
<header class="masthead">
  <div class="container d-flex h-100 align-items-center">
    <div class="mx-auto text-center">
      <h1 class="mx-auto my-0 bajar-tamano-movil">MundoCoches</h1>
      <h2 class="text-white-50 mx-auto mt-2 mb-5 bajar-tamano-subtitulo-movil">Tu blog de noticias del motor</h2>
      <a href="#about" class="js-scroll-trigger">
        <i class="fa fa-chevron-circle-down" style="font-size:48px;color:gainsboro"></i>
      </a>
    </div>
  </div>
</header>

<!-- About Section -->
<section id="about" class="about-section text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2 class="text-white mb-4">¿Quiénes somos?</h2>
        <p class="text-white-50">
          Somos un grupo de chavales de un Ciclo Formativo de Grado Superior de Desarrollo de Aplicaciones web que hemos hecho este proyecto
          para que puedan evaluarnos en el módulo de Diseño de Interfaces Web.
        </p>
      </div>
    </div>
    <img src="img/amg_gt.png" class="img-fluid" alt="">
  </div>
</section>



<!-- Utilizado color #58668d / rgb(88, 102, 141) para el reproductor de video para mejorar la visualización -->
<!-- Comienzo video -->
<!--<video poster="img/videos/miniatura-trailer.jpg" id="player" playsinline controls>
    <source src="videos/mundocoches-trailer.mp4" type="video/mp4">
    <source src="videos/mundocoches-trailer.webm" type="video/webm">
</video>-->
<div class="ocultar-en-movil">
<div class="plyr__video-embed " id="player">
    <iframe src="https://player.vimeo.com/video/306539258?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media" allowfullscreen allowtransparency allow="autoplay"></iframe>
</div>
</div>

<!--En el caso de un dispositivo móvil el se muestra una imagen del reproductor enlazado al vídeo original-->
<a target="_blank" rel="noopener noreferrer" href="https://vimeo.com/306539258">
  <img class="mostrar-en-movil img-fluid" src="img/videos/miniatura-trailer-movil.jpeg" alt="Tráiler de MundoCoches">
</a>
<!-- Fin video -->
<!-- Comienzo script -->
    
<!-- Fin script -->



<!-- Projects Section -->
    <!-- Featured Project Row -->
    <!--<div class="row align-items-center no-gutters mb-4 mb-lg-5">
      <div class="col-lg-12">
        <h2 class="caja-texto">Noticias recientes</h2>
      </div>
      <div class="col-xl-7 col-lg-6 ">
        <img class="img-fluid mb-3 " src="img/bg-masthead.jpg" alt="">
      </div>
      <div class="col-xl-5 col-lg-6">
        <div class="featured-text text-center text-lg-left">
          <h4>Presentado el Audi A3</h4>
          <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
        </div>
      </div>

      <div class="col-xl-7 col-lg-6">
        <img class="img-fluid mb-3 mb-lg-0" src="img/bg-masthead.jpg" alt="">
      </div>
      <div class="col-xl-5 col-lg-6">
        <div class="featured-text text-center text-lg-left">
          <h4>Presentado el Audi A3</h4>
          <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
        </div>
      </div>
    </div>-->
<!--
     Project One Row 
    <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
      <div class="col-lg-6">
        <img class="img-fluid" src="img/demo-image-01.jpg" alt="">
      </div>
      <div class="col-lg-6">
        <div class="bg-black text-center h-100 project">
          <div class="d-flex h-100">
            <div class="project-text w-100 my-auto text-center text-lg-left">
              <h4 class="text-white">Misty</h4>
              <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
              <hr class="d-none d-lg-block mb-0 ml-0">
            </div>
          </div>
        </div>
      </div>
    </div>

     Project Two Row 
    <div class="row justify-content-center no-gutters">
      <div class="col-lg-6">
        <img class="img-fluid" src="img/demo-image-02.jpg" alt="">
      </div>
      <div class="col-lg-6 order-lg-first">
        <div class="bg-black text-center h-100 project">
          <div class="d-flex h-100">
            <div class="project-text w-100 my-auto text-center text-lg-right">
              <h4 class="text-white">Mountains</h4>
              <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
              <hr class="d-none d-lg-block mb-0 mr-0">
            </div>
          </div>
        </div>
      </div>
    </div>-->




<!-- Signup Section -->
<section id="signup" class="signup-section">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 mx-auto text-center">

        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
        <h2 class="text-white mb-5">Suscríbete para recibir actualizaciones</h2>

        <form class="form-inline d-flex">
          <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Introduce tu correo...">
          <button type="submit" class="btn btn-primary mx-auto estirar-boton">Suscribirse</button>
        </form>

      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section class="contact-section bg-black">
  <div class="container">

    <div class="row">

      <div class="col-md-4 mb-3 mb-md-0">
        <div class="card py-4 h-100">
          <div class="card-body text-center">
            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
            <h4 class="text-uppercase m-0">Dirección</h4>
            <hr class="my-4">
            <div class="small text-black-50">Actualmente no tenemos</div>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3 mb-md-0">
        <div class="card py-4 h-100">
          <div class="card-body text-center">
            <i class="fas fa-envelope text-primary mb-2"></i>
            <h4 class="text-uppercase m-0">Email</h4>
            <hr class="my-4">
            <div class="small text-black-50">
              <a href="#">mundocoches@mail.com</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3 mb-md-0">
        <div class="card py-4 h-100">
          <div class="card-body text-center">
            <i class="fas fa-mobile-alt text-primary mb-2"></i>
            <h4 class="text-uppercase m-0">Teléfono</h4>
            <hr class="my-4">
            <div class="small text-black-50">Actualmente no tenemos</div>
          </div>
        </div>
      </div>
    </div>

    <div class="social d-flex justify-content-center">
      <!--<a href="https://twitter.com/" target="_blank" class="mx-2">
        <i class="fab fa-twitter"></i>
      </a>-->
      <!--<a href="https://facebook.com/" target="_blank" class="mx-2">
        <i class="fab fa-facebook-f"></i>
      </a>-->
      <a href="https://github.com/jesusdc99/mundocoches/" target="_blank" class="mx-2">
        <i class="fab fa-github"></i>
      </a>
    </div>

  </div>
</section>

<?php include("includes/footer.php");?>

<?php include("includes/body-tag-contents.php");?>

<?php include("modalSugerencia.html");?>

<?php include("modalCambios.html");?>

</body>

</body>
</html>
