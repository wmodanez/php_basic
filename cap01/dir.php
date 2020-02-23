<?php

$dir = 'tmp';
if (rmdir($dir)) {
    echo "Diretório apagado com sucesso!\n";
} else {
    echo "Erro ao apagar o diretório!\n";
}

if (mkdir($dir)) {
    echo "Diretório criado com sucesso!\n";
} else {
    echo "Erro ao criar o diretório!\n";
}

$diretorio = "/";
if (is_dir($diretorio)) {
    $linhas = scandir($diretorio);
    foreach ($linhas as $linha) {
        print $linha . PHP_EOL;
    }
}