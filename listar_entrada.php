<?php 
include "header.php";
include "database.php";




$sql = "SELECT * FROM sge_students";

$resultado = mysqli_query($conexao, $sql );


?><br><br>


<div class="box-search">
    <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
    <button onclick="search.Data()">Pesquisar</button>
</div>
<br><br>

<table border="2">

<thead>
    <tr>
            <th>Nome  </th> 
            <th>E-mail </th>
            <th>Senha </th>
            <td>Editar</td>
            <td>Excluir</td>
    </tr> 
</thead>

    <tbody>

    <?php while($dados = mysqli_fetch_array($resultado)) {?>

    <tr>
            <td><?php echo $dados['student_name'] ?></td>
            <td><?php echo $dados['student_email']?></td>
            <td><?php echo $dados['student_senha']?></td>
            <td><a href="formatualizaalunos.php?id=<?php echo $dados['id']?>">Editar</a> </td>
            <td><a href="delete_alunos.php?id=<?php echo $dados['id']?>">excluir</a> </td>
           
    </tr>
    

    <?php } ?>
    </tbody> 
  
</table>

