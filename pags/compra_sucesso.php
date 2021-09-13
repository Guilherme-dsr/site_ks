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
<link rel="icon" type="image/png" href="../img/icone.png"/>
   <link rel="shortcut icon" href="" />

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
<br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
<p class="text-center"><a href="../home.php"><font size="6" color="#76ff03">CLIQUE AQUI PARA VOLTAR AS COMPRAS!</a></font></p><br><br><br>
<p class="text-center"><font size="5" color="white">Paranbens <?php 
          if(isset($_SESSION['nome_comprador'])){
             echo $_SESSION['nome_comprador'];
           }
           ?> Compra realizada com Sucesso! <br> Aguarde o recebimento do boleto em seu email <?php
            if(isset($_SESSION['email_comprador'])){
             echo $_SESSION['email_comprador'];
           }
            ?>.<br> Após 48 horas do pagamento do boleto, o produto será enviado para os correios, em destino a sua casa.</p></font>
</div>
<br><br><br><br><br><br><br><br><br><br>


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
        <hr class="deep accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;  background-color: #76ff03">
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
        <hr class="deep accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;  background-color: #76ff03">
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