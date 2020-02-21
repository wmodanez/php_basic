<?php
function incrementa_val($variavel, $valor){
    $variavel += $valor;
    return $variavel;
}

$a = 10;
incrementa_val($a, 20);
echo $a.'<br>'.PHP_EOL;

function incrementa_ref(&$variavel, $valor){
    $variavel += $valor;
}

$a = 10;
incrementa_ref($a, 20);
echo $a.'<br>'.PHP_EOL;

function ola(){
    $argumentos = func_get_args();
    $quantidade = func_num_args();
    for($n=0; $n<$quantidade; $n++){
        echo 'Ola ' .$argumentos[$n]. ', ';
    }
}

ola('João', 'Maria', 'José', 'Pedro');