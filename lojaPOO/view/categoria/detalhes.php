<?php
//capturo o objeto categoria que foi passado em $dados
$categoria = $dados['categorias'][0];
?>
<h1>Alterar categoria</h1>
<form method="post" action="index.php?acao=gravaAlterar">
<p>ID: <input type="text" name="id" value="<?= $categoria->getId() ?>" readonly></p>
<p>Nome: <input type="text" name="nome" value="<?= utf8_encode($categoria->getNome()) ?>"></p>
<p>Descrição: <input type="text" name="descricao" value="<?= utf8_encode($categoria->getDescricao()) ?>"></p>
<div class="flex_row">
<input type="submit" value="Gravar" id="btnGravar" class="botoes">
</form>
<br>
<form action="index.php">
    <input type="submit" value="Cancelar" id="btnCancelar" class="botoes"/>
</form>
</div>