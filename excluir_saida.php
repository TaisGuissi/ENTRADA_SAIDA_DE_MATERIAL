<?php

if(!empty($_GET['id_saida'])){
   
    include_once "header.php";
    include_once "database.php";
   
    $id_saida = $_GET['id_saida'];

    $sqlSelect =  "SELECT * FROM ads_taisgs_saida_mp WHERE id_saida=$id_saida";

    $result = $conexao-> query($sqlSelect);


    if($result->num_rows>0){

        $sqlDelete = "DELETE FROM ads_taisgs_saida_mp WHERE id_saida=$id_saida";
        $result_Delete = $conexao->query($sqlDelete);
    }

}
header('location: listar_saida.php');





//RECUPERA A INFORMAÇÃO

  //  $id = $_GET['id'];

//CRIA A VARIAVEL E ATRIBUI A INSTRUÇÃO EM SQL PARA SELEÇÃP POR ID
//$sql = "UPDATE sge_students SET WHERE id = $id ";


?>