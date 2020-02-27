<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Pessoa</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-md-12">
    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="pessoa_save_insert.php">
        <fieldset>

            <!-- Form Name -->
            <legend>Cadastro de Pessoa</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="txtCodigo">Código</label>
                <div class="col-md-2">
                    <input id="txtCodigo" name="txtCodigo" type="text" placeholder="Código"
                           class="form-control input-md"
                           readonly="1">
                    <span class="help-block"></span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="txtNome">Nome</label>
                <div class="col-md-5">
                    <input id="txtNome" name="txtNome" type="text" placeholder="Nome" class="form-control input-md">
                    <span class="help-block"></span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="txtEndereco">Endereço</label>
                <div class="col-md-5">
                    <input id="txtEndereco" name="txtEndereco" type="text" placeholder="Endereço"
                           class="form-control input-md">
                    <span class="help-block"></span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="txtBairro">Bairro</label>
                <div class="col-md-3">
                    <input id="txtBairro" name="txtBairro" type="text" placeholder="Bairro"
                           class="form-control input-md">
                    <span class="help-block"></span>
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="id_cidade">Cidade</label>
                <div class="col-md-4">
                    <select id="id_cidade" name="id_cidade" class="form-control">
                        <?php
                        require_once 'lista_combo_cidades.php';
                        print lista_combo_cidades();
                        ?>
                    </select>
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="txtTelefone">Telefone</label>
                <div class="col-md-2">
                    <input id="txtTelefone" name="txtTelefone" type="text" placeholder="Telefone"
                           class="form-control input-md">
                    <span class="help-block"></span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="txtEmail">Email</label>
                <div class="col-md-3">
                    <input id="txtEmail" name="txtEmail" type="text" placeholder="Email" class="form-control input-md">
                    <span class="help-block"></span>
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