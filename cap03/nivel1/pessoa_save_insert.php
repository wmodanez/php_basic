<?php

$dados = $_POST;
$servername = 'localhost';
$username = 'livro';
$password = '123456';
$database = 'livro';

$mysql = new mysqli($servername, $username, $password, $database);
$mysql->set_charset("utf8");

$sql = "INSERT INTO pessoa (nome, endereco, bairro, telefone, email, id_cidade) 
        VALUES ('{$dados['txtNome']}', '{$dados['txtEndereco']}', '{$dados['txtBairro']}', 
                '{$dados['txtTelefone']}', '{$dados['txtEmail']}', '{$dados['id_cidade']}')";

$result = mysqli_query($mysql, $sql);

if ($result) {
    print 'Registro inserido com sucesso!';
} else {
    print mysqli_error($mysql);
}
mysqli_close($mysql);