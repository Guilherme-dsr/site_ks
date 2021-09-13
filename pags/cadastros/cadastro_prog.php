<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Cadastro Programador</title>
  <!-- Icone -->
  <link rel="icon" type="image/png" href="../../img/icone.png"/>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #212121">
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color elegant-color-dark indigo fixed-top scrolling-navbar"  >

  <a class="navbar-brand" href="" style="color: #76ff03" >Cadastro de Programador</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    
<ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link waves-effect" style="color: #76ff03" href="../../home.php" target="_blank">Home dos Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect"  style="color: #76ff03" href="../tabela_clientes.php" target="_blank">Tabela de Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect"  style="color: #76ff03" href="../tabela_programadores.php" target="_blank">Tabela de Programadores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" style="color: #76ff03" href="cadastro_prod.php" target="_blank">Cadastrar Produto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" style="color: #76ff03" href="../tabela_prod.php" target="_blank">Tabela de Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" style="color: #76ff03" href="../relatorio.php" target="_blank">Gerar Relatorio de Produtos</a>
          </li>
        </ul>

      <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item avatar">
        <a class="nav-link p-0" href="../../pags/pag_perfil.php">
          <img src="../../img/avatar2.png" class="rounded-circle z-depth-0"
            alt="avatar image" height="40">
        </a>
      </li>
    </ul>

  </div>
</nav>
  <!-- Material form register -->
<br><br><br><br>


<div class="card" >

    <h5 class="card-header info-color white-text text-center py-4 elegant-color-dark" style="color: #FF0000 ">
        <strong style="color: #76ff03">Formulário de Cadastro de Programador</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0" >

        <!-- Form -->
        <form class="text-center" style="color: #000000;" action="/Site_Ks/php/cadastro_prog.php" method="post">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control" name="nome">
                        <label for="materialRegisterFormFirstName" style="color: #000000"><b>Nome</b></label>
                    </div>
                </div>
                
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="text" id="materialRegisterFormEmail" class="form-control" name="user">
                <label for="materialRegisterFormEmail" style="color: #000000"><b>Usuário</b></label>
            </div>

            <!-- Password -->
            <div class="md-form">
                <input type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" name="senha">
                <label for="materialRegisterFormPassword" style="color: #000000"><b>Senha</b></label>
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                    Pelo menos 8 caracteres e 1 dígito

                </small>
            </div>

            <!-- Phone number -->
            <div class="md-form">
                <input type="text" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="tel">
                <label for="materialRegisterFormPhone" style="color: #000000"><b>Número de telefone </b></label>
            </div>

            <div class="md-form">
                <input type="text" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="end">
                <label for="materialRegisterFormPhone" style="color: #000000" ><b> Endereço </b></label>
            </div>


            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0 " type="submit" id="botao" >Cadastrar</button>
        

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
