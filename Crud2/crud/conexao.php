<?php 
define('HOST','127.0.0.1');
define('USUARIO','root');
define('SENHA','');
define('DATABASE','crud');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DATABASE) or die("Erro ao conectar no banco de dados");
?>