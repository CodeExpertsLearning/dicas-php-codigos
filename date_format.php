<?php
//Data
$data = '2019-06-29 13:40:00';
//Formato da Data antes da Formatação
$mascaraDataAtual = 'Y-m-d H:i:s';

//Formato da Data para Formatação
$mascaraDataParaFormatar = 'd/m/Y H:i:s';

//Iniciando formatação
$data = DateTime::createFromFormat($mascaraDataAtual, $data);

//Formatando data 
print $data->format($mascaraDataParaFormatar); 
//Res.: 29/06/2019 13:40:00