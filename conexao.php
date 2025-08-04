<?php
    $servidor = "localhost";
    $bd = "bd_suporte";
    $usuario ="root";
    $senha = "";
 
    $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
 
    if(!$conexao){
        die("Erro ao estabelescer conexão" . mysqli_connect_error());
    }
?>