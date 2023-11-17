<?php

include_once __DIR__ . "/../vendor/autoload.php";



use App\model\Pessoa;

use App\model\Nootbook;

$n = new Nootbook("acer");
$p = new Pessoa("joão");

echo "Usuario";
echo $p->nome;

echo "<br>";


echo $n->marca;