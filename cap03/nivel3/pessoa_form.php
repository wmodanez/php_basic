<?php

/*TODO
verificar o motivo pelo qual ao criar ou alterar a solução esta gravando os dados em branco e gerando erro na tela
PHP Notice:  Undefined index
*/
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
                            VALUES ('{$pessoa['nome']}', '{$pessoa['endereco']}', '{$pessoa['bairro']}',
                                    '{$pessoa['telefone']}', '{$pessoa['email']}', '{$pessoa['id_cidade']}')";
            $result = mysqli_query($mysql, $sql);
        } else {
            $sql = "UPDATE pessoa SET nome = '{$pessoa['nome']}', endereco = '{$pessoa['endereco']}',
                            bairro = '{$pessoa['bairro']}', telefone = '{$pessoa['telefone']}', email = '{$pessoa['email']}',
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
$form = str_replace('{id}', $pessoa['id'], $form);
$form = str_replace('{nome}', $pessoa['nome'], $form);
$form = str_replace('{endereco}', $pessoa['endereco'], $form);
$form = str_replace('{bairro}', $pessoa['bairro'], $form);
$form = str_replace('{telefone}', $pessoa['telefone'], $form);
$form = str_replace('{email}', $pessoa['email'], $form);
$form = str_replace('{id_cidade}', $pessoa['id_cidade'], $form);
$form = str_replace('{cidades}', lista_combo_cidades($pessoa['id_cidade']), $form);
print $form;
