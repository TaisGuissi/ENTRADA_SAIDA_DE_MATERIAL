<?php

if(!empty($_GET['id_entrada'])){
   
    include_once "header.php";
    include_once "database.php";
   
    $id_entrada = $_GET['id_entrada'];

    $sqlSelect =  "SELECT * FROM ads_taisgs_entrada_mp WHERE id_entrada=$id_entrada";

    $result = $conexao-> query($sqlSelect);


    if($result->num_rows>0){

        $sqlDelete = "DELETE FROM ads_taisgs_entrada_mp WHERE id_entrada=$id_entrada";
        $result_Delete = $conexao->query($sqlDelete);
    }

}
header('location: listar_entrada.php');





//RECUPERA A INFORMAÇÃO

  //  $id = $_GET['id'];

//CRIA A VARIAVEL E ATRIBUI A INSTRUÇÃO EM SQL PARA SELEÇÃP POR ID
//$sql = "UPDATE sge_students SET WHERE id = $id ";


?>