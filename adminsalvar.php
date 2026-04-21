<?php include('../config.php');

$nome = $_POST['nome'];
$config = $_POST['config'];
$checklist = $_POST['checklist'];
$tecnico = $_POST['tecnico'];
$historico = $_POST['historico_tecnico'];
$obs = $_POST['observacoes_internas'];

$img = $_FILES['imagem']['name'];
move_uploaded_file($_FILES['imagem']['tmp_name'], "../uploads/".$img);

$conn->query("INSERT INTO maquinas 
(nome, config, checklist, tecnico, imagem, historico_tecnico, observacoes_internas) 
VALUES 
('$nome','$config','$checklist','$tecnico','$img','$historico','$obs')");

echo "Salvo com sucesso! <a href='dashboard.php'>Voltar</a>";