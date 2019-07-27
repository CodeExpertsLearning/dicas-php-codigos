<?php 
//Iniciando obj com a data do momento
$dataAtual = new DateTime("now");
//Obj DateInterval com periodo (P) de 1 mês (1M)
$period = new DateInterval('P1M');

//Adicionando o periodo de 1 mês a dataAtual
$dataAtual->add($period);
print $dataAtual->format('d/M/Y'); // Res.: 20/Aug/2019

//Obj DateInterval com periodo(P) de  2 meses(2M)
$period = new DateInterval('P2M');

//Subtraindo da data, que recebeu a adição de 1 mês
//na linha 7
$dataAtual->sub($period);
print $dataAtual->format('d/M/Y'); // Res.: 20/Jun/2019
