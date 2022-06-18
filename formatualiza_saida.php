
    <link rel="stylesheet" href="css/formulariocadastro.css">

    <title>Saída de Material</title>




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

<div class="box">
<form action="atualiza_saida.php" method="post">

<fieldset>
    <legend>Atualizar</legend><br><br>

<input type="hidden" name="id_saida" value="<?php echo $dados['id_saida']?>">


<input type="date" name="data_saida" id="data_saida" value="<?php echo $dados['data_saida']?>" required><br><br>
<label for="data_saida"></label>
<br><br>

<div class="inputBox">
<input type="text" name="hora_chegou" id="hora_chegou" class="inputCadastro" value="<?php echo $dados['hora_chegou']?> " required>
<label for="text" class="labelInputCadastro"> Entrada: </label>
</div>
<br><br>

<div class="inputBox">
<input type="text" name="hora_saida" id="hora_saida" class="inputCadastro" value="<?php echo $dados['hora_saida']?>"required>
<label for="text" class="labelInputCadastro"> Saída: </label>
</div>
<br><br>

<div class="inputBox">
<input type="text" name="cliente_saida" id="cliente_saida" class="inputCadastro" value="<?php echo $dados['cliente_saida']?>"required>
<label for="text" class="labelInputCadastro"> Cliente: </label>
</div>
<br><br>

<div class="inputBox">
<input type="text" name="nf_cliente" id="nf_cliente" class="inputCadastro" value="<?php echo $dados['nf_cliente']?>"required>
<label for="text" class="labelInputCadastro"> Nota Fiscal: </label>
</div>
<br><br>

<div class="inputBox">
<input type="text" name="motorista_saida" id="motorista_saida" class="inputCadastro" value="<?php echo $dados['motorista_saida']?>"required>
<label for="text" class="labelInputCadastro"> Motorista: </label>
</div>
<br><br>

<input type="submit" name="update" id="submit">
</div>
</form>