<?php 

include "database.php";


//RECUPERAR AS INFORMAÇÕS DO FORMULÁRIO

$data_entrada = $_POST["data_entrada"];
$hora_entrada = $_POST["hora_entrada"];
$hora_saida = $_POST["hora_saida"];
$cod_prod = $_POST["cod_prod"];
$desc_prod = $_POST["desc_prod"];
$unidade_prod = $_POST["unidade_prod"];
$qtd_prod = $_POST["qtd_prod"];
$nf_prod = $_POST["nf_prod"];



//STRING SQL
$sql = "INSERT INTO ads_taisgs_entrada_mp(data_entrada,hora_entrada,hora_saida,cod_prod,desc_prod,unidade_prod,qtd_prod,nf_prod)
VALUES ('$data_entrada','$hora_entrada','$hora_saida','$cod_prod','$desc_prod','$unidade_prod','$qtd_prod','$nf_prod')";

if(mysqli_query($conexao,$sql)){

  
    header("location: listar_entrada.php");
   
}
else{
    echo "Falha ao inserir Entrada De MP";
}



?>