<?php
#formulario de alterar
$id = $_GET['idalterar'];
$nome = "";
$email = "";

include "conexao.php";
$sql = "select * from tb_cliente where id = $id";
$resultado = mysqli_query($conexao, $sql);

while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $email = $linha['email'];
}
?>

<form method="POST" action="ClienteAlterar.php">
    Id: <input type="hidden" name="id" value="<?=$id?>"><br>
    Nome: <input type="text" name="nome" value="<?=$nome?>"><br>
    Email: <input type="text" name="email" value="<?=$email?>"><br>
    <button type="submit">Salvar Alterações</button>
</form>
 