<link rel="stylesheet" href="css/formulariocadastro.css">

<?php

session_start();


if((!isset($_SESSION['email_adm']) ==true)and(!isset($_SESSION['senha_adm'])==true)){
    
    unset($_SESSION['email_adm']);
    unset($_SESSION['senha_adm']);
    header('location: login.php');
}
$logado = $_SESSION['email_adm'];

?> 
 



<div class="box">


    <fieldset>
    <legend>Bem-vindo</legend><?php echo"Usuário: $logado"; ?><br><br>
    <a href='sair.php'> <button>SAIR</button><br><br>

    <a href='listar_entrada.php'> <button> CONSULTAR ENTRADAS</button><br><br>
    <a href='listar_entrada.php'> <button> CONSULTAR SAÍDAS</button><br><br>
   
    </fieldset>
    </div>
    <br><br>

    