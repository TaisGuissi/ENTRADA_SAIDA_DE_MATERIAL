


<?php include "es_logado.php";?>
<?php include "logadosucesso.php";?>

<h1>Controle De Entrada de Matéria Prima</h1>


<fieldset>

<main class="container">  
<div class="input-field">

<!-- FORMUÁRIO DE CADASTRO DE ALUNOS -->
<form action="cadastroentrada.php" method="POST">

    <div class="form-row">
    
    </div>

    <legend>Entrada de MP</legend><br><br>

    <label for="data_entrada">Data: </label>
    <input type="text" name="data_entrada" id="data_entrada"><br><br>

    <label for="hora_entrada">Entrada:</label>
    <input type="hora_entrada" name="hora_entrada" id="hora_entrada"><br><br>

    <label for="hora_saida">Saída:</label>
    <input type="text" name="hora_saida" id="hora_saida"><br><br>

    <label for="cod_prod">Código: </label>
    <input type="text" name="cod_prod" id="cod_prod"><br><br>

    <label for="desc_prod">Descrição:</label>
    <input type="text" name="desc_prod" id="desc_prod"><br><br>

    <label for="unidade_prod">Unidade:</label>
    <input type="text" name="unidade_prod" id="unidade_prod"><br><br>

    <label for="qtd_prod">Quantidade:</label>
    <input type="text" name="qtd_prod" id="qtd_prod"><br><br>

    <label for="nf_prod">Nota Fiscal:</label>
    <input type="text" name="nf_prod" id="nf_prod"><br><br>
    


    <input type="submit" value="INCLUIR">

    </div>

</form>


</fieldset>
















<?php require_once "footer.php"?>