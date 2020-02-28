<?php

header('Access-Control-Allow-Origin', '*');
header('Access-Control-Allow-Headers', '*');

if (!empty($_REQUEST['action'])) {
    $servername = 'localhost';
    $username = 'livro';
    $password = '123456';
    $database = 'livro';

    $mysql = new mysqli($servername, $username, $password, $database);
    $mysql->set_charset("utf8");

    if ($_REQUEST['action'] == 'edit') {
        $id = (int)$_GET['txtCodigo'];
        $sql = "SELECT * FROM pessoa WHERE id= '{$id}'";
        $result = mysqli_query($mysql, $sql);
        $pessoa = mysqli_fetch_assoc($result);
    } else if ($_REQUEST['action'] == 'save') {
        $pessoa = $_POST;
        if (empty($_POST['txtCodigo'])) {
            $sql = "INSERT INTO pessoa (nome, endereco, bairro, telefone, email, id_cidade)
                            VALUES ('{$pessoa['txtNome']}', '{$pessoa['txtEndereco']}', '{$pessoa['txtBairro']}',
                                    '{$pessoa['txtTelefone']}', '{$pessoa['txtEmail']}', '{$pessoa['id_cidade']}')";
            $result = mysqli_query($mysql, $sql);
        } else {
            $sql = "UPDATE pessoa SET nome = '{$pessoa['txtNome']}', endereco = '{$pessoa['txtEndereco']}',
                            bairro = '{$pessoa['txtBairro']}', telefone = '{$pessoa['txtTelefone']}', email = '{$pessoa['txtEmail']}',
                            id_cidade = '{$pessoa['id_cidade']}' WHERE id = '{$pessoa['txtCodigo']}' ";
            $result = mysqli_query($mysql, $sql);
        }
        print ($result) ? 'Registro salvo com sucesso.' : mysqli_error($mysql);
        mysqli_close($mysql);
    }
} else {
    $pessoa = [];
    $pessoa['id'] = '';
    $pessoa['nome'] = '';
    $pessoa['endereco'] = '';
    $pessoa['bairro'] = '';
    $pessoa['telefone'] = '';
    $pessoa['email'] = '';
    $pessoa['id_cidade'] = '';
}

require_once "../lista_combo_cidades.php";

$form = file_get_contents("html/form.html");
$form = str_replace('{id}', $pessoa['txtCodigo'], $form);
$form = str_replace('{nome}', $pessoa['txtNome'], $form);
$form = str_replace('{endereco}', $pessoa['txtEndereco'], $form);
$form = str_replace('{bairro}', $pessoa['txtBairro'], $form);
$form = str_replace('{telefone}', $pessoa['txtTelefone'], $form);
$form = str_replace('{email}', $pessoa['txtEmail'], $form);
$form = str_replace('{id_cidade}', $pessoa['id_cidade'], $form);
$form = str_replace('{cidades}', lista_combo_cidades($pessoa['id_cidade']), $form);
print $form;
