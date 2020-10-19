<?php
require_once 'classes/Conexao.php' ;
require_once 'classes/Impressora.php' ;

$impressora = new Impressora();
$impressora->id = $_GET['id']; 
$impressora ->excluir();

header("Location: lista-impressora.php");

die();

?>