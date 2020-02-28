<?php

header('Access-Control-Allow-Origin', '*');
header('Access-Control-Allow-Headers', '*');

$servername = 'localhost';
$username = 'livro';
$password = '123456';
$database = 'livro';

$mysql = new mysqli($servername, $username, $password, $database);
$mysql->set_charset("utf8");

if (!empty($_GET['action']) and $_GET['action'] == 'delete') {
    $id = (int)$_GET['txtCodigo'];
    $sql = "DELETE FROM pessoa WHERE id = '{$id}'";
    $result = mysqli_query($mysql, $sql);
}

$sql = "SELECT * FROM pessoa ORDER BY id";
$result = mysqli_query($mysql, $sql);

$items = '';
while ($row = mysqli_fetch_assoc($result)) {
    $item = file_get_contents("html/item.html");
    $item = str_replace('{id}', $row['id'], $item);
    $item = str_replace('{nome}', $row['nome'], $item);
    $item = str_replace('{endereco}', $row['endereco'], $item);
    $item = str_replace('{bairro}', $row['bairro'], $item);
    $item = str_replace('{telefone}', $row['telefone'], $item);
    $item = str_replace('{email}', $row['email'], $item);
    $items .= $item;
}

$list = file_get_contents("html/list.html");
$list = str_replace('{items}', $items, $list);
print $list;