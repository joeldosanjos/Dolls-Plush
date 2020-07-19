<?php

include ("conexao.php");

$email = $_POST['emaildousuario'];

$sql = "insert into newsletter(email, datainsercao)
        values ('$email',NOW())";

if (mysqli_query($conexao, $sql)) {
    echo "<script> alert ('Cadastro com sucesso') </script>";
    echo "<script> window.location.href = document.referrer </script>";
} 
    else {
        echo "erro".mysqli_error($conexao);
}
?>