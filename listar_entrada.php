<?php 

include "loguei.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Entrada de Material</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- MEU CSS  -->
<link rel="stylesheet" href="css/bootstrap-grid.css">
<link rel="stylesheet" href="css/bootstrap-grid.css.map">
<link rel="stylesheet" href="css/bootstrap-grid.min.css">
<link rel="stylesheet" href="css/bootstrap-grid.min.css">
<link rel="stylesheet" href="css/bootstrap-grid.css.map">
<link rel="stylesheet" href="css/bootstrap-reboot.css">
<link rel="stylesheet" href="css/bootstrap-reboot.css.map">
<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="css/bootstrap-reboot.min.css.map">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.css.map">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css.map">
<link rel="stylesheet" href="css/tbl2.css">
<link rel="stylesheet" href="css/logado.css">

<link rel="" href="js/bootstrap.bundle.js">
<link rel="" href="js/bootstrap.bundle.js.map">
<link rel="" href="js/bootstrap.bundle.min.js">
<link rel="" href="js/bootstrap.bundle.min.js.map">
<link rel="" href="js/bootstrap.js">
<link rel="" href="js/bootstrap.js.map">
<link rel="" href="js/bootstrap.min.js">
<link rel="" href="js/bootstrap.min.js.map">

</head>


<?php 
include "database.php";


$sql = "SELECT * FROM ads_taisgs_entrada_mp ORDER BY data_entrada DESC";

$resultado = mysqli_query($conexao, $sql );


?><br><br>

<!--
<div class="box-search">
    <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
    <button onclick="search.Data()">Pesquisar</button>
</div>
-->
<br><br>

<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                <div class="col-sm-8">
                    <LEgend><b>ENTRADA DE MATÉRIA PRIMA</b></LEgend></div>

                    <div class="col-sm-4">
                    <a href="formentrada.php">  <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i>INCLUIR</button></a>
                    <a href="listar_entrada.php">  <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i>CONSULTAR ENTRADA</button></a>
                    <a href="listar_saida.php">  <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i>CONSULTAR SAÍDAS</button></a>

                </div>
                </div>
            </div>

            <table class="table table-bordered table-dark">
<thead>
    <tr>
            <th>Data</th> 
            <th>Entrada </th>
            <th>Saída </th>
            <th>Código</th>
            <th>Descrição</th>
            <th>Unidade</th>
            <th>Quantidade</th>
            <th>Nota Fiscal</th>
            <th>Editar</th>
            <th>Excluir</th>
    </tr> 
</thead>

    <tbody>
    <br><br>    
    
    <?php while($dados = mysqli_fetch_array($resultado)) {?>

    <tr>
            <td><?php echo $dados['data_entrada'] ?></td>
            <td><?php echo $dados['hora_entrada']?></td>
            <td><?php echo $dados['hora_saida']?></td>
            <td><?php echo $dados['cod_prod']?></td>
            <td><?php echo $dados['desc_prod']?></td>
            <td><?php echo $dados['unidade_prod']?></td>
            <td><?php echo $dados['qtd_prod']?></td>
            <td><?php echo $dados['nf_prod']?></td>



            <td><a href="formatualiza_entrada.php?id_entrada=<?php echo $dados['id_entrada']?>">Editar</a> </td>
            <td><a href="excluir_entrada.php?id_entrada=<?php echo $dados['id_entrada']?>">excluir</a> </td>
                      
    </tr> 
    
    <?php } ?>
    </tbody> 

   
</table>


