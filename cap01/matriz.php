<?php

$carros = array('City' => array('cor' => 'preto', 'potencia' => '1.5', 'ano'=>'2019'),
                'Corola' => array('cor' => 'cinza', 'potencia' => '1.8', 'ano'=>'2020'),
                'Tesla' => array('cor' => 'prata', 'potencia' => '2.1', 'ano'=>'2020'));

echo $carros['City']['ano'].PHP_EOL;

foreach ($carros as $modelo => $caracteristicas){
    echo "=> modelo $modelo\n";
    foreach ($caracteristicas as $caracteristica => $valor){
        echo " - caracteristica $caracteristica => $valor\n";
    }
}