<?php
include_once "header.php";
session_start();


if((!isset($_SESSION['email_adm']) ==true)and(!isset($_SESSION['senha_adm'])==true)){
    
    unset($_SESSION['email_adm']);
    unset($_SESSION['senha_adm']);
    header('location: login.php');
}
$logado = $_SESSION['email_adm'];

?> 

<div class="d-flex">
<a href="sair.php" class="btn btn-danger me-5">Sair</a>
</div>

<?php

<br>
echo"Bem vindo: $logado";

?>