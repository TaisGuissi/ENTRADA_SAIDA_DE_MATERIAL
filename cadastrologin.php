<?php 

include "database.php";


//RECUPERAR AS INFORMAÇÕS DO FORMULÁRIO

$email_adm = $_POST["email_adm"];
$senha_adm = $_POST["senha_adm"];


//STRING SQL
$sql = "INSERT INTO ads_taisgs_login(email_adm,senha_adm)
VALUES ('$email_adm', '$senha_adm')";

if(mysqli_query($conexao,$sql)){

  
    header("location: index.php");
   
}
else{
    echo "Falha ao cadastar aluno";
}



?>