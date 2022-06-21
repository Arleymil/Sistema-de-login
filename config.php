<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = 'Arley000';
$dbname = 'form_arley';

$conexao = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

//if($conexao->connect_error){
//    die("Falha na conexão: " . $conexao->connect_error);
//} else {
//    echo "Conexão realizada com sucesso!";
//}

?>