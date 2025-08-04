<?php
#ClienteAlterar.php

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

include "conexao.php";

$sql = "update tb_cliente set nome ='$nome', email ='$email' where id = $id";
$resultado = mysqli_query($conexao,$sql);

mysqli_close($conexao);

header("Location:ClienteListar.php");

?>