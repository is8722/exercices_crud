<?php
try{
	// On se connecte à MySQL
	$conn = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice 2</title>
 
</head>
<body>
    <h1>Exercices CRUD 2</h1>

    <h2>Création d'un formulaire pour ajouter un client et une carte de fidélité dans la DB</h2>



    
</body>
</html>