<?php

//Nosso array inicial
$array = [
    0, 1, 2, 3, 4, 5, 6, 7, 8, 9
];

//Função para aplicar em cada linha que também pode ser uma função anônima
function multiplicandoPorDois($linha) 
{
    return $linha * 2;
}

//O array map retornará um novo array com cada linha multiplicada por 2
$arrayTransformado = array_map("multiplicandoPorDois", $array);

//Res.: Array (0, 2, 4, 6, 8, 10, 12, 14, 16, 18)
print_r($arrayTransformado);