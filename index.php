<?php

require_once "src/Classes/Produto.php";
require_once "src/Classes/Cliente.php";


$prod1 = new Produto;
$prod1 ->titulo = "Fanta";
$prod1 ->descrição = "Refrigerante 350ml";
$prod1 ->preco = 3.50;

$prod2 = new Produto;
$prod2 ->titulo = "Doritos";
$prod2 ->descrição = "Salgadinho";
$prod2 ->preco = 13.00;

var_dump($prod1);
echo "<br>";
var_dump($prod2);
echo "<br>";

$cli = new Cliente;
$cli ->nome "Debora";
$cli ->idade = 17;
$cli ->endereco = "Rua A, 132";
$cli ->telefone = "(41)XXXXX-XXXX";
$cli ->comprar();
echo "<br>";

$nomeClasse = "Produto";
$instancia = new $nomeClasse;
var_dump($instancia);
echo "<br>";

$cli2 = new $cli;
$nomeClasse2 = get_Class($cli);
$cli3 = new $nomeClasse2;
$cli3 ->nome = "LadyBug";
var_dump($cli);
echo "<br>";
var_dump($cli2);
echo "<br>";
var_dump($cli3);
echo "<br>";
