<?php

class Others extends DB {

	private $tabela = 'others';
	private $id_complaints;
	private $school_level;
	
	private $age;
	private $ocuppation;
	private $address;
	private $province;
	private $complement;
	private $closest_city;
	private $state;

	private $zip_code;
	private $telephone;
	
	public function __construct($id_complaints="",$school_level="",$age="",$ocuppation="",$address="",$province="",$complement="",$closest_city="",$state="",$zip_code="",$telephone="") {
		$this->id_complaints = $id_complaints;
		$this->school_level = $school_level;		
		$this->age = $age;
		$this->ocuppation = $ocuppation;
		$this->address = $address;
		$this->province = $province;
		$this->complement = $complement;
		$this->closest_city = $closest_city;
		$this->state = $state;
		$this->zip_code = $zip_code;
		$this->telephone = $telephone;
	}
	

	public function retornar($id, $campo = 'id', $tabela = 'others', $ordenadoPor = '', $order = '', $limit = '') {
		return parent::retornar($id, $campo, $tabela, $ordenadoPor, $order, $limit);
	}

	public function inserir($objeto, $tabela = 'others') {
		return parent::inserir($objeto, $tabela);
	}

	public function editar($objeto, $campo = 'id', $tabela = 'others') {
		return parent::editar($objeto, $campo, $tabela);
	}

	public function excluir($valor, $campo = 'id', $tabela = 'others'){
		return parent::excluir($valor, $campo, $tabela);
	}

}
?>