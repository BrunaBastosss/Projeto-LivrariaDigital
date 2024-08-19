<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: login.html'); 
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Protegida</title>
</head>
<body>
    <h1>Bem-vindo à página protegida!</h1>
    <p>Você está autenticado.</p>
    <a href="logout.php">Sair</a>
</body>
</html>