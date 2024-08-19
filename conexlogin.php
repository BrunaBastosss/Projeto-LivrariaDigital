<?PHP
$localhost = 'localhost';
$user = 'root';
$pass = '';
$banco = 'livraria2';

$conex = new mysqli($localhost, $user, $pass, $banco);
if ($conexao -> connect_errno){
    echo "ERRO";
 }
 else{
     echo "CONEXÃO EFETUADA COM SUCESSO";
 }

 

?>