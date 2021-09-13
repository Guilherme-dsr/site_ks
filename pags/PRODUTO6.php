<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>KING SNEAKERS</title>
  <!-- Font usada -->

   <link rel="shortcut icon" href="" />
<link rel="icon" type="image/png" href="../img/icone.png"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/cor.css">

  <link href="css/estilo.css" rel="stylesheet">

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
    <script type="text/javascript">
  function es(msg){
    var msg = alert("NÃO TEMOS ESSE MODELO EM ESTOQUE!! VOLTE MAIS TARDE.");
    return msg;
  }
</script>
</head>

<body style="background-color: #212121">

  <!-- JQuery -->
  

  <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color elegant-color-dark indigo fixed-top scrolling-navbar"  >

  <a class="navbar-brand waves-effect" href="">
        <img src="../img/logoteste.png" alt="mdb logo" width="240" height="50">
      </a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    
<ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a class="nav-link waves-effect"  style="color: #76ff03" href="./PRODUTO5.php">Promoções</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect"  style="color: #76ff03" href="./PRODUTO1.php">Adidas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" style="color: #76ff03" href="./PRODUTO2.php">Nike</a>
          </li>
        </ul>



  </div>
</nav>



<main id="main">
    <div class="site-section">
      
      <div class="site-section pb-0">
        <div class="container">
          <div class="row align-items-stretch">
            <div class="col-md-8" data-aos="fade-up">
              <img src="../img/6.jpg" alt="Image" class="img-fluid" width="1000" height="1000">
            </div>
            <div class="col-md-3 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <div class="sticky-content">
                <h3 class="h2" style="color: #76ff03">NMD R3 RED</h3>

                <h4 class="h4 mb-3" style="color: #5c5952">Tamanho</h4>
                <ul class="list-unstyled list-line mb-5">
                  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
    <label class="custom-control-label" for="customRadio" style="color: white">37</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
    <label class="custom-control-label" for="customRadio2" style="color: white">39</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio3" name="example" value="customEx">
    <label class="custom-control-label" for="customRadio3" style="color: white">40</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio4" name="example" value="customEx">
    <label class="custom-control-label" for="customRadio4" style="color: white">43</label>
  </div>

                </ul>

                <h4 class="h4 mb-3" style="color: #5c5952">Descrição</h4>

                <div class="mb-5" style="color: white">
                  <p>Tomando dicas de estilo de roupas técnicas premium, esses sapatos combinam a herança dos anos 80 com o conforto moderno. A parte superior da malha é acentuada com detalhes bordados e uma gaiola de salto translúcido. Os plugues EVA icônicos acentuam a entressola Boost, o amortecimento mais responsivo da adidas.</p>

                </div>


                <h4 class="h4 mb-3" style="color: #5c5952">Características</h4>
                <ul class="list-unstyled list-line mb-5">
                  <li style="color: white">Adidas</li>
                  <li style="color: white">Design Couro Vermelho</li>
                  <li style="color: white">R$ 190,00</li>
                </ul>

                <!-- <p><a href="#" class="readmore" style="background-color: red">Comprar</a></p> -->
                
                   <!-- <button type="button" class="btn light-green accent-3 btn-rounded" onclick="es()" style="color: white">Comprar</button>-->
              <div class="text-center">
                <a href="" class="btn success-color btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm" >Comprar</a>
              </div>

              </div>
            </div>
          </div>
        </div>
      </div>
<!--____________________________________MODAL ________________________________-->

<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">COMPRAR</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="../php/comprar.php">
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="hidden" name="id" value="6">
          <input type="text" id="form34" class="form-control validate" name="nome_comprador">
          <label data-error="wrong" data-success="right" for="form34">Seu nome</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="form29" class="form-control validate" name="email_comprador">
          <label data-error="wrong" data-success="right" for="form29">Seu Email</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-tag prefix grey-text"></i>
          <input type="number" id="form32" class="form-control validate" name="qtd_c">
          <label data-error="wrong" data-success="right" for="form32">Quantidade</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-tag prefix grey-text"></i>
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form32">Endereço</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn success-color">Finalizar Compra<i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
      </form>
    </div>
  </div>
</div>


<!--____________________________________MODAL FIM ________________________________-->

      <div class="site-section pb-0">
        <div class="container">
          <div class="row justify-content-center text-center mb-4">
            <div class="col-5">
              <h3 class="h3 heading" style="color: #5c5952">PRODUTOS RELACIONADOS</h3>
              <p style="color: white">Veja também os outros calçados Adidas:</p>
            </div>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
              <a href="../pags/PRODUTO1.php"" class="item-wrap fancybox">
                <div class="work-info">
                  <h3>NMD R1 W</h3>
                  <span>210,00</span>
                </div>
                <img class="img-fluid" src="../img/1.jpg">
              </a>
            </div>
            <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
              <a href="../pags/PRODUTO3.php"" class="item-wrap fancybox">
                <div class="work-info">
                  <h3>Ulta Boost</h3>
                  <span>170,00</span>
                </div>
                <img class="img-fluid" src="../img/3.jpg">
              </a>
            </div>
            <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
              <a href="work-single.html" class="item-wrap fancybox">
                <div class="work-info">
                  <h3>Yeezy Boost Grafite</h3>
                  <h3 style="color: red">Esgotado</h3>
                  <span>189,99</span>
                </div>
                <img class="img-fluid" src="../img/indisponivel.jpg">
              </a>
            </div>
                     
           
          </div>
        </div>
      </div>

















  </main>




















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
        <p>Buscamos sempre proporcionar as calçados das melhores marcas visando o maior conforto satisfação dos nosso clientes, aqui atendemos conforme a sua preferência e gosto! Extendemos o prazo de troca para 60 dias!</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Outros Links</h6>
        <hr class="deep accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;  background-color: #76ff03"">
        <p>
          <a href="login.php">Cadastre-se</a>
        </p>
        <p>
          <a href="#!">Central de devoluções/trocas</a>
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
        <hr class="deep accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;  background-color: #76ff03"">
        <p>
          <i class="fas fa-home mr-3"></i>R. Frecheirinha, 245 - Parquelândia - Fortaleza, CE. </p>
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
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
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