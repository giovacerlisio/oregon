<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="mobile.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <title>oregon.it</title>
    <link rel="shortcut icon" href="logo.png" />
</head>
<body>







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

$sql = "SELECT * FROM dipendenti";

$rows = $conn->query($sql);
echo "<br>";
echo "<br>";
echo "<br>";

echo"<h1>DIPENDENTI</h1>";
while($row = $rows->fetch(PDO::FETCH_ASSOC)){
    echo "Matricola: ".$row['matricola']."</br>";
    echo "Nome: ".$row['nome']."</br>";
    echo "Cognome: ".$row['cognome']."</br>";
    echo "Ruolo: ".$row['ruolo']."</br>";
    echo "Stipendio: ".$row['stipendio']."</br>";
    echo "<br>";
}

?>