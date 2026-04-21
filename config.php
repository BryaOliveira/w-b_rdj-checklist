<?php
$conn = new mysqli("localhost", "root", "", "rdj_checklist");

if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}

session_start();
?>