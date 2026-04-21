<?php include('../config.php'); 
if (!isset($_SESSION['logado'])) die("Acesso negado");
?>

<h2>Cadastrar Máquina</h2>

<form action="salvar.php" method="POST" enctype="multipart/form-data">

<input type="text" name="nome" placeholder="Nome">

<textarea name="config" placeholder="Configuração"></textarea>

<textarea name="checklist" placeholder="Checklist (ex: OK memória, OK SSD)"></textarea>

<input type="text" name="tecnico" placeholder="Técnico">

<input type="file" name="imagem">

<textarea name="historico_tecnico" placeholder="Histórico técnico (interno)"></textarea>

<textarea name="observacoes_internas" placeholder="Observações internas"></textarea>

<button type="submit">Salvar</button>

</form>