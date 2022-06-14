

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Pt-br" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formes.css">

    <title>Sistema de Gerenciamento Escolar</title>
</head>



<main class="container"> 

<?php include "logadosucesso.php"?>


<h1>Entrada de Matéria Prima</h1>
<br><br>
 
<div class="input-field">

<!-- FORMUÁRIO DE CADASTRO DE ALUNOS -->
<form action="cadastroentrada.php" method="POST">

    <label for="data_entrada">Data: </label>
    <input type="text" name="data_entrada" id="data_entrada"><br>

    <label for="hora_entrada">Entrada:</label>
    <input type="hora_entrada" name="hora_entrada" id="hora_entrada"><br>

    <label for="hora_saida">Saída:</label>
    <input type="text" name="hora_saida" id="hora_saida"><br>

    <label for="cod_prod">Código: </label>
    <input type="text" name="cod_prod" id="cod_prod"><br>

    <label for="desc_prod">Descrição:</label>
    <input type="text" name="desc_prod" id="desc_prod"><br>

    <label for="unidade_prod">Unidade:</label>
    <input type="text" name="unidade_prod" id="unidade_prod"><br>

    <label for="qtd_prod">Quantidade:</label>
    <input type="text" name="qtd_prod" id="qtd_prod"><br>

    <label for="nf_prod">Nota Fiscal:</label>
    <input type="text" name="nf_prod" id="nf_prod"><br>
    

    <input type="submit" value="Cadastrar">
  

    </div>

</form>


</fieldset>
















<?php require_once "footer.php"?>