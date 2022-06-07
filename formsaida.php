


<?php include "es_logado.php";?>
<?php include "logadosucesso.php";?>

<h1>Controle De Entrada de Matéria Prima</h1>


<fieldset>

<!-- FORMUÁRIO DE CADASTRO DE ALUNOS -->
<form action="cadastrosaida.php" method="POST">

    <div class="form-row">
    
    </div>

    <legend>Saída Cliente</legend><br><br>

    <label for="data_saida">Data: </label>
    <input type="text" name="data_saida" id="data_saida"><br><br>

    <label for="hora_chegou">Entrada:</label>
    <input type="hora_chegou" name="hora_chegou" id="hora_chegou"><br><br>

    <label for="hora_saida">Saída:</label>
    <input type="text" name="hora_saida" id="hora_saida"><br><br>

    <label for="cliente_saida">Cliente: </label>
    <input type="text" name="cliente_saida" id="cliente_saida"><br><br>

    <label for="nf_cliente">Nota Fiscal:</label>
    <input type="text" name="nf_cliente" id="nf_cliente"><br><br>

    <label for="motorista_saida">Motorista:</label>
    <input type="text" name="motorista_saida" id="motorista_saida"><br><br>

    <input type="submit" value="INCLUIR">


</form>


</fieldset>
















<?php require_once "footer.php"?>