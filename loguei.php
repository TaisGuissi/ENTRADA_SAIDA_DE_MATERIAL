

<?php

session_start();


if((!isset($_SESSION['email_adm']) ==true)and(!isset($_SESSION['senha_adm'])==true)){
    
    unset($_SESSION['email_adm']);
    unset($_SESSION['senha_adm']);
    header('location: login.php');
}
$logado = $_SESSION['email_adm'];

echo"Usuário: $logado";

?> 
