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
        <h1>Food Complaint</h1>
    
    <form method="POST" action="#" name="formQueixaAlimentar">
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
      <h3>Victim information</h3>
      <p>Name: <input type="text" name="nomeVitima" size="44"></p>
      <p>Address: <input type="text" name="ruaVitima" size="36">&nbsp;&nbsp;&nbsp; Complement:
      <input type="text" name="compVitima" size="47">&nbsp;&nbsp;&nbsp; </p>
      <p>Province: <input type="text" name="bairroVitima" size="20"> </p>
      <p>Closest city: <input type="text" name="cidadeVitima" size="20">&nbsp;&nbsp;&nbsp; State:
      &nbsp;&nbsp;&nbsp; <input type="text" name="ufVitima" size="3">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ZIP code: <input type="text" name="cepVitima" size="17"></p>
      <p>Telephone&nbsp;&nbsp;&nbsp; <input type="text" name="telefoneVitima" size="18"></p>
      <h3>Event information</h3>
      <p>Amount of people that ate the meal: <input type="text" name="qtdeComensais" size="4">
      &nbsp;&nbsp;&nbsp; Amount of sick people: <input type="text" name="qtdeDoentes" size="4"></p>
      <p>Amount of people checked into a hospital: <input type="text" name="qtdeInternacoes" size="4">
      &nbsp;&nbsp;&nbsp; Amount of death: <input type="text" name="qtdeObitos" size="4"></p>
      <p>Place of medical care: <input type="text" name="localAtendimento" size="9">&nbsp;&nbsp;&nbsp;
      Suspicious meal: <input type="text" name="refeicaoSuspeita" size="20"></p>
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
    
       function submeterDados(modulo) 
       {
                
          var f = document.formQueixaAlimentar;
                
          if(f.descricaoQueixa.value == "")
          {
              alert("Type the description!");
            f.descricaoQueixa.select();
            f.descricaoQueixa.focus();
            return;
          
          }
          
                
          if(f.qtdeComensais.value != "") {
             
             if(!ehNumero(f.qtdeComensais.value)) {
                alert("The amount of people that ate the meal must be a number!");
                f.qtdeComensais.select();
                f.qtdeComensais.focus();
                return;
             }
          }
          else {
               
             alert("Type the amount of people that ate the meal!");
             f.qtdeComensais.select();
             f.qtdeComensais.focus();
             return;
          }
          
          
          
          if(f.qtdeDoentes.value != "") {
             if(!ehNumero(f.qtdeDoentes.value)) {
                alert("The amount of sick people must be a number!");
                f.qtdeDoentes.select();
                f.qtdeDoentes.focus();
                return;
             }
          }
          else {
             alert("Type the amount of sick people!");
             f.qtdeDoentes.select();
             f.qtdeDoentes.focus();
             return;
          }
          
          if(f.qtdeInternacoes.value != "") {
             if(!ehNumero(f.qtdeInternacoes.value)) {
                alert("The amount of Amount of people checked into a hospital must be a number!");
                f.qtdeInternacoes.select();
                f.qtdeInternacoes.focus();
                return;
             }
          }
          else {
             alert("Type the amount of people checked into a hospital!");
             f.qtdeInternacoes.select();
             f.qtdeInternacoes.focus();
             return;
          }
          
          if(f.qtdeObitos.value != "") {
             if(!ehNumero(f.qtdeObitos.value)) {
                alert("The amount of deaths must be a number!");
                f.qtdeObitos.select();
                f.qtdeObitos.focus();
                return;
             }
          }
          else {
             alert("Type the amount of deaths!");
             f.qtdeObitos.select();
             f.qtdeObitos.focus();
             return;
          }
          f.submit();
    
       }

    </script>
    </body>
</html>  