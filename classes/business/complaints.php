<?php
class Complaints extends DB {

	private $tabela = 'complaints';
	private $id;
	private $description;	
	private $observations;
	private $complainer_name;	
	private $address;
	private $complement;
	private $province;
	private $city;
	private $state;
	private $phone;
	private $zip_code;
	private $email;

	public function __construct($id="",$description="",$observations="",$complainer_name="",$phone="",$state="", $city="",$address="",$complement="",$province="",$zip_code="",$email="") {
		$this->id = $id;
		$this->description = $description;		
		$this->observations = $observations;
		$this->complainer_name = $complainer_name;
		$this->phone = $phone;
		$this->state = $state;
		$this->city = $city;
		$this->address = $address;
		$this->complement = $complement;
		$this->province = $province;
		$this->zip_code = $zip_code;
		$this->email = $email;
	}

	public function retornar($id, $campo = 'id', $tabela = 'complaints', $ordenadoPor = '', $order = '', $limit = '') {
		return parent::retornar($id, $campo, $tabela, $ordenadoPor, $order, $limit);
	}

	public function inserir($objeto, $tabela = 'complaints') {
		return parent::inserir($objeto, $tabela);
	}

	public function editar($objeto, $campo = 'id', $tabela = 'complaints') {
		return parent::editar($objeto, $campo, $tabela);
	}

	public function excluir($valor, $campo = 'id', $tabela = 'complaints'){
		return parent::excluir($valor, $campo, $tabela);
	}

}
?>