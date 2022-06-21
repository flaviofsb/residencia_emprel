<?php

class Foods extends DB {

	private $tabela = 'foods';
	private $id_complaints;
	private $name;
	
	private $address;
	private $province;
	private $complement;
	private $closest_city;
	private $state;

	private $zip_code;
	private $telephone;
	
	public function __construct($id_complaints="",$name="",$address="",$province="",$complement="",$closest_city="",$state="",$zip_code="",$telephone="") {
		$this->id_complaints = $id_complaints;
		$this->name = $name;		
		
		$this->address = $address;
		$this->province = $province;
		$this->complement = $complement;
		$this->closest_city = $closest_city;
		$this->state = $state;
		$this->zip_code = $zip_code;
		$this->telephone = $telephone;
	}

	public function retornar($id, $campo = 'id', $tabela = 'foods', $ordenadoPor = '', $order = '', $limit = '') {
		return parent::retornar($id, $campo, $tabela, $ordenadoPor, $order, $limit);
	}

	public function inserir($objeto, $tabela = 'foods') {
		return parent::inserir($objeto, $tabela);
	}

	public function editar($objeto, $campo = 'id', $tabela = 'foods') {
		return parent::editar($objeto, $campo, $tabela);
	}

	public function excluir($valor, $campo = 'id', $tabela = 'foods'){
		return parent::excluir($valor, $campo, $tabela);
	}

}
?>