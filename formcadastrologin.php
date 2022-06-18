<link rel="stylesheet" href="css/formulariocadastro.css">
<title>CADASTRAR NOVO USUÁRIO</title>

<!-- FORMUÁRIO DE CADASTRO DE LOGIN -->

<div class="box">
<form action="cadastrologin.php" method="POST">

<fieldset>
    <legend>FORMULÁRIO DE LOGIN</legend><br><br>


    <div class="inputBox">
    <input type="text" name="email_adm" id="email_adm" class="inputCadastro" required>
    <label for="email_adm" class="labelInputCadastro">E-mail</label>
    </div>
    <br><br>

    <div class="inputBox">
    <input type="password" name="senha_adm" id="senha_adm" class="inputCadastro" required>
    <label for="senha_adm"class="labelInputCadastro">Senha:</label>
    </div>
    <br><br>
    <input type="submit" id="submit" value="Cadastrar">
 
    </fieldset>

</form>

