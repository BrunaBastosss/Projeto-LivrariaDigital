<?php
session_start();


require_once('conex.php');


if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $conexao->real_escape_string($_POST['email']);
    $senha = $conexao->real_escape_string($_POST['senha']);

   
    $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
    $stmt->bind_param('ss', $email, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows < 1) {
       
        header('Location: login.html');
        exit();
    } else {
       
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha; 
        header('Location: acesso.php');
        exit();
    }
    $stmt->close();
} else {
    
    header('Location: login.html');
    exit();
}
 
?>