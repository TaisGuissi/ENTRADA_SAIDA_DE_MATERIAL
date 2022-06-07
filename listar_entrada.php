<?php 

include "database.php";
include "logadosucesso.php";

$sql = "SELECT * FROM ads_taisgs_entrada_mp";

$resultado = mysqli_query($conexao, $sql );


?><br><br>

<!--
<div class="box-search">
    <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
    <button onclick="search.Data()">Pesquisar</button>
</div>
-->
<br><br>

<table border="2">

<thead>
    <tr>
            <th>Data</th> 
            <th>Entrada </th>
            <th>Saída </th>
            <td>Código</td>
            <td>Descrição</td>
            <td>Unidade</td>
            <td>Quantidade</td>
            <td>Nota Fiscal</td>
            <td>Editar</td>
            <td>Excluir</td>
            
    </tr> 
</thead>

    <tbody>

    <?php while($dados = mysqli_fetch_array($resultado)) {?>

    <tr>
            <td><?php echo $dados['data_entrada'] ?></td>
            <td><?php echo $dados['hora_entrada']?></td>
            <td><?php echo $dados['hora_saida']?></td>
            <td><?php echo $dados['cod_prod']?></td>
            <td><?php echo $dados['desc_prod']?></td>
            <td><?php echo $dados['unidade_prod']?></td>
            <td><?php echo $dados['qtd_prod']?></td>
            <td><?php echo $dados['nf_prod']?></td>



            <td><a href="formatualiza_entrada.php?id_entrada=<?php echo $dados['id_entrada']?>">EDITAR</a> </td>
            <td><a href="excluir_entrada.php?id_entrada=<?php echo $dados['id_entrada']?>">EXCLUIR</a> </td>
           
    </tr> 
    
    
    <?php } ?>
    </tbody> 

   
</table>

<br><br>
<a href="formentrada.php">INCLUIR</a>



