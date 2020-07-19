<?php

$bdServidor = 'localhost';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'dollsplush';
$conexao = mysqli_connect($bdServidor,
        $bdUsuario, $bdSenha, $bdBanco);

//Na função mysqli_connect especificamos o servidor, usuario, senha e nome do banco de dados
?>
