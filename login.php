<link rel="stylesheet" href="css/formulariocadastro.css">


    <title>LOGIN</title>
</head>

<?php
include_once "database.php";
?>

    <div class="box">
    <form action="validarlogin.php" method="POST">
    <fieldset>
    <legend>LOGIN</legend><br><br>

     <div class="inputBox">
        <input type="text" name="email_adm" id="email_adm"class="inputCadastro" required placeholder="Seu e-mail">
        <label for="email_adm" class="labelInputCadastro"></label>
            <br><br>

    </div>
    <div class="inputBox">
        <input type="password" name="senha_adm" id="senha_adm" class="inputCadastro" required placeholder="Sua Senha">
        <label for="senha_adm" class="labelInputCadastro"></label>
             <br><br>
    </div>
    <input type="submit" name="submit" id="submit" class="" value="Logar"><br><br>

    </form>
 
</fieldset>
<a href='formcadastrologin.php'> <button>CADASTRAR USUÁRIO</button><br><br>
