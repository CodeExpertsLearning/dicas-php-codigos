<?php
$nome = 'Code Experts';
$php  = PHP_VERSION;

//Este código
if(isset($nome) && isset($php)) {
    //...
}

//Pode virar este
if(isset($nome, $php)) {
    //...
    print 'Ok';
}