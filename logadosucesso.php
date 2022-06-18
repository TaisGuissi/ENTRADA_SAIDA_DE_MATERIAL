<link rel="stylesheet" href="css/logado.css">
<?php


session_start();


if((!isset($_SESSION['email_adm']) ==true)and(!isset($_SESSION['senha_adm'])==true)){
    
    unset($_SESSION['email_adm']);
    unset($_SESSION['senha_adm']);
    header('location: login.php');
}
$logado = $_SESSION['email_adm'];

?> 
 
<nav>
            <ul>                 
             <li> <a href="listar_entrada.php"> ENTRADA DE MATÉRIA PRIMA </a> </li></li>
                <li> <a href="listar_saida.php"> SAÍDA FATURAMENTO </a> </li></li>
                <li> <a href="sair.php"class="btn btn-danger me-5"> SAIR </a> </li>
            </ul>
        </nav>

  
<!--<div class="d-flex">
<a href="sair.php" class="btn btn-danger me-5">Sair</a>
</div>

-->

<?php


echo"Usuário: $logado";

?>