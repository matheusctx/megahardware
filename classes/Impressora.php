<?php

require_once'classes/Conexao.php';

class Impressora {

public $id;
public $modelo;
public $fabricante;
public $valor;
public $cor;
public $tipo;
public $processo_impressao;



	 public function listar()
	{
			$query = "SELECT * FROM impressora";
			$conexao = Conexao::pegarConexao();
			$resultado = $conexao->query($query);
			$lista = $resultado->fetchAll();
			return $lista;
	}
		
	public function inserir()
	{
		$query = "INSERT INTO impressora (modelo,fabricante,valor,cor,tipo,processo_impressao) values('".$this->modelo."','".$this->fabricante."','".$this->valor."','".$this->cor."','".$this->tipo."','".$this->processo_impressao."')";
		$conexao = Conexao::pegarConexao();
		$conexao->exec($query);
			
	}
		
	public function atualizar()
	{
		$query ="UPDATE impressora SET modelo='".$this->modelo."',fabricante='".$this->fabricante."',valor='".$this->valor."',cor='".$this->cor."',tipo='".$this->tipo."',processo_impressao='".$this->processo_impressao."' WHERE id='".$this->id."' ";
		$conexao = Conexao::pegarConexao();
		$conexao->exec($query);
	}
		
	public function excluir()
	{
			
		$query = "delete from impressora where id ='".$this->id."' ";
		$conexao = Conexao::pegarConexao();
		$conexao->exec($query); 
			
	}
	
	public function pesquisa($modelo){
				
			$query = "SELECT * FROM impressora WHERE modelo LIKE '{$modelo}%' ";
			$conexao = Conexao::pegarConexao();
			$resultado = $conexao->query($query);
			$lista = $resultado->fetchAll();
			return $lista;
		
		
	}
	
	public function quantidade($modelo){
				
			$query = "SELECT COUNT(id) FROM impressora WHERE modelo LIKE '{$modelo}%' ";
			$conexao = Conexao::pegarConexao();
			$resultado = $conexao->query($query);
			$lista = $resultado->fetchAll();
			return $lista;
		
		
	}





}




?>