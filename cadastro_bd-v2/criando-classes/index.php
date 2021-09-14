<?php
require_once "classes/Pessoa.php";

$luiz = new Pessoa('Luiz', 32);
$joao = new Pessoa('João', 25);

$luiz->falar("Programação orientada a objetos");
$joao->comer('Churrasco');
$luiz->comer('Churrasco');
echo $luiz->get_ano_nascimento() . PHP_EOL;
echo $joao->get_ano_nascimento() . PHP_EOL;
