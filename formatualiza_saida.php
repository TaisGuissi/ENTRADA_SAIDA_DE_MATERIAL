
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Pt-br" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formes.css">

    <title>Saída de Material</title>
</head>



<?php
include "es_logado.php";
include_once "database.php";

//RECUPERA A INFORMAÇÃO

$id_saida = $_GET['id_saida'];

//CRIA A VARIAVEL E ATRIBUI A INSTRUÇÃO EM SQL PARA SELEÇÃP POR ID
$sql = "SELECT * FROM ads_taisgs_saida_mp WHERE id_saida = $id_saida ";

//CRIAR UMA VARIAVEL QUE RECEBA OS RESULTADOS DA CONSULTA EM SQL
$resultado = mysqli_query($conexao, $sql);

//CONVERTER O RESULTADO DA CONSULTA AO BANCO EM UM ARRAY (MATRIZ)
$dados = mysqli_fetch_array($resultado);

?>

<main class="container">  

<div class="input-field">
<h2>Atualização Saída de Material</h2>

<br> <br>
<form action="atualiza_saida.php" method="post">

<input type="hidden" name="id_saida" value="<?php echo $dados['id_saida']?>">

<label for="nome"> Data: </label>
<input type="text" name="data_saida" id="data_saida" value="<?php echo $dados['data_saida']?>"><br><br>

<label for="email"> Entrada: </label>
<input type="text" name="hora_chegou" id="hora_chegou" value="<?php echo $dados['hora_chegou']?>"><br><br>

<label for="text"> Saída: </label>
<input type="text" name="hora_saida" id="hora_saida" value="<?php echo $dados['hora_saida']?>"><br><br>

<label for="text"> Cliente: </label>
<input type="text" name="cliente_saida" id="cliente_saida" value="<?php echo $dados['cliente_saida']?>"><br><br>

<label for="text"> Nota Fiscal: </label>
<input type="text" name="nf_cliente" id="nf_cliente" value="<?php echo $dados['nf_cliente']?>"><br><br>

<label for="text"> Motorista: </label>
<input type="text" name="motorista_saida" id="motorista_saida" value="<?php echo $dados['motorista_saida']?>"><br><br>


<input type="submit" name="update" id="update">

</div>

</form>