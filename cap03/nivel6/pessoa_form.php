<?php

require_once 'classes/Pessoa.php';
require_once 'classes/Cidade.php';

if (!empty($_REQUEST['action'])) {
    try {
        if ($_REQUEST['action'] == 'edit') {
            $id = (int)$_GET['id'];
            $pessoa = Pessoa::find($id);
        } else if ($_REQUEST['action'] == 'save') {
            $pessoa = $_POST;
            Pessoa::save($pessoa);
            print 'Pessoa salva com sucesso';
        }
    } catch (Exception $exception) {
        print $exception->getMessage();
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

$cidades = '';
foreach (Cidade::listAll() as $cidade) {
    $check = ($cidade['id'] == $pessoa['id_cidade']) ? 'selected=1' : '';
    $cidades .= "<option $check value='{$cidade['id']}'> {$cidade['nome']}</option>";
}
$form = str_replace('{cidades}', $cidades, $form);
print $form;
