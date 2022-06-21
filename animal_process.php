<?php 
require('classes/fachada.php');
$fachada   = new Fachada();   


extract($_POST);

//var_dump($_POST);

$objeto = array(
                array('description'=>$descricaoQueixa , 
                    'observations'=>$observacaoQueixa ,
                    'complainer_name'=>$nomeSolicitante ,
                    'address'=>$ruaSolicitante ,
                    'complement'=>$compSolicitante , 
                    'province'=>$bairroSolicitante ,
                    'city'=>$cidadeSolicitante,
                    'state'=>$ufSolicitante ,
                    'zip_code'=>$cepSolicitante, 
                    'phone'=>$telefoneSolicitante ,
                    'email'=>$emailSolicitante)
          );

$ultimoInserido = $fachada->inserirComplaints($objeto);
if ($ultimoInserido) {
    
    $objetoAnimal = array(
        array('id_complaints'=>$ultimoInserido, 
            'race'=>$nomeAnimal,
            'quantity'=>$qtdeAnimal,
            'address'=>$ruaSolicitante,
            'data'=>"2022-01-01", 
            'address'=>$ruaOcorrencia,
            'province'=>$bairroOcorrencia,
            'complement'=>$compOcorrencia,
            'closest_city'=>$cidadeOcorrencia, 
            'state'=>$ufOcorrencia,
            'zip_code'=>$cepOcorrencia,
            'telephone'=>$telefoneOcorrencia ));

            $insercao = $fachada->inserirAnimals($objetoAnimal);

            if ($insercao){

                echo "Inserir com sucesso." ;
            } else {
                echo "Não foi possivel Inserir" ;
            }
  


} else {
    echo "Não foi possivel Inserir" ;
}
?>
