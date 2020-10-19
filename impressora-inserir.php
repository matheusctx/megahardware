<?php

require_once 'classes/Impressora.php';
require_once 'classes/Conexao.php';

?>

<?php
$impressora = new Impressora();
$modelo=$_POST['campo_modelo'];
$fabricante=$_POST['campo_fabricante'];
$valor=$_POST['campo_valor'];
$cor=$_POST['campo_cor'];
$tipo=$_POST['campo_tipo'];
$processo_impressao=$_POST['campo_impressao'];



if(!empty($modelo) && !empty($fabricante) && !empty($valor) && !empty($cor) && !empty($tipo) && !empty($processo_impressao)){
	
$impressora->modelo=$modelo;
$impressora->fabricante=$fabricante;
$impressora->valor=$valor;
$impressora->cor=$cor;
$impressora->tipo=$tipo;
$impressora->processo_impressao=$processo_impressao;
$impressora->inserir();

header("Location:impressora-formulario.php?salvo=1");
	
} else { 
	
header("Location:impressora-formulario.php?salvo=0");
	
} 

?>