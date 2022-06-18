<?php include "loguei.php";?>

<link rel="stylesheet" href="css/formulariocadastro.css">


<!-- FORMUÁRIO DE CADASTRO DE ENTRADAS -->

    <div class="box">
    <form action="cadastroentrada.php" method="POST">

    <fieldset>
    <legend>ENTRADA DE MATERIAL</legend><br><br>

   
    <input type="date" name="data_entrada" id="data_entrada" required><br><br>
    <label for="data_entrada"></label>

    <div class="inputBox">
    <input type="text" name="hora_entrada" id="hora_entrada" class="inputCadastro" required>
    <label for="hora_entrada" class="labelInputCadastro">Entrada:</label>
    </div>
    <br><br>

    <div class="inputBox">
    <input type="text" name="hora_saida" id="hora_saida" class="inputCadastro" required>
    <label for="hora_saida" class="labelInputCadastro">Saída:</label>
    </div>
    <br><br>

    <div class="inputBox">
    <input type="text" name="cod_prod" id="cod_prod" class="inputCadastro" required>
    <label for="cod_prod" class="labelInputCadastro">Código:</label>
    </div>
    <br><br>

    <div class="inputBox">
    <input type="text" name="desc_prod" id="desc_prod" class="inputCadastro" required>
    <label for="desc_prod" class="labelInputCadastro">Descrição:</label>
    </div>
    <br><br>

    <div class="inputBox">
    <input type="text" name="unidade_prod" id="unidade_prod" class="inputCadastro" required>
    <label for="unidade_prod" class="labelInputCadastro">Unidade:</label>
    </div>
    <br><br>

    <div class="inputBox">
    <input type="text" name="qtd_prod" id="qtd_prod" class="inputCadastro" required>
    <label for="qtd_prod"class="labelInputCadastro">Quantidade:</label>
    </div>
    <br><br>

    <div class="inputBox">
    <input type="text" name="nf_prod" id="nf_prod" class="inputCadastro" required>
    <label for="nf_prod" class="labelInputCadastro">Nota Fiscal:</label>
    </div>
    <br><br>
    <input type="submit" id="submit" value="Cadastrar">
    </div>

</form>
</fieldset>
















<?php require_once "footer.php"?>