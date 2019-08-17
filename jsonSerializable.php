<?php

//Interface JsonSerializable do PHP
class Produto implements JsonSerializable
{
    public $nome; //Você pode usar atributos privados 
    public $preco; // com métodos getters e setters também
    
    //Interface pede a definição do método abaixo
    //onde retornamos o que queremos serializar na função json_encode
    public function jsonSerialize() 
    {
        return [
            'nome' => $this->nome,
            'preco' => $this->preco,
            'extra' => 'info-extra-exemplo'
        ];
    }
}


$produto = new Produto();
$produto->nome = 'Curso Symfony 4 na Prática';
$produto->preco = 97.00;

//O Json Encode chamará o método jsonSerialize 
//por conta da interface utilizada

print json_encode($produto); 
//Res.: {"nome":"Curso Symfony 4 na Prática","preco":97, 
//      "extra": "info-extra-exemplo"}