
    <link rel="stylesheet" href="css/formulariocadastro.css">

<title>Entrada de Material</title>



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

<div class="box">
<form action="atualiza_entrada.php" method="post">

<fieldset>
    <legend>Atualizar</legend><br><br>

<input type="hidden" name="id_entrada" value="<?php echo $dados['id_entrada']?>">



<input type="text" name="data_entrada" id="data_entrada" value="<?php echo $dados['data_entrada']?>"required><br><br>
<label for="date"></label><br><br>

<div class="inputBox">
<input type="text" name="hora_entrada" id="hora_entrada" class="inputCadastro" value="<?php echo $dados['hora_entrada']?>" required>
<label for="text" class="labelInputCadastro"> Entrada: </label>
</div>
<br><br>

<div class="inputBox">
<input type="text" name="hora_saida" id="hora_saida" class="inputCadastro" value="<?php echo $dados['hora_saida']?>" required>
<label for="text" class="labelInputCadastro"> Saída: </label>
</div>
<br><br>


<div class="inputBox">
<input type="text" name="cod_prod" id="cod_prod" class="inputCadastro" value="<?php echo $dados['cod_prod']?> " required>
<label for="text"class="labelInputCadastro"> Código: </label>
</div>
<br><br>


<div class="inputBox">
<input type="text" name="desc_prod" id="desc_prod" class="inputCadastro" value="<?php echo $dados['desc_prod']?>"required>
<label for="text" class="labelInputCadastro"> Descrição: </label>
</div>
<br><br>

<div class="inputBox">
<input type="text" name="unidade_prod" id="unidade_prod" class="inputCadastro"value="<?php echo $dados['unidade_prod']?>"required>
<label for="text" class="labelInputCadastro"> Unidade: </label>
</div>
<br><br>

<div class="inputBox">
<input type="text" name="qtd_prod" id="qtd_prod" class="inputCadastro" value="<?php echo $dados['qtd_prod']?>"required>
<label for="text" class="labelInputCadastro"> Quantidade: </label>
</div>
<br><br>

<div class="inputBox">
<input type="text" name="nf_prod" id="nf_prod" class="inputCadastro" value="<?php echo $dados['nf_prod']?>"required>
<label for="text"class="labelInputCadastro"> Nota Fiscal: </label>
</div>
<br><br>


<input type="submit" name="update" id="update" value="Atualizar">

</div>

</form>