<?php
#formulario de cadastro
?>
<link rel="stylesheet" href="style.css">
<h1>Cadastro</h1>
<form name="cadastro" method="post" action="ClienteSalvar.php">
    Nome: <input type="text" name="nome" required maxlength="200"><br>
    E-mail: <input type="email" name="email" required><br>
    Senha: <input type="password" name="senha" required maxlength="8">
    <button type="submit">Cadastrar Cliente</button>
</form>
 