
<?php
require_once(__DIR__.'view/../models/pdo.php');
echo "<br>";
$nom = $_POST['matière'];
echo $nom;
$resultat = $dbPDO->prepare("INSERT INTO matières(nom,Id_Prof) VALUES (:nom,:Id)" );
$resultat ->execute([
 	'nom' => $nom,
    'Id' => "2"
   ]);
?>