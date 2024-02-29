<?php 
// header('Content-type:application/json');
require "vendor/autoload.php";

use app\Produto;


$camiseta = new Produto(); 
$camiseta->nome='polo'; 
$camiseta->id = 001 ; 
$camiseta->preco = 50;
$camiseta->aumentaEstoque(110);
$camiseta->aumentaPreco(100);
echo "Preço: R$".$camiseta->preco;
// echo "\n".$camiseta->estoque;

echo "\nEstoque Disponivel:".$camiseta->getEstoque();
$camiseta->setEstoque(5500);
// $camiseta->aumentaEstoque(5);
echo "\nEstoque Atual:".$camiseta->getEstoque();
$camiseta->aumentaPreco(10);
echo "\nPreço: R$".$camiseta->preco;
