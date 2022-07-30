<html>
<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="style.css" type="text/css" rel="stylesheet">    
    <link href="form.css" type="text/css" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<header>
<body>

<div class="topnav">
        <a href="index.html"> 
            <img src="logo.png" width="35px">
        </a>
        <a href="inserisci.php">Inserisci</a>
        <a href="visualizza.php">Visualizza</a>
        </div>


<div class="container">
      <form method="POST" action="inserimento.php" autocomplete="on">

    		<div class="box">
          <label for="nome" class="fl fontLabel"> Nome: </label>
    			<div class="new iconBox">
          </div>
    			<div class="fr">
    					<input type="text" name="nome" placeholder="Nome"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>

        

    		<div class="box">
          <label for="cognome" class="fl fontLabel"> Cognome: </label>
    			<div class="new iconBox">
          </div>
    			<div class="fr">
    					<input type="text" name="cognome" placeholder="Cognome"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>

        

    		<div class="box">
          <label for="matricola" class="fl fontLabel"> Matricola: </label>
    			<div class="new iconBox">
          </div>
    			<div class="fr">
    					<input type="text" name="matricola" placeholder="Matricola"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>

        

    		<div class="box">
          <label for="ruolo" class="fl fontLabel"> Ruolo: </label>
    			<div class="new iconBox">
          </div>
    			<div class="fr">
    					<input type="text" name="ruolo" placeholder="Ruolo"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>

        

    		<div class="box">
          <label for="stipendio" class="fl fontLabel"> Stipendio RAL: </label>
    			<div class="new iconBox">
          </div>
    			<div class="fr">
    					<input type="text" name="stipendio" placeholder="Stipendio"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>



    		<div class="box">
          <label for="dnascita" class="fl fontLabel"> Data di nascita </label>
    			<div class="new iconBox">
          </div>
    			<div class="fr">
    					<input type="date" name="d_nascita" placeholder="Data"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>

        
        





    		<div class="box" style="background: #2d3e3f">
    				<input type="Submit" name="Submit" class="submit" value="INSERISCI">
    		</div>

      </form>
  </div>



</body>
</html>