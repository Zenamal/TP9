<?php
#Partie 2
require_once(__DIR__.'/models/pdo.php');

$resultat = $dbPDO->prepare("SELECT * FROM eleves");
$resultat ->execute();
$eleves = $resultat->fetchAll();
echo "<br>";
echo "<strong> Eleves </strong>";
foreach($eleves as $eleve) {
   echo "<br>";
   echo $eleve["nom"]." ".$eleve["prenom"];
   echo <a href='./views/modif_etudiant.php?id=".$re['Id_eleve']."'>pour modifier cet eleve</a>
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
echo "Professeurs:";
foreach($profs as $prof) {
   echo "<br>";
   echo $prof["nom"]." ".$prof["prenom"];
}
echo "<br>";
?>

<?php
#Partie 3
// $resultat = $dbPDO->prepare("INSERT INTO matières(nom,Id_Prof) VALUES (:nom,:Id)" );
// $resultat ->execute([
// 	'nom' => "NSI",
// 	'Id' => "1",
// ]);
echo "<br>";
?>

<form action="view/nouvelle_matiere.php" method="post">
   <label for="matière">Créer une nouvelle matière :</label>
   <br>
   <input name="matière" id="matière" type="text">
   <br>
   <button type="submit">Valider</button>
</form>

<form action="view/nouvel_eleve.php" method="post">
   <label for="nom">Nom :</label>
   <br>
   <input name="nom" id="nom" type="text">
   <br>
   <label for="prenom">Prénom :</label>
   <br>
   <input name="prenom" id="prenom" type="text">
   <br>
   <button type="submit">Valider</button>
</form>

<?php
#Partie 4
// $resultat = $dbPDO->prepare("UPDATE eleves SET prenom = :nouveauprenom, nom = :nouveaunom WHERE prenom = :ancienprenom;");
// $resultat ->execute([
//    'nouveauprenom' = "Stuart",
//    'nouveaunom' = "Bob",
//    'ancienprenom' = "Kevin",
// ]);
?>
<?php
$nom = htmlspecialchars(trim($_POST['nom']));
$prenom = htmlspecialchars(trim($_POST['prenom']));
$id = intval(htmlspecialchars(trim($_POST['id'])));
$res = $dbPDO->prepare("UPDATE eleves SET nom=:nom,prenom=:prenom WHERE Id_eleve = $id");
$res ->execute([
   'nom' => $nom,
   'prenom' => $prenom,
]);
echo "modification reussie";
?>

<?php
#Partie 5
$resultat = $dbPDO->prepare("DELETE FROM eleves WHERE name=:nom" );
$req = $resultat ->execute([
	'nom' => "Bernard"
]);
?>