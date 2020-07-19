<?php
//session_start();
header('Content-type: text/html; charset=utf-8');
// Verificador de sessão 
require "php/verificar.php"; 

?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Alterar Dados - Dolls & Plush</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/perfiladm.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="icon" href="css/pics/icon.png">
    <script>
        function mascaratelefone(telefone){
        if(telefone.length==1){
            telefone="("+telefone;
        }
        document.getElementById("txttelefone").value=telefone;
        
        if(telefone.length==3){
            telefone=telefone+") ";
        }
        document.getElementById("txttelefone").value=telefone;
        
        if(telefone.length==10){
            telefone=telefone+"-";
        }
        document.getElementById("txttelefone").value=telefone;
        
    }
       function maxLengthCheck(object) {
            if (object.value.length > object.maxLength)
                object.value = object.value.slice(0, object.maxLength)
        }         
    </script>
  </head>
    
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
        <a class="navbar-brand" href="indexlogado.php"><img src="css/pics/logo.png" width="180" height="40" alt="Logo"></a>
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
        </li>
    </ul>
  </div>
</nav>
<br><br>
      <h1 class="text-center">Informações do usuário</h1>
      
<section>
  <div class="container py-3">
    <div class="card" style="width: 100%;">
      <div class="row ">
        <div class="col-md-3 ">
           
          </div>
          <div class="col-md-8 px-3">
            <div class="card-block px-3"><br>
              <h4 class="card-title">Alterar informações</h4><br>
              <div class=" col-md-9 col-lg-11 "> 
                  <table class="table table-user-information">
                <form method="post" action="php/operacaoalterar.php" enctype="multipart/form-data">
                    <tbody>
                    <tr>
                        <td class="font-weight-bold"><i class="fa fa-info-circle" aria-hidden="true"></i> Nome</td>
                        <td><input type="text" value="<?php echo $_SESSION['nome']; ?>" name="nome"></td>
                      </tr>
                      <tr>
                        <td class="font-weight-bold"><i class="fa fa-envelope-o" aria-hidden="true"></i> E-mail</td>
                        <td><input type="email" value="<?php echo $_SESSION['email']; ?>" name="email"></td>
                      </tr>
                      <tr>
                        <td class="font-weight-bold"><i class="fa fa-id-card-o" aria-hidden="true"></i> CPF</td>
                        <td><input oninput = "maxLengthCheck(this)" type="number"  value="<?php echo $_SESSION['cpf']; ?>" 
                                   maxlength="11" name="cpf"></td>
                      </tr>
                      <tr>
                        <td class="font-weight-bold"><i class="fa fa-phone" aria-hidden="true"></i> Telefone</td>
                        <td><input type="text" id="txttelefone" value="<?php echo $_SESSION['telefone']; ?>" 
                                   maxlength="15" onkeyup="mascaratelefone(this.value)" name="telefone"></td>
                      </tr>
                      <tr>
                        <td class="font-weight-bold"><i class="fa fa-picture-o" aria-hidden="true"></i> Imagem</td>
                        <td><input type="file" name="imagem" accept="image/x-png,image/gif,image/jpeg"></td>
                      </tr>
                      <tr>
                        <td class="font-weight-bold"><i class="fa fa-key" aria-hidden="true"></i> Senha</td>
                        <td><input type="text" value="<?php echo $_SESSION['senha']; ?>" name="senha"></td>
                      </tr>
                      <tr>
                          <td class="font-weight-bold"><i class="fa fa-venus-mars" aria-hidden="true"></i> Sexo</td>
                        <td><?php if ($_SESSION['sexo'] == "M"){ 
                                    echo "<select name='sexo'>
                                        <option value='M' style='color: #dc3545;'>Masculino</option>
                                        <option value='F' style='color: #dc3545;'>Feminino</option>
                                        <option value='X' style='color: #dc3545;'>Prefiro não dizer</option>
                                        </select>";
                                    } elseif ($_SESSION['sexo'] == "F"){
                                    echo "<select name='sexo'>
                                        <option value='F' style='color: #dc3545;'>Feminino</option>
                                        <option value='M' style='color: #dc3545;'>Masculino</option>
                                        <option value='X' style='color: #dc3545;'>Prefiro não dizer</option>
                                        </select>";
                                    } elseif ($_SESSION['sexo'] == "X") {
                                        echo "<select name='sexo'>
                                        <option value='X' style='color: #dc3545;'>Prefiro não dizer</option>
                                        <option value='M' style='color: #dc3545;'>Masculino</option>
                                        <option value='F' style='color: #dc3545;'>Feminino</option>
                                        </select>";
                                    }
                            ?>
                            </td>
                      </tr>
                    </tbody>
                  </table>
                  <input type="submit" value="Alterar" class="btn btn-warning">
                  <a href="perfil.php" class="btn btn-danger">Voltar</a>
                </form>
                </div>
            </div><br>
          </div>

        </div>
      </div>
    </div>
</section>
      
      <footer>
        <p>© 2017<a style="color:#0a93a6; text-decoration:none;" href="http://www.facebook.com/hl3iscoming"> Dolls & Plush</a>, Todos os Direitos Reservados.</p>
    </footer>
      
      
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>