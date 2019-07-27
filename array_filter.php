<?php 
$array = ['nome' => 'PHP', 'versao' => 7.3, 'modo' => null];

//filtra e retorna o array removendo as chave com valores nulo
$array = array_filter($array);

print_r($array); // Res.: ['nome' => 'PHP', 'versao' => 7.3]

$array = [
    ['nome' => 'João', 'idade' => 28],
    ['nome' => 'João', 'idade' => 18],
];

//Usando callback para filtragem
$array = array_filter($array, function($linha){
    return $linha['idade'] >= 28; 
});

print_r($array); //Res.: [['nome' => 'João', 'idade' => 28]]