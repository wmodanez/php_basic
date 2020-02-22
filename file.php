<?php

//Read
$fd = fopen(__FILE__, "r");
$linha = 1;

while (!feof($fd)) {
    $buffer = fgets($fd);
    if ($linha > 1) {
        echo $buffer;
    }
    $linha++;
}
fclose($fd);

//Write
$fp = fopen('file.txt', 'w');
fwrite($fp, 'linha 1' . PHP_EOL);
fwrite($fp, 'linha 2' . PHP_EOL);
fwrite($fp, 'linha 3' . PHP_EOL);
fwrite($fp, 'linha 4' . PHP_EOL);
fwrite($fp, 'linha 5' . PHP_EOL);
fclose($fp);

//Contents
echo file_put_contents('file.txt', "este é o conteúdo do arquivo\nque será usado para teste.\n");
echo "\n";
echo file_get_contents('file.txt');

//Read to array
$arquivo = 'file.txt';
$file = file($arquivo);

foreach ($file as $linha) {
    print $linha;
}

//Copy
$origem = 'file.txt';
$destino = 'file2.txt';

if (copy($origem, $destino)) {
    echo "Cópia feita com sucesso!\n";
} else {
    echo "Erro encontrado ao copiar o arquivo!\n";
}

//Rename
$origem = "file2.txt";
$destino = "file3.txt";

if (rename($origem, $destino)) {
    echo "Renomeação feita com sucesso!\n";
} else {
    echo "Erro encontrado ao renomear o arquivo!\n";
}

//Unlink - Delete
if (unlink($destino)) {
    echo "Arquivo apagado!\n";
} else {
    echo "Erro ao apagar o arquivo!\n";
}

//Is_File
if (is_file($arquivo)) {
    echo "É um arquivo.\n";
} else {
    echo "Não é um arquivo.\n";
}

//File_exists
if (file_exists($arquivo)) {
    echo "Arquivo existe!\n";
    if (unlink($arquivo)) {
        echo "Arquivo apagado!\n";
    }
} else {
    echo "Arquivo não encontrado!\n";
}

