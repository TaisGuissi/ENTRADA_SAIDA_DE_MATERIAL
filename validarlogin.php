<?php

session_start();


if(isset($_POST['submit'])&& !empty($_POST['email_adm'])&& !empty($_POST['senha_adm'])){
    include_once "database.php";
    include_once "header.php";
    
    $student_email = $_POST["email_adm"];
    $student_senha = $_POST["senha_adm"];

    $sql = "SELECT * FROM ads_taisgs_login WHERE email_adm = '$email_adm' and senha_adm = '$senha_adm'";
    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) <1){
        
        unset($_SESSION['email_adm']);
        unset($_SESSION['senha_adm']);
   
        header('location: login.php'); 
        
    }else{

        $_SESSION['email_adm'] = $email_adm;
        $_SESSION['senha_adm'] = $senha_adm;
        header('location: logadosucesso.php'); 
        
    }

}
else{
    header('location: login.php'); 
}




?>