<?php
require_once "Produto.php";
require_once "Carrinho.php";

$maca = new Produto("Maçã", 29.99);
$xuxu = new Produto("xuxu", 49.99);
$hotwheels = new Produto("Hot Wheels",8);

$carrinho = new  Carrinho($maca);
$carrinho->addProduto($xuxu);
$carrinho->addProduto($hotwheels);
$carrinho->listarProdutos();