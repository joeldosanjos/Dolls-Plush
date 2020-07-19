<?php
    include ("conexao.php");

    if(($_POST['email']) && ($_POST['nome']) && ($_POST['senha']) && ($_POST['cpf']) && ($_POST['telefone']) && ($_POST['sexo'])){

    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $imagem = 'default.jpg';

    $sql = "insert into usuarios(email, nome, senha, cpf, telefone, sexo, imagem, acesso)
        values ('$email','$nome','$senha','$cpf','$telefone','$sexo',LOAD_FILE('D:/wamp64/www/dollsplush/php/default.jpg'),'1')";

if (mysqli_query($conexao, $sql)) {
    echo "<script> alert ('Cadastro feito com sucesso') </script>";
    echo "<script> window.location.href = '../index.html' </script>";
} 
    else {
        echo "erro".mysqli_error($conexao);
} 
    } else {
        echo "<script> alert ('Por favor, preencha todos os campos') </script>";
        echo "<script> window.location.href = document.referrer </script>";
    }

?>



?>