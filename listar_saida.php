<?php 
include "es_logado.php";
include "database.php";
include "logadosucesso.php";






$sql = "SELECT * FROM ads_taisgs_saida_mp";

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
            <td>Cliente</td>
            <td>Nota Fiscal</td>
            <td>Motorista</td>
            <td>Editar</td>
            <td>Excluir</td>
    </tr> 
</thead>

    <tbody>

    <?php while($dados = mysqli_fetch_array($resultado)) {?>

    <tr>
            <td><?php echo $dados['data_saida'] ?></td>
            <td><?php echo $dados['hora_chegou']?></td>
            <td><?php echo $dados['hora_saida']?></td>
            <td><?php echo $dados['cliente_saida']?></td>
            <td><?php echo $dados['nf_cliente']?></td>
            <td><?php echo $dados['motorista_saida']?></td>
          



            <td><a href="formatualiza_saida.php?id_saida=<?php echo $dados['id_saida']?>">Editar</a> </td>
            <td><a href="excluir_saida.php?id_saida=<?php echo $dados['id_saida']?>">excluir</a> </td>
           
    </tr>
    

    <?php } ?>
    </tbody> 
  
</table>

