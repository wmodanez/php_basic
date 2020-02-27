<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Pessoa</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<?php
if (!empty($_GET['txtCodigo'])) {
    $servername = 'localhost';
    $username = 'livro';
    $password = '123456';
    $database = 'livro';

    $mysql = new mysqli($servername, $username, $password, $database);
    $mysql->set_charset("utf8");

    $id = (int)$_GET['id'];
    $result = mysqli_query($mysql, "SELECT * FROM pessoa WHERE id= '{$id}'");
    $row = mysqli_fetch_assoc($result);

    $id = $row['id'];
    $nome = $row['nome'];
    $endereco = $row['endereco'];
    $bairro = $row['bairro'];
    $telefone = $row['telefone'];
    $email = $row['email'];
    $id_cidade = $row['id_cidade'];
}
?>
<body>
<div class="col-md-12">
    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="pessoa_save_update.php">
        <fieldset>

            <!-- Form Name -->
            <legend>Cadastro de Pessoa</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="txtCodigo">Código</label>
                <div class="col-md-2">
                    <input id="txtCodigo" name="txtCodigo" type="text" placeholder="Código"
                           class="form-control input-md"
                           readonly="1" value="<?= $id ?>">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="txtNome">Nome</label>
                <div class="col-md-5">
                    <input id="txtNome" name="txtNome" type="text" placeholder="Nome" class="form-control input-md"
                           value="<?= $nome ?>">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="txtEndereco">Endereço</label>
                <div class="col-md-5">
                    <input id="txtEndereco" name="txtEndereco" type="text" placeholder="Endereço"
                           class="form-control input-md" value="<?= $endereco ?>">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="txtBairro">Bairro</label>
                <div class="col-md-3">
                    <input id="txtBairro" name="txtBairro" type="text" placeholder="Bairro"
                           class="form-control input-md" value="<?= $bairro ?>">
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="id_cidade">Cidade</label>
                <div class="col-md-4">
                    <select id="id_cidade" name="id_cidade" class="form-control">
                        <?php
                        require_once 'lista_combo_cidades.php';
                        print lista_combo_cidades($id_cidade);
                        ?>
                    </select>
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="txtTelefone">Telefone</label>
                <div class="col-md-2">
                    <input id="txtTelefone" name="txtTelefone" type="text" placeholder="Telefone"
                           class="form-control input-md" value="<?= $telefone ?>">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="txtEmail">Email</label>
                <div class="col-md-3">
                    <input id="txtEmail" name="txtEmail" type="text" placeholder="Email" class="form-control input-md"
                           value="<?= $email ?>">
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="btnSalvar"></label>
                <div class="col-md-4">
                    <button id="btnSalvar" name="btnSalvar" class="btn btn-primary" type="submit">Salvar</button>
                </div>
            </div>

        </fieldset>
    </form>
</div>
</body>
</html>