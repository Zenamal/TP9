<?php
require_once(__DIR__.'view/../models/pdo.php');
echo "<br>";
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
echo $nom;
echo "<br>";
echo $prenom;
echo "<br>";
$resultat = $dbPDO->prepare("INSERT INTO eleves(nom,prenom,Id_Classes) VALUES (:nom,:prenom,:Id)" );
$resultat ->execute([
 	'nom' => $nom,
    'prenom' => $prenom,
    'Id' => 1,
   ]);
?>