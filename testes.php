<?php 
require('classes/fachada.php');
$fachada   = new Fachada();   

$objeto = array(
                array('description'=>'teste' , 
                    'observations'=>'a' ,
                    'complainer_name'=>'a' ,
                    'address'=>'a' ,
                    'complement'=>'a' , 
                    'province'=>'a' ,
                    'city'=>'a',
                    'state'=>'a' ,
                    'zip_code'=>'a', 
                    'phone'=>'a' ,
                    'email'=>'a')
          );

$ultimoInserido = $fachada->inserirComplaints($objeto);
echo $ultimoInserido;
?>
