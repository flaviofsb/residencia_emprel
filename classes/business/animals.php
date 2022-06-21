<?php

class Animals extends DB {

	private $tabela = 'animals';
	private $id_complaints;
	private $race;
	
	private $quantity;
	private $data;
	private $address;
	private $province;
	private $complement;
	private $closest_city;
	private $state;

	private $zip_code;
	private $telephone;
	
	public function __construct($id_complaints="",$race="",$quantity="",$data="",$address="",$province="",$complement="",$closest_city="",$state="",$zip_code="",$telephone="") {
		$this->id_complaints = $id_complaints;
		$this->race = $race;		
		$this->quantity = $quantity;
		$this->data = $data;
		$this->address = $address;
		$this->province = $province;
		$this->complement = $complement;
		$this->closest_city = $closest_city;
		$this->state = $state;
		$this->zip_code = $zip_code;
		$this->telephone = $telephone;
	}

	public function retornar($id, $campo = 'id', $tabela = 'animals', $ordenadoPor = '', $order = '', $limit = '') {
		return parent::retornar($id, $campo, $tabela, $ordenadoPor, $order, $limit);
	}

	public function inserir($objeto, $tabela = 'animals') {
		return parent::inserir($objeto, $tabela);
	}

	public function editar($objeto, $campo = 'id', $tabela = 'animals') {
		return parent::editar($objeto, $campo, $tabela);
	}

	public function excluir($valor, $campo = 'id', $tabela = 'animals'){
		return parent::excluir($valor, $campo, $tabela);
	}

}
?>