<?php require_once "header.php"?>

<h1>Sistema de Gerenciamento de Escolar</h1>


<fieldset>

<!-- FORMUÁRIO DE CADASTRO DE ALUNOS -->
<form action="cadastrologin.php" method="POST">

    <div class="form-row">

    
    </div>

    <legend>Formulário de Login</legend><br><br>

    <label for="email_adm">E-mail</label>
    <input type="email" name="email_adm" id="email_adm"><br><br>

    <label for="senha_adm">Senha:</label>
    <input type="password" name="senha_adm" id="senha_adm"><br><br>

    <input type="submit" value="Cadastrar Aluno">


</form>


</fieldset>
















<?php require_once "footer.php"?>