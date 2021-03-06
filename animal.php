<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>Sistema de Registros de Reclamações de Saúde - Animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="index.php">Listagem</a>
                        <a class="nav-link" href="animal.php">Doenças Animais</a>
                        <a class="nav-link" href="food.php">Comida</a>
                        <a class="nav-link" href="other.php">Outros</a>
                        
                    </div>
                </div>



            </div>
        </nav>

        <div class='container'>
        <h1>Animal Complaint</h1>
    
    <form method="POST" action="animal_process.php" name="formQueixaAnimal">
      <p>Complaint Description: </p>
      <p><textarea rows="6" name="descricaoQueixa" cols="63"></textarea></p>
      <p>Observations:</p>
      <p><textarea rows="2" name="observacaoQueixa" cols="63"></textarea><br>
      </p>
      <h3>Complainer Data</h3>
      <p>Complainer name: <input type="text" name="nomeSolicitante" size="41"></p>
      <p>Address: <input type="text" name="ruaSolicitante" size="36">&nbsp;&nbsp;&nbsp;
      Complement: <input type="text" name="compSolicitante" size="46">&nbsp;</p>
      <p>Province: <input type="text" name="bairroSolicitante" size="20"> </p>
      <p>City: <input type="text" name="cidadeSolicitante" size="20">&nbsp;&nbsp;&nbsp; State:
      &nbsp;&nbsp;&nbsp; <input type="text" name="ufSolicitante" size="3">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ZIP Code: <input type="text" name="cepSolicitante" size="17"></p>
      <p>Phone number:&nbsp;&nbsp;&nbsp; <input type="text" name="telefoneSolicitante" size="18"></p>
      <p>E-mail: <input type="text" name="emailSolicitante" size="39"></p>
      <h3>Animal Data</h3>
      <p>Animal Race: <input type="text" name="nomeAnimal" size="32">&nbsp;&nbsp;&nbsp; Quantidade: <input type="text" name="qtdeAnimal" size="9">&nbsp; </p>
      <p>Event Date: <input type="text" name="diaIncomodo" size="2"> / <input type="text" name="mesIncomodo" size="2">&nbsp;/&nbsp;<input type="text" name="anoIncomodo" size="4">&nbsp;&nbsp;</p>
      <p>Event Address: <input type="text" name="ruaOcorrencia" size="36">&nbsp;&nbsp;&nbsp;
      Complement: <input type="text" name="compOcorrencia" size="42">&nbsp;&nbsp;&nbsp; </p>
      <p>Province: <input type="text" name="bairroOcorrencia" size="20"> </p>
      <p>City: <input type="text" name="cidadeOcorrencia" size="20">&nbsp;&nbsp;&nbsp; State:
      &nbsp;&nbsp;&nbsp; <input type="text" name="ufOcorrencia" size="3">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ZIP Code: <input type="text" name="cepOcorrencia" size="17"></p>
      <p>Phone number:&nbsp;&nbsp;&nbsp; <input type="text" name="telefoneOcorrencia" size="18"></p>
      <div align="center"><center><p><input type="button" value="Insert" name="bt1" onclick="javascript:submeterDados();"> <input type="reset" value="Clear" name="bt2"> </p>
      </center></div>
    </form>

    </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script language="javascript">

       function ehNumero( field ) 
       {
          for( var i = 0; i < field.length; i++ ) {
             c = field.charAt( i );
             if ( ( escape( c ) < "0" ) || ( escape( c ) > "9" ) ) {
                return false;
             }
          }
          return true;
       }
       
       function validarData(campoDiaData, campoMesData, campoAnoData) {
       var formDados = document.formGerarInfo;
        
       if (campoAnoData.value != "" && campoMesData.value != "" && campoDiaData.value != "") {
            
            if (validarAno(campoAnoData)) {
                
                if (validarMes(campoMesData)) {
                    
                    return validarDia(campoDiaData, campoMesData);   
                }
            }     
            return false;
        }
    
    }
    
    function validarDia(campoDia, campoMes) {
        
        var dia = campoDia.value;
        var mes = campoMes.value;
        var erro = false;
        
        if (dia.length > 0) {
            
            if (ehNumero(campoDia, "Dia") == false)
                return false;
            
            if ((mes == 1) || (mes == 3) || (mes == 5)
                    || (mes == 7) || (mes == 8)
                    || (mes == 10) || (mes == 12)) {
                
                erro = ((dia < 1) || (dia > 31));
            
            } else if ((mes == 4) || (mes == 6)
                    || (mes == 9) || (mes == 11)) {
                
                erro = ((dia < 1) || (dia > 30));
            
            } else
                
                erro = (( dia < 1 ) || ( dia > 29 )); // Fevereiro
            
            if (erro) {
                
                alert("Invalid day of the month");
                campoDia.focus();
                campoDia.select();
                return false;
            
            }
        
        } else {
            alert("Type the day");
            campoDia.focus();
            campoDia.select();
            return false;
        }
        
        return true;
    
    }
    
    
    function validarMes(campo) {
        
        var valor = campo.value;
        
        if (valor.length > 0) {
            
            if (ehNumero(campo, "M�s") == false)
                return false;
            
            if (valor < 1 || valor > 12) {
                
                alert("Invallid month");
                campo.focus();
                campo.select();
                return false;
            
            }
        
        } else {
            alert("Type the month");
            campoDia.focus();
            campoDia.select();
            return false;
        }
        
        return true;
    
    }
    
    
    function validarAno(campo) {
        
        var valor = campo.value;
        
        if (valor.length > 0) {
            
            if (ehNumero(campo, "Ano") == false)
                return false;
            
            if (valor < 1900) {
                
                alert("Invallid year");
                campo.focus();
                campo.select();
                return false;       
            }   
        }   
        return true;
    }
         
    
       function submeterDados(modulo) 
       {
                
          var f = document.formQueixaAnimal;
          
          if(f.descricaoQueixa.value == "")
          {
              alert("Type the description!");
            f.descricaoQueixa.select();
            f.descricaoQueixa.focus();
            return;
          
          }
          
          if(f.nomeAnimal.value == "")
          {
              alert("Type the animal name!");
            f.nomeAnimal.select();
            f.nomeAnimal.focus();
            return;
          
          }
                
          if(f.qtdeAnimal.value != "") {
             
             if(!ehNumero(f.qtdeAnimal.value)) {
                alert("The amount of animals must be a number!");
                f.qtdeAnimal.select();
                f.qtdeAnimal.focus();
                return;
             }
          }
          else {
               
             alert("Type the amount of animals!");
             f.qtdeAnimal.select();
             f.qtdeAnimal.focus();
             return;
          }
          
          
          
          if(f.diaIncomodo.value != "") {
             if(!ehNumero(f.diaIncomodo.value)) {
                alert("The date must contain only numbers!");
                f.diaIncomodo.select();
                f.diaIncomodo.focus();
                return;
             }
          }
          else {
             alert("Type the date's day!");
             f.diaIncomodo.select();
             f.diaIncomodo.focus();
             return;
          }
          
          if(f.mesIncomodo.value != "") {
             if(!ehNumero(f.mesIncomodo.value)) {
                alert("The date must contain only numbers!");
                f.mesIncomodo.select();
                f.mesIncomodo.focus();
                return;
             }
          }
          else {
             alert("Type the date's month!");
             f.mesIncomodo.select();
             f.mesIncomodo.focus();
             return;
          }
          
          if(f.anoIncomodo.value != "") {
             if(!ehNumero(f.anoIncomodo.value)) {
                alert("The date must contain only numbers!");
                f.anoIncomodo.select();
                f.anoIncomodo.focus();
                return;
             }
          }
          else {
             alert("Type the date's year!");
             f.anoIncomodo.select();
             f.anoIncomodo.focus();
             return;
          }
          
          if (!validarData(f.diaIncomodo,f.mesIncomodo,f.anoIncomodo)) 
          {
               return;
          }
          
          f.submit();
    
       }

    </script>
    </body>
</html>    