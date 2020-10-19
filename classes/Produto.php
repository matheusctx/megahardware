<?php

require_once'classes/Conexao.php';

class Produto {

public $id;
public $modelo;
public $fabricante;
public $valor;
public $memoria;
public $processador;
public $armazenamento;
public $sistema;
public $tela;



	 public function listar()
	{
			$query = "SELECT * FROM produto";
			$conexao = Conexao::pegarConexao();
			$resultado = $conexao->query($query);
			$lista = $resultado->fetchAll();
			return $lista;
	}
		
	public function inserir()
	{
		$query = "INSERT INTO produto (modelo,fabricante,valor,memoria,processador,armazenamento,sistema,tela) values('".$this->modelo."','".$this->fabricante."','".$this->valor."','".$this->memoria."','".$this->processador."','".$this->armazenamento."','".$this->sistema."','".$this->tela."')";
		$conexao = Conexao::pegarConexao();
		$conexao->exec($query);
			
	}
		
	public function atualizar()
	{
		$query ="UPDATE produto SET modelo='".$this->modelo."',fabricante='".$this->fabricante."',valor='".$this->valor."',memoria='".$this->memoria."',processador='".$this->processador."',armazenamento='".$this->armazenamento."',sistema='".$this->sistema."',tela='".$this->tela."' WHERE id='".$this->id."' ";
		$conexao = Conexao::pegarConexao();
		$conexao->exec($query);
	}
		
	public function excluir()
	{
			
		$query = "delete from produto where id ='".$this->id."' ";
		$conexao = Conexao::pegarConexao();
		$conexao->exec($query); 
			
	}
	
	public function pesquisa($modelo){
				
			$query = "SELECT * FROM produto WHERE modelo LIKE '{$modelo}%' ";
			$conexao = Conexao::pegarConexao();
			$resultado = $conexao->query($query);
			$lista = $resultado->fetchAll();
			return $lista;
		
		
	}
	
	public function quantidade($modelo){
				
			$query = "SELECT COUNT(id) FROM produto WHERE modelo LIKE '{$modelo}%' ";
			$conexao = Conexao::pegarConexao();
			$resultado = $conexao->query($query);
			$lista = $resultado->fetch();
			return $lista;
		
		
	}





}




?>