<?php
session_start();

$valid_username = 'usuario';
$valid_password = 'senha123';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
    
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('Location: logado.php');
        exit();
    } else {
    
        echo "<script>alert('Usuário ou senha incorretos.'); window.location.href='login.php';</script>";
    }
} else {
    header('Location: login.php');
    exit();
}
?>
