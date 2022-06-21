<?php
require('classes/db.php');
require('classes/business/complaints.php');
require("classes/business/animals.php"); 
require("classes/business/foods.php"); 
require("classes/business/others.php"); 


class Fachada {

	public $db;
	private $complaints;
	private $animals;
	private $foods;
	private $others;
	

	public function __construct() {
		$this->complaints = new Complaints();
		$this->animals = new Animals();
		$this->foods = new Foods();
		$this->others = new Others();
		
		$this->db = new DB(array('metodo'=>1));
		$this->db->conectar();
	
	}
		


	public function retornarComplaints($id, $campo = 'id', $tabela = 'complaints', $ordenadoPor = '', $order = '', $limit = '') {
		$retorno = $this->complaints->retornar($id, $campo , $tabela, $ordenadoPor, $order, $limit);
					
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function inserirComplaints($objeto) {
		$retorno = $this->complaints->inserir($objeto);
				
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function editarComplaints($objeto,$campo = 'id') {
		$retorno = $this->complaints->editar($objeto,$campo);
				
		if($retorno) {
			return true;
		} else {
			return false;
		}
	}
	public function excluirComplaints($valor,$campo = 'id') {
		$retorno = $this->complaints->excluir($valor,$campo) ;

				
		if($retorno) {
				return true;
		} else {
			return false;
		}
	}


	public function retornarAnimals($id, $campo = 'id', $tabela = 'animals', $ordenadoPor = '', $order = '', $limit = '') {
		$retorno = $this->animals->retornar($id, $campo , $tabela, $ordenadoPor, $order, $limit);
					
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function inserirAnimals($objeto) {
		$retorno = $this->animals->inserir($objeto);
				
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function editarAnimals($objeto,$campo = 'id') {
		$retorno = $this->animals->editar($objeto,$campo);
				
		if($retorno) {
			return true;
		} else {
			return false;
		}
	}
	public function excluirAnimals($valor,$campo = 'id') {
		$retorno = $this->animals->excluir($valor,$campo) ;

				
		if($retorno) {
				return true;
		} else {
			return false;
		}
	}



	public function retornarFoods($id, $campo = 'id', $tabela = 'foods', $ordenadoPor = '', $order = '', $limit = '') {
		$retorno = $this->foods->retornar($id, $campo , $tabela, $ordenadoPor, $order, $limit);
					
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function inserirFoods($objeto) {
		$retorno = $this->foods->inserir($objeto);
				
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function editarFoods($objeto,$campo = 'id') {
		$retorno = $this->foods->editar($objeto,$campo);
				
		if($retorno) {
			return true;
		} else {
			return false;
		}
	}
	public function excluirFoods($valor,$campo = 'id') {
		$retorno = $this->foods->excluir($valor,$campo) ;

				
		if($retorno) {
				return true;
		} else {
			return false;
		}
	}


	public function retornarOthers($id, $campo = 'id', $tabela = 'others', $ordenadoPor = '', $order = '', $limit = '') {
		$retorno = $this->others->retornar($id, $campo , $tabela, $ordenadoPor, $order, $limit);
					
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function inserirOthers($objeto) {
		$retorno = $this->others->inserir($objeto);
				
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function editarOthers($objeto,$campo = 'id') {
		$retorno = $this->others->editar($objeto,$campo);
				
		if($retorno) {
			return true;
		} else {
			return false;
		}
	}
	public function excluirOthers($valor,$campo = 'id') {
		$retorno = $this->others->excluir($valor,$campo) ;

				
		if($retorno) {
				return true;
		} else {
			return false;
		}
	}

}
?>