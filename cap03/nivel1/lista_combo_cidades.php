<?php

function lista_combo_cidades($id = null)
{
    $output = '';
    $servername = 'localhost';
    $username = 'livro';
    $password = '123456';
    $database = 'livro';

    $mysql = new mysqli($servername, $username, $password, $database);
    $mysql->set_charset("utf8");

    $result = mysqli_query($mysql, 'SELECT id, nome FROM cidade');

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $check = ($row['id'] == $id) ? 'selected=1' : '';
            $output .= "<option $check value='{$row['id']}'> {$row['nome']} </option>";
        }
    }
    mysqli_close($mysql);
    return $output;
}