<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="inserimento.css" rel="stylesheet" type="text/css">
    <link href="mobile.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <title>oregon.it</title>
    <link rel="shortcut icon" href="logo.png" />
</head>
<body>



<div class="testoo">
    <h1>INSERIMENTO EFFETTUATO</h1>
</div>



    <div class="topnav">
        <a href="index.html"> 
            <img src="logo.png" width="35px">
        </a>
        <a href="inserisci.php">Inserisci</a>
        <a href="visualizza.php">Visualizza</a>
        </div>


</body>
</html>

<?php

include 'connessionedb.php';

echo "<br>";

$sql = "INSERT INTO dipendenti (`nome`, `cognome`, `matricola`, `ruolo`, `stipendio`, `dataNascita`) 
        VALUES ('".$_POST["nome"]."', '".$_POST["cognome"]."', '".$_POST["matricola"]."', '".$_POST["ruolo"]."','".$_POST["stipendio"]."', '".$_POST["d_nascita"]."')";


$conn->exec($sql);

?>
