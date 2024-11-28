<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: login.html'); 
    exit();
}

require_once('conex.php');

$sql = "SELECT nome, email, telefone, senha FROM usuarios";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "nome: " . $row["nome"]. " - email: " . $row["email"]. " - telefone: " . $row["telefone"]. " - senha: " . $row["senha"]. "<br>";
    }
} else {
    echo "0 results";
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
    <div class="Div">
    <h1>Bem-vindo à página protegida!</h1>
    <p>Você está autenticado.</p>
    </div>
    <a href="login.html">Sair</a>
    <style>
        body{
            background-color: black;
            
        }
        h1{
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        p{
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        .Div{
            margin-left: 34%;
            margin-top: 10%;
        }
        a{
            margin-left: 50%;
            background-color: rgb(51, 202, 114);
            padding: 20px;
            width: 100px;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 15px;

        }
    </style>
</body>
</html>