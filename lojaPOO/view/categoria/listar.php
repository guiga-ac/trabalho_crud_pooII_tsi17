<br>
 <fieldset id="groupBox">
  <legend>Filtros:</legend>
<form method="post" action="index.php?acao=consultar">
    ID <input type="text" name="id" ><br><br>
    Nome <input type="text" name="nome" ><br><br>
    Descrição <input type="text" name="descricao"><br><br>
<div class="flex_row">
    <input type="submit" value="Consultar" id="btnConsultar" class="botoes">
</form>
<form action="index.php">
    <input type="submit" value="Limpar" id="btnLimpar" class="botoes">
</form>
</div>
</fieldset>

<h2>Lista de Categorias</h2>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
<?php


    $categorias = $dados['categorias'];
    foreach ($categorias as $categoria){
        echo '<tr>';
        echo '<td style="text-align: center; vertical-align: middle;">'.$categoria->getId().'</td>';
        echo '<td>'.utf8_encode($categoria->getNome()).'</td>';
        echo '<td>'.utf8_encode($categoria->getDescricao()).'</td>';
        echo '<td style="text-align: center; vertical-align: middle;"><a href="index.php?acao=alterar&id='.$categoria->getId().'"><img src="images/editar.png"> </a></td>';
        echo '<td style="text-align: center; vertical-align: middle;"><a href="index.php?acao=excluir&id='.$categoria->getId().'"><img src="images/excluir.png"> </a></td>';
        echo '</tr>';
    }
?>
    </tbody>
</table>
<br>

<form method="post" action="index.php?acao=incluir">
    <input type="submit" id="btnIncluir" class="botoes" value="Incluir">
</form>

