<?php
include_once "header.php";
include_once "database.php";
include "logadosucesso.php";

if(isset($_POST['update'])){

    $id_saida = $_POST["id_saida"];
    $data_saida = $_POST["data_saida"];
    $hora_chegou = $_POST["hora_chegou"];
    $hora_saida = $_POST["hora_saida"];
    $cliente_saida = $_POST["cliente_saida"];
    $nf_cliente = $_POST["nf_cliente"];
    $motorista_saida = $_POST["motorista_saida"];
 

$sqlUpdate = "UPDATE ads_taisgs_saida_mp set data_saida = '$data_saida', hora_chegou = '$hora_chegou', hora_saida = '$hora_saida', cliente_saida = '$cliente_saida', nf_cliente = '$nf_cliente', motorista_saida = '$motorista_saida' WHERE id_saida='$id_saida'";

$result = $conexao-> query($sqlUpdate);


}
header('location: listar_saida.php');





//RECUPERA A INFORMAÇÃO

  //  $id = $_GET['id'];

//CRIA A VARIAVEL E ATRIBUI A INSTRUÇÃO EM SQL PARA SELEÇÃP POR ID
//$sql = "UPDATE sge_students SET WHERE id = $id ";


?>