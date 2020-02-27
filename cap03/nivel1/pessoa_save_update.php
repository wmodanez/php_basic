<?php

$dados = $_POST;

if ($dados['txtCodigo']) {
    $servername = 'localhost';
    $username = 'livro';
    $password = '123456';
    $database = 'livro';

    $mysql = new mysqli($servername, $username, $password, $database);
    $mysql->set_charset("utf8");

    $sql = "UPDATE pessoa SET nome = '{$dados['txtNome']}', endereco = '{$dados['txtEndereco']}',
                  bairro = '{$dados['txtBairro']}', telefone = '{$dados['txtTelefone']}', email = '{$dados['txtEmail']}', 
                  id_cidade = '{$dados['id_cidade']}' WHERE id = '{$dados['txtCodigo']}' ";
    $result = mysqli_query($mysql, $sql);

    if ($result) {
        print 'Registro atualizado com sucesso.';
    } else {
        print mysqli_error($mysql);
    }
    mysqli_close($mysql);
}