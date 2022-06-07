<?php 

include "database.php";


//RECUPERAR AS INFORMAÇÕS DO FORMULÁRIO

$data_saida = $_POST["data_saida"];
$hora_chegou = $_POST["hora_chegou"];
$hora_saida = $_POST["hora_saida"];
$cliente_saida = $_POST["cliente_saida"];
$nf_cliente = $_POST["nf_cliente"];
$motorista_saida = $_POST["motorista_saida"];




//STRING SQL
$sql = "INSERT INTO ads_taisgs_saida_mp(data_saida,hora_chegou,hora_saida,cliente_saida,nf_cliente,motorista_saida)
VALUES ('$data_saida','$hora_chegou','$hora_saida','$cliente_saida','$nf_cliente','$motorista_saida')";

if(mysqli_query($conexao,$sql)){

  
    header("location: listar_saida.php");
   
}
else{
    echo "Falha ao inserir Entrada De MP";
}



?>

