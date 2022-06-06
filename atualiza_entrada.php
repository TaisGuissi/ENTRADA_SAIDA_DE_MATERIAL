<?php
include_once "header.php";
include_once "database.php";
include "logadosucesso.php";

if(isset($_POST['update'])){

    $id_entrada = $_POST["id_entrada"];
    $data_entrada = $_POST["data_entrada"];
    $hora_entrada = $_POST["hora_entrada"];
    $hora_saida = $_POST["hora_saida"];
    $cod_prod = $_POST["cod_prod"];
    $desc_prod = $_POST["desc_prod"];
    $unidade_prod = $_POST["unidade_prod"];
    $qtd_prod = $_POST["qtd_prod"];
    $nf_prod = $_POST["nf_prod"];

$sqlUpdate = "UPDATE ads_taisgs_entrada_mp set data_entrada = '$data_entrada', hora_entrada = '$hora_entrada', hora_saida = '$hora_saida', cod_prod = '$cod_prod', desc_prod = '$desc_prod', unidade_prod = '$unidade_prod', qtd_prod = '$qtd_prod',nf_prod = '$nf_prod' WHERE id_entrada='$id_entrada'";

$result = $conexao-> query($sqlUpdate);


}
header('location: listar_entrada.php');





//RECUPERA A INFORMAÇÃO

  //  $id = $_GET['id'];

//CRIA A VARIAVEL E ATRIBUI A INSTRUÇÃO EM SQL PARA SELEÇÃP POR ID
//$sql = "UPDATE sge_students SET WHERE id = $id ";


?>