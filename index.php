<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>KING SNEAKERS</title>
  <!-- Font usada -->

   <link rel="shortcut icon" href="" />
   <link rel="icon" type="image/png" href="img/icone.png"/>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/cor.css">

  <link href="css/estilo.css" rel="stylesheet">

  <script type="text/javascript" src="js_2/move-top.js"></script>
<script type="text/javascript" src="js_2/easing.js"></script>
  <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
    </script>

  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

  </style>
</head>

<body style="background-color: #212121">

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg elegant-color-dark">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="">
        <img src="img/logoteste.png" alt="mdb logo" width="240" height="50">
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link waves-effect"  style="color: #76ff03" href="pags/login.php">Promo????es</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect"  style="color: #76ff03" href="pags/login.php">Adidas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" style="color: #76ff03" href="pags/login.php">Nike</a>
          </li>
        </ul>

        <!-- MENU PARTE DIREITA -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
          </li>
          <li class="nav-item">
            <a href="pags/login.php"
            >
              <i class="fas fa-sign-in-alt" style="color: #76ff03"></i> Fazer Login
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

 
<!--PRIMEIRO SLIDE-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('https://uploaddeimagens.com.br/images/002/598/512/original/img1.png?1587221385'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>MAIORES TEND??NCIAS</strong>
              </h1>

              <p>
                <strong>Novos lan??amentos em t??nis, m??ximo conforto e eleg??ncia.</strong>
              </p>

              <!-- <p class="mb-4 d-none d-md-block">
                <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and
                  written versions
                  available. Create your own, stunning website.</strong>
              </p> -->
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--SEGUNDO SLIDE-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('https://uploaddeimagens.com.br/images/002/598/593/original/img2.png?1587224271'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>COMPRE & GANHE!</strong>
              </h1>

              <p>
               <strong>Nas compras acima de R$ 199 o frete ?? por nossa conta!</strong>
              </p>

              <a target="_blank" href="pags/login.php" class="btn btn-outline-white btn-lg">Garanta o Seu!
                <i class="fas fa-play"></i>
              </a>

              <!-- <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start
                free tutorial
                <i class="fas fa-graduation-cap ml-2"></i>
              </a> -->
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--TERCEIRO SLIDE-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('https://uploaddeimagens.com.br/images/002/598/625/original/img3.png?1587225448'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>TROCA GR??TIS!</strong>
              </h1>

              <p>
                <strong>Aumentamos o prazo de devolu????o para 60 dias!</strong>
              </p>
            <!--   <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start
                free tutorial
                <i class="fas fa-graduation-cap ml-2"></i>
              </a>
 -->            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->

  <!--Main layout-->
  <main>
    <div class="container">


    <!--     COME??O DA SEC??A??     -->

      <main id="main">

    <div class="site-section site-portfolio">
      <div class="container">
        <div class="row mb-5 align-items-center deep-purple lighten-5">
          <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
            <h2 style="color: #212121">Lan??amentos</h2>
            <p style="color: #212121" class="mb-0">Melhores Tenis | Conforto e Tendencia</p>
          </div>
          <div class="col-md-12 col-lg-6 text-left text-lg-right" data-aos="fade-up" data-aos-delay="100">
            <div id="filters" class="filters">
              <a style="color: #212121" href="#" data-filter="*" class="active">Todos</a>
              <a style="color: #212121" href="#" data-filter=".web">Tenis Feminino</a>
              <a style="color: #212121" href="#" data-filter=".design">Infantil</a>
              <a style="color: #212121" href="#" data-filter=".branding">Adidas</a>
              <a style="color: #212121" href="#" data-filter=".photography">Nike</a>
            </div>
          </div>
        </div>
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
          <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="pags/login.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Adidas</h3>
                <span>FEMININO NMD R1 W</span><br>
                <span>210,00</span>
              </div>
              <img class="img-fluid" src="img/1.jpg">
            </a>
          </div>
          <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="pags/login.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>NIKE</h3>
                <span>NIKE Air Force 1 Low Off-White Volt</span><br>
                <span>249,99</span>
              </div>
              <img class="img-fluid" src="img/2.jpg">
            </a>
          </div>
          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="pags/login.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Adidas</h3>
                <span>Ulta Boost</span><br>
                <span>170,00</span>
              </div>
              <img class="img-fluid" src="img/3.jpg">
            </a>
          </div>
          <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="pags/login.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>RAGRAN</h3>
                <span>Sapat??nis Ragran Casual Branco</span><br>
                <span>49,99</span>
              </div>
              <img class="img-fluid" src="img/4.jpg">
            </a>
          </div>
          <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="pags/login.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>NIKE</h3>
                <span>Nike Run Joyride Flyknit</span><br>
                <span>299,99</span>
              </div>
              <img class="img-fluid" src="img/new.jpg">
            </a>
          </div>
          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="pags/login.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Adidas</h3>
                <span>NMD R3 RED</span><br>
                <span>190,00</span>
              </div>
              <img class="img-fluid" src="img/6.jpg">
            </a>
          </div>
        </div>
      </div>
    </div>

    
  </main>
     
      <!--FIM DA SEC??A??-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <!-- Footer -->
<footer class="page-footer" style="background-color: #212121">

  <div style="background-color: #76ff03">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">
          <font color="black">
Conecte-se conosco nas redes sociais!</h6>
          </font>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f black-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g black-text mr-4"> </i>
          </a>
          <!--Linkedin -->
              <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram black-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">KING SNEAKERS</h6>
        <hr class="deep accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #76ff03">
        <p>Buscamos sempre proporcionar as cal??ados das melhores marcas visando o maior conforto satisfa????o dos nosso clientes, aqui atendemos conforme a sua prefer??ncia e gosto! Extendemos o prazo de troca para 60 dias!</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Outros Links</h6>
        <hr class="deep accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;  background-color: #76ff03">
        <p>
          <a href="./pags/cadastro.php">Cadastre-se</a>
        </p>
        <p>
          <a href="#!">Central de devolu????es/trocas</a>
        </p>
        <p>
          <a href="#!">Ajuda</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contatos</h6>
        <hr class="deep accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;  background-color: #76ff03">
        <p>
          <i class="fas fa-home mr-3"></i>R. Frecheirinha, 245 - Parquel??ndia - Fortaleza, CE. </p>
        <p>
          <i class="fas fa-envelope mr-3"></i> kingsneakers@gmail.com</p>
          <p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 85 93689-3096</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">?? 2020 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> Todos os direitos reservados a King SneakersBR</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery/jquery-migrate.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/easing/easing.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>


</body>
</html>