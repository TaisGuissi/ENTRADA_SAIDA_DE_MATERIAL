<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Table with Add and Delete Row Feature</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/tabelas.css">
<link rel="stylesheet" href="javascripts/tabelas.js">
</head>



<?php 

include "database.php";
include "logadosucesso.php";

$sql = "SELECT * FROM ads_taisgs_entrada_mp";

$resultado = mysqli_query($conexao, $sql );


?><br><br>

<!--
<div class="box-search">
    <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
    <button onclick="search.Data()">Pesquisar</button>
</div>
-->
<br><br>

<table border="2">

<thead>
    <tr>
            <th>Data</th> 
            <th>Entrada </th>
            <th>Saída </th>
            <td>Código</td>
            <td>Descrição</td>
            <td>Unidade</td>
            <td>Quantidade</td>
            <td>Nota Fiscal</td>
            <td>Editar</td>
            <td>Excluir</td>
            
    </tr> 
</thead>

    <tbody>

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



            <td><a href="formatualiza_entrada.php?id_entrada=<?php echo $dados['id_entrada']?>">EDITAR</a> </td>
            <td><a href="excluir_entrada.php?id_entrada=<?php echo $dados['id_entrada']?>">EXCLUIR</a> </td>
           
    </tr> 
    
    
    <?php } ?>
    </tbody> 

   
</table>

<br><br>
<a href="formentrada.php">INCLUIR</a>



