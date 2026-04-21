<?php include('../config.php');

$id = $_GET['id'];

$res = $conn->query("SELECT * FROM maquinas WHERE id=$id");
$maquina = $res->fetch_assoc();
?>

<h2>Equipamento Revisado</h2>

<img src="../uploads/<?php echo $maquina['imagem']; ?>" width="300">

<p><strong>Configuração:</strong> <?php echo $maquina['config']; ?></p>

<p><strong>Técnico:</strong> <?php echo $maquina['tecnico']; ?></p>

<h3>Checklist</h3>
<p><?php echo nl2br($maquina['checklist']); ?></p>

<p>✔️ Equipamento revisado e aprovado</p>