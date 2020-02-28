<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem de pessoas</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="col-md-10">
    <fieldset class="hidden-print form-group">
        <legend>Pessoas</legend>
        <?php

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

        print '<table class="table table-striped table-hover table-bordered" style="text-align: center">';
        print '<thead>';
        print '<tr style="font-weight: bold">';
        print '<th style="width: 1%"> </th>';
        print '<th style="width: 1%"> </th>';
        print '<th style="width: 3%"> Id </th>';
        print '<th style="width: 55%"> Nome </th>';
        print '<th style="width: 20%"> Endereço </th>';
        print '<th style="width: 10%"> Bairro </th>';
        print '<th style="width: 10%"> Telefone </th>';
        print '</tr>';
        print '</thead>';

        print '<tbody>';
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $nome = $row['nome'];
            $endereco = $row['endereco'];
            $bairro = $row['bairro'];
            $telefone = $row['telefone'];
            $email = $row['email'];
            $id_cidade = $row['id_cidade'];

            print '<tr>';
            print "<td aling='center'> <a href='pessoa_form_edit.php?action=edit&txtCodigo={$id}'><i class='fa fa-edit fa-2x'></i></a></td>";
            print "<td aling='center'> <a href='pessoa_list.php?action=delete&txtCodigo={$id}'><i class='fa fa-minus-circle fa-2x' style='color: red'></i></a></td>";
            print "<td> {$id} </td>";
            print "<td> {$nome}</td>";
            print "<td> {$endereco}</td>";
            print "<td> {$bairro}</td>";
            print "<td> {$telefone}</td>";
            print '</tr>';
        }
        print '</tbody>';
        print '</table>';
        ?>
        <div class="col-md-4">
            <button id="btnInserir" name="btnInserir" class="btn btn-primary"
                    onclick="window.location='pessoa_form.php'"><i class="fa fa-plus-circle"></i> Inserir
            </button>
        </div>
    </fieldset>
</div>
</body>
</html>