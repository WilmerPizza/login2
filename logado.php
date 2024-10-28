<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p>Você está logado!</p>
    <a href="logout.php">Sair</a>
</body>
</html>
