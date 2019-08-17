<?php
$url = 'https://codeexperts.com.br/curso/symfony-4-na-pratica-v2?c=DICAS_PHP';

$parseUrl = parse_url($url); //Parseando a url e pegando cada parte dela

//Posso acessar os pedaços de url parseados, como o path abaixo:
print $parseUrl['path']; // Res.: /curso/symfony-4-na-pratica-v2

//Ou cada um dos dados no array retornado pelo parse_url abaixo:
var_dump($parseUrl);

/*
 * Res.: 
 * array(4) {
 * 'scheme' =>
 *      string(5) "https"
 * 'host' =>
 *      string(18) "codeexperts.com.br"
 * 'path' =>
 *     string(30) "/curso/symfony-4-na-pratica-v2"
 * 'query' =>
 *     string(11) "c=DICAS_PHP"
 * } 
 */