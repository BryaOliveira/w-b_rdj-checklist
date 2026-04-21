<?php include('../config.php'); ?>

<form method="POST">
    <input type="text" name="usuario" placeholder="Usuário">
    <input type="password" name="senha" placeholder="Senha">
    <button type="submit">Entrar</button>
</form>

<?php
if ($_POST) {
    $u = $_POST['usuario'];
    $s = md5($_POST['senha']);

    $res = $conn->query("SELECT * FROM usuarios WHERE usuario='$u' AND senha='$s'");

    if ($res->num_rows > 0) {
        $_SESSION['logado'] = true;
        header("Location: dashboard.php");
    } else {
        echo "Login inválido";
    }
}
?>