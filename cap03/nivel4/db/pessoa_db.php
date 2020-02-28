<?php

function lista_pessoa()
{
    $servername = 'localhost';
    $username = 'livro';
    $password = '123456';
    $database = 'livro';

    $mysql = new mysqli($servername, $username, $password, $database);
    $mysql->set_charset("utf8");

    $sql = "SELECT * FROM pessoa ORDER BY id";
    $result = mysqli_query($mysql, $sql);

    $list = mysqli_fetch_all($result);
    mysqli_close($mysql);
    return $list;
}

function exclui_pessoa($id)
{
    $servername = 'localhost';
    $username = 'livro';
    $password = '123456';
    $database = 'livro';

    $mysql = new mysqli($servername, $username, $password, $database);
    $mysql->set_charset("utf8");

    $sql = "DELETE FROM pessoa WHERE id={$id}";
    $result = mysqli_query($mysql, $sql);

    mysqli_close($mysql);
    return $result;
}

function get_pessoa($id)
{
    $servername = 'localhost';
    $username = 'livro';
    $password = '123456';
    $database = 'livro';

    $mysql = new mysqli($servername, $username, $password, $database);
    $mysql->set_charset("utf8");

    $sql = "SELECT * FROM pessoa WHERE id={$id}";
    $result = mysqli_query($mysql, $sql);

    $pessoa = mysqli_fetch_assoc($result);
    mysqli_close($mysql);
    return $pessoa;
}

function insert_pessoa($pessoa)
{
    $servername = 'localhost';
    $username = 'livro';
    $password = '123456';
    $database = 'livro';

    $mysql = new mysqli($servername, $username, $password, $database);
    $mysql->set_charset("utf8");

    $sql = "INSERT INTO pessoa (nome, endereco, bairro, telefone, email, id_cidade)
                            VALUES ('{$pessoa['nome']}', '{$pessoa['endereco']}', '{$pessoa['bairro']}',
                                    '{$pessoa['telefone']}', '{$pessoa['email']}', '{$pessoa['id_cidade']}')";
    $result = mysqli_query($mysql, $sql);

    mysqli_close($mysql);
    return $result;
}

function update_pessoa($pessoa)
{
    $servername = 'localhost';
    $username = 'livro';
    $password = '123456';
    $database = 'livro';

    $mysql = new mysqli($servername, $username, $password, $database);
    $mysql->set_charset("utf8");

    $sql = "UPDATE pessoa SET nome = '{$pessoa['nome']}', endereco = '{$pessoa['endereco']}',
                            bairro = '{$pessoa['bairro']}', telefone = '{$pessoa['telefone']}', email = '{$pessoa['email']}',
                            id_cidade = '{$pessoa['id_cidade']}' WHERE id = '{$pessoa['id']}' ";

    $result = mysqli_query($mysql, $sql);

    mysqli_close($mysql);
    return $result;
}