<?php
   include_once 'Pessoa.class.php';

//instancia de um objeto(uma pessoa)
    $pessoa1 = new Pessoa;
    $pessoa2 = new Pessoas;

    //atribuição de valores para o objeto 

    //var_dump($pessoa1)
$pessoa1->Nome = "Anna";
$pessoa1->Altura = 1.61;
$pessoa1->Peso = 55;

$pessoa2->Nome = "isa";
$pessoa2->Altura = 1.50;
$pessoa2->Peso = 50;


//chamando um metodo de classe
$pessoa1->MostrasDados();
$pessoa2->MostrasDados();

?>