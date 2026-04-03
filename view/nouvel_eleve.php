<?php
require_once(__DIR__.'/../models/pdo.php');
echo "<br>";
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
echo $nom;
echo "<br>";
echo $prenom;
echo "<br>";
$resultat = $dbPDO->prepare("INSERT INTO eleves(nom,prenom,Id_Classes) VALUES (:nom,:prenom,:Id_Classes)" );
$resultat->execute([
    'nom' => $nom,
    'prenom' => $prenom,
    'Id_Classes' => 1
]);
?>