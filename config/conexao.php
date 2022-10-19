<?php
function novaConexao(){
    $server = 'localhost';
    $user = 'admin';
    $password = 'admin';
    $database = 'myquirk';

    $conn = new mysqli($server, $user, $password, $database);
    if($conn->connect_error){
        die('Erro na conexao');
    } return $conn;
}
?>