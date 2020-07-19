<?php
//session_start();
header('Content-type: text/html; charset=utf-8');
// Verificador de sessão
require "php/verificar.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Dolls & Plush</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/indexcss.css">
    <link rel="icon" href="css/pics/icon.png">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
        <a class="navbar-brand" href="indexlogado.php"><img src="css/pics/logo.png" width="180" height="40" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto navbar-right">

        <! Pelúcias - Barra de navegação !>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pelúcias
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="peluciaslogado.php">Ursinhos</a>
                <a class="dropdown-item" href="peluciaslogado.php">Cachorrinhos</a>
                <a class="dropdown-item" href="peluciaslogado.php">Réplicas</a>
                <a class="dropdown-item" href="peluciaslogado.php">Animais Silvestres</a>
                <a class="dropdown-item" href="peluciaslogado.php">Animais Domésticos</a>
            </div>
        </li>

        <! Bonecas - Barra de navegação !>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Bonecas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="bonecaslogado.php">Monster High</a>
                <a class="dropdown-item" href="bonecaslogado.php">Ever After High</a>
                <a class="dropdown-item" href="bonecaslogado.php">Pullips</a>
                <a class="dropdown-item" href="bonecaslogado.php">Barbie</a>
                <a class="dropdown-item" href="bonecaslogado.php">My Little Pony</a>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="sobrenoslogado.php">Sobre nós</a>
      </li>
      </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
            <a href="perfil.php" class="nav-link"><i class="fa fa-user" aria-hidden="true"></i> Conta</a>
        </li>
        <li class="nav-item">
            <a href="php/destruir.php" class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
        </li>
    </ul>
  </div>
</nav>

      <div class="container p-3 mb-2 bg-danger text-white" style="height: 500px;">
          <a href="nl/ursinhofifonhoNL.html"><img style="margin-left: 7vw;" src="css/pics/ursinhofifonho.png" class="rounded float-left"></a>
          <br> <br>
          <a href="pelucias.html" class="badge badge-secondary font-weight-normal" style="font-size: 20px">Pelúcias - Ursinho Fifonho</a>
          <h1 class="text-left" style="font-size: 35px">50% DE DESCONTO</h1>
          <h1 class="text-left" style="font-size: 25px">R̶$̶8̶0̶,̶0̶0̶</h1>
          <h1 class="text-left font-weight-bold" style="font-size: 40px">R$40,00</h1>
          <br> <br> <br> <br>
          <a class="btn btn-secondary btn-lg font-weight-bold" href="peluciaslogado.php" role="button">Compre já!</a>
      </div>

      <br> <br>

      <div class="beneficios">
        <div class="garantia">
            <div id="firstplace"></div>
            <div id="garantiatitle">
                <h5>1 ANO DE GARANTIA</h5>
            </div>
            <div id="garantiatext">
                <p>Chega de produtos sem garantia. Compre conosco e fique seguro sem pagar nada a mais! Queremos ter certeza de que irá aprovar seu produto escolhido.</p>
            </div>
        </div>
        <div class="frete">
            <div id="placeholder"></div>
            <div id="fretetitle">
                <h5>FRETE GRÁTIS</h5>
            </div>
            <div id="fretetext">
                <p>Em itens sob encomenda. Pronta entrega com frete fixo subsidiado e desconto na compra de mais de 5 peças.</p>
            </div>
        </div>
        <div class="flexibilidade">
            <div id="padlock"></div>
            <div id="flexibilidadetitle">
                <h5>FLEXIBILIDADE NO PAGAMENTO</h5>
            </div>
            <div id="flexibilidadetext">
                <p>Cartão de crédito? Boleto? Transferência? Bitcoin? MercadoPago? PayPal? Parcelado? Desconto à vista? Sim, para TODOS. Aceitamos a SUA forma de pagamento preferida.</p>
            </div>
        </div>
    </div>

      <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

      <section class="home-newsletter">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12">
	                   <div class="single">
		                  <h2>Inscreva-se em nossa Newsletter</h2>
	                           <div class="input-group">
                                    <form method="post" action="php/incluirnewsletter.php" class="form-control" style="background-color: #f84e77;">
                                        <input type="email" name="emaildousuario" class="form-control" placeholder="Insira seu email">
                                        <span class="input-group-btn">
                                            <input class="btn btn-theme" type="submit" value="Inscrever">
                                        </span>
                                        </form>
                            </div>
	                   </div>

                    </div>
              </div>
          </div>
      </section>

      <footer>
        <p>© 2017<a style="color:#0a93a6; text-decoration:none;" href="www.facebook.com/hl3iscoming"> Dolls & Plush</a>, Todos os Direitos Reservados.</p>
    </footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
