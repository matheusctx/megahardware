<?php

require_once 'classes/Produto.php';
require_once 'classes/Conexao.php';

?>

<?php
$produto = new Produto();
$modelo=$_POST['campo_modelo'];
$fabricante=$_POST['campo_fabricante'];
$valor=$_POST['campo_valor'];
$memoria=$_POST['campo_memoria'];
$processador=$_POST['campo_processador'];
$armazenamento=$_POST['campo_armazenamento'];
$sistema=$_POST['campo_sistema'];
$tela=$_POST['campo_tela'];


if(!empty($modelo) && !empty($fabricante) && !empty($valor) && !empty($memoria) && !empty($processador) && !empty($armazenamento)&&!empty($sistema) &&!empty($tela) ){
	
$produto->modelo=$modelo;
$produto->fabricante=$fabricante;
$produto->valor=$valor;
$produto->memoria=$memoria;
$produto->processador=$processador;
$produto->armazenamento=$armazenamento;
$produto->sistema=$sistema;
$produto->tela=$tela;
$produto->inserir();

header("Location:computador-formulario.php?salvo=1");
	
} else { 
	
header("Location:computador-formulario.php?salvo=0");
	
} 

?>