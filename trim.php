<?php
//Trim remove espaços de ambos os lados de uma string
//Você sabia do segundo parâmetro? Vamos conhecer!
$string = '%testestring%';

//Segundo parâmetro do trim é uma lista dos caracteres
//que você quer remover da string, ao invés do espaço:

$trimStr      = trim($string, '%'); //remove o % de ambos os lados
$leftTrimStr  = ltrim($string, '%'); //remove do lado esquerdo
$rightTrimStr = rtrim($string, '%'); //remove do lado direito

//Veja o resultado:
print $trimStr; //res.: testestring
print $leftTrimStr; //res.: testestring%
print $rightTrimStr; //res.: %testestring