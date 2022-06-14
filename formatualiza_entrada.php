
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Pt-br" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formes.css">

    <title>Sistema de Gerenciamento Escolar</title>
</head>


<?php
include "es_logado.php";
include_once "database.php";

//RECUPERA A INFORMAÇÃO

$id_entrada = $_GET['id_entrada'];

//CRIA A VARIAVEL E ATRIBUI A INSTRUÇÃO EM SQL PARA SELEÇÃP POR ID
$sql = "SELECT * FROM ads_taisgs_entrada_mp WHERE id_entrada = $id_entrada ";

//CRIAR UMA VARIAVEL QUE RECEBA OS RESULTADOS DA CONSULTA EM SQL
$resultado = mysqli_query($conexao, $sql);

//CONVERTER O RESULTADO DA CONSULTA AO BANCO EM UM ARRAY (MATRIZ)
$dados = mysqli_fetch_array($resultado);

?>

<main class="container">    
<h1>Atualização Entrada de Material</h1>
<br><br>
<div class="input-field">
<form action="atualiza_entrada.php" method="post">

<input type="hidden" name="id_entrada" value="<?php echo $dados['id_entrada']?>">

<label for="nome"> Data: </label>
<input type="text" name="data_entrada" id="data_entrada" value="<?php echo $dados['data_entrada']?>"><br><br>

<label for="email"> Entrada: </label>
<input type="text" name="hora_entrada" id="hora_entrada" value="<?php echo $dados['hora_entrada']?>"><br><br>

<label for="text"> Saída: </label>
<input type="text" name="hora_saida" id="hora_saida" value="<?php echo $dados['hora_saida']?>"><br><br>

<label for="text"> Código: </label>
<input type="text" name="cod_prod" id="cod_prod" value="<?php echo $dados['cod_prod']?>"><br><br>

<label for="text"> Descrição: </label>
<input type="text" name="desc_prod" id="desc_prod" value="<?php echo $dados['desc_prod']?>"><br><br>

<label for="text"> Unidade: </label>
<input type="text" name="unidade_prod" id="unidade_prod" value="<?php echo $dados['unidade_prod']?>"><br><br>

<label for="text"> Quantidade: </label>
<input type="text" name="qtd_prod" id="qtd_prod" value="<?php echo $dados['qtd_prod']?>"><br><br>

<label for="text"> Nota Fiscal: </label>
<input type="text" name="nf_prod" id="nf_prod" value="<?php echo $dados['nf_prod']?>"><br><br>


<input type="submit" name="update" id="update">

</div>

</form>