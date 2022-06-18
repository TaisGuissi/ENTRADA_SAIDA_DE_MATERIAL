<link rel="stylesheet" href="css/formulariocadastro.css">


<!-- FORMUÁRIO DE CADASTRO DE ALUNOS -->


    <div class="box">
    <form action="cadastrosaida.php" method="POST">

    <fieldset>
    <legend>Saída Cliente</legend><br><br>

    
  
    <input type="date" name="data_saida" id="data_saida" required> <br><br>
    <label for="data_saida"></label>
    <br><br>
  

    <div class="inputBox">

    <input type="text" name="hora_chegou" id="hora_chegou"class="inputCadastro" required>
    <label for="hora_chegou" class="labelInputCadastro">Entrada:</label>
    </div>
    <br><br>

    <div class="inputBox">
    <input type="text" name="hora_saida" id="hora_saida"class="inputCadastro" required>
    <label for="hora_saida" class="labelInputCadastro">Saída:</label>
    </div>
    <br><br>

    <div class="inputBox">
    <input type="text" name="cliente_saida" id="cliente_saida"class="inputCadastro" required>
    <label for="cliente_saida" class="labelInputCadastro">Cliente: </label>
    </div>
    <br><br>

    <div class="inputBox">
    <input type="text" name="nf_cliente" id="nf_cliente"class="inputCadastro" required>
    <label for="nf_cliente" class="labelInputCadastro">Nota Fiscal:</label>
    </div>
    <br><br>

    <div class="inputBox">
    <input type="text" name="motorista_saida" id="motorista_saida"class="inputCadastro" required><br><br>
    <label for="motorista_saida" class="labelInputCadastro">Motorista:</label>
    </div>
    <br><br>

    <input type="submit" id="submit"value="INCLUIR">

    </div>
</form>


</fieldset>
