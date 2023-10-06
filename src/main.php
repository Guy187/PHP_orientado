<?php

include_once __DIR__ . "/../vendor/autoload.php";



use App\model\Pessoa;

use App\model\Nootbook;

$n = new Nootbook ("lenovo, preto");
$p = new Pessoa ("huginho");

echo $p->nome;


echo $n->marca;