<?php

$dados = $_GET;

if (!empty($dados['txtCodigo'])) {
    $servername = 'localhost';
    $username = 'livro';
    $password = '123456';
    $database = 'livro';

    $mysql = new mysqli($servername, $username, $password, $database);
    $mysql->set_charset("utf8");

    $sql = "DELETE FROM pessoa WHERE id = '{$dados['txtCodigo']}' ";
    $result = mysqli_query($mysql, $sql);

    if ($result) {
        print 'Registro excluído com sucesso.';
    } else {
        print mysqli_error($mysql);
    }
    mysqli_close($mysql);
}