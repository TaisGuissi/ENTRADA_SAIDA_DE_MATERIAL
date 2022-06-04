<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Sistema de Gerenciamento Escolar</title>
</head>

<body>

<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event){
        if (event.key === "Enter") {
            searchData();
        }
    });
    function searchData(){
        window.location = 'lista_alunos.php?search='+search.Value;
    }

    </script>

    <header>
        <nav>
            <ul>
                <li> <a href="index.php"> HOME </a> </li>
                <li> <a href="formcadastrologin.php"> CADASTRAR LOGIN </a> </li>
                <li> <a href="lista_alunos.php"> LISTAR </a> </li></li>
                <li> <a href="login.php"> LOGIN </a> </li></li>
                
                <li> <a href="contato.php"> CONTATO </a> </li>
            </ul>
        </nav>
    </header>

