<?php

class DB {
	
	public $db;
	public $ultimoId;
	
	public function conectar(){	
		if (!$this->db instanceof PDO){		
			$this->db = new PDO("mysql:host=127.0.0.1;dbname=residencia", 'root', '');			
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     			
		}	
	}
	


/**
 *
 * @Insere um objeto refletido em sua respectiva tabela
 *
 * @acces public
 *
 * @param array $values
 *
 * @retorna int o ultimo Id inserido no success ou false na falha
 *
 */
	public function inserir($values, $tabela)
    {		
		self::conectar();
		
		$fieldnames = array_keys($values[0]);
		
		$sql = "INSERT INTO " .$tabela ;
		
		$fields = '( ' . implode(' ,', $fieldnames) . ' )';
		
		$bound = '(:' . implode(', :', $fieldnames) . ' )';
		
		$sql .= $fields.' VALUES '.$bound;
		
		$stmt = $this->db->prepare($sql);
		
		foreach($values as $vals)
		{	
		   $retorno = $stmt->execute($vals);			
		}
		
		if ($retorno){
			if ($this->db->lastInsertId()){	
				return  $this->db->lastInsertId();
			} else {
				return true;	
			}
		} else {
			return false;	
		}			
	}

	public function editar($objeto, $campo, $tabela)
    {
		self::conectar();		
		foreach($objeto[0] as $chave=>$value)
		{			
			if ($chave == $campo){
				$id = $value;
			} else {				
				$sql = "UPDATE `$tabela` SET `$chave`='" .  $value . "' WHERE `".$campo."` = $id";			
				$stmt = $this->db->prepare($sql);
				$retorno = @$stmt->execute();
			}
		}	
		if ($retorno){
			return true;
		} else {
			return false;	
		}					
	}
	public function retornar($id, $campo, $tabela, $ordernadoPor, $ordem, $limit) {
		self::conectar();
		
		if ($id != ''){
			$select    = "SELECT * FROM " . $tabela . " WHERE $campo = '$id'";		
			if ($ordernadoPor && $ordem){
				$select = $select . " ORDER BY " . $ordernadoPor . " " . $ordem;				
			}	
			if ($limit){
				$select = $select . " LIMIT " . $limit;				
			}	
			//echo $select;
			$statement = $this->db->prepare($select);					
		
		} else {			
			$select    = "SELECT * FROM " . $tabela . " ";			
			if ($ordernadoPor && $ordem){
				$select = $select . "ORDER BY " . $ordernadoPor . " " . $ordem;				
			}						
			if ($limit){
				$select = $select . " LIMIT " . $limit;				
			}					
			$statement = $this->db->prepare($select);			
		}
		
        //echo $select;
        $statement->execute();
	
		if ($statement->rowCount() == 1) {
        	$result = $statement->fetch(PDO::FETCH_OBJ);
		} else {
			$result = $statement->fetchAll(PDO::FETCH_OBJ);
		}
		//echo $statement->rowCount() ;
        return ($result);
	}

	public function excluir($id, $campo, $tabela) {		
		self::conectar();
        $sql    = "DELETE FROM " . $tabela . " WHERE `$campo` = $id";
        
        //echo $sql . '<br><br>';
        $statement = $this->db->prepare($sql);
        //$statement->bindParam(':id', $id, PDO::PARAM_INT);
        if ( @$statement->execute() ){ return true; } else { return false;}
	}

	
}
?>
