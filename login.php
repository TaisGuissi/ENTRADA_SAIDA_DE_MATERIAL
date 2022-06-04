
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Pt-br" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">

    <title>Sistema de Gerenciamento Escolar</title>
</head>

<?php
include_once "database.php";
?>

<main class="container">
    <h2>Login</h2>
    <form action="validarlogin.php" method="POST">
    <div class="input-field">
        <input type="text" name="email_adm" id="email_adm" placeholder="Seu e-mail">
        <div class="underline">
    </div>

    <div class="input-field">
        <input type="password" name="senha_adm" id="senha_adm" placeholder="Sua Senha">
        <div class="underline">
    </div>
    <input type="submit" name="submit" value="Logar">
    

    </form>



</main>
    
</body>
</html>