<?php
require_once 'classes/Conexao.php' ;
require_once 'classes/Produto.php' ;

$computador = new Produto();
$computador->id = $_GET['id']; 
$computador ->excluir();

header("Location: lista-produto.php");

die();

?>