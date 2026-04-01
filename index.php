<?php
#Partie 2
require_once(__DIR__.'/models/pdo.php');

$resultat = $dbPDO->prepare("SELECT * FROM eleves");
$resultat ->execute();
$eleves = $resultat->fetchAll();
echo "<br>";
echo "Eleves:";
foreach($eleves as $eleve) {
   echo "<br>";
   echo $eleve["nom"]." ".$eleve["prenom"];
}
echo "<br>";

$resultat = $dbPDO->prepare("SELECT * FROM classes");
$resultat ->execute();
$classes = $resultat->fetchAll();
echo "<br>";
echo "Classes:";
foreach($classes as $classe) {
   echo "<br>";
   echo $classe["nom"];
}
echo "<br>";

$resultat = $dbPDO->prepare("SELECT * FROM prof");
$resultat ->execute();
$profs = $resultat->fetchAll();
echo "<br>";
echo "Profs:";
foreach($profs as $prof) {
   echo "<br>";
   echo $prof["nom"]." ".$prof["prenom"];
}
echo "<br>";
?>

<?php
#Partie 3
$resultat = $dbPDO->prepare("INSERT INTO matières(nom,Id_Prof) VALUES (:nom,:Id)" );
$resultat ->execute([
	'nom' => "NSI",
	'Id' => "1",
]);
?>

