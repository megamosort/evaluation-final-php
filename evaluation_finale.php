<?php

$annuaire = ["Maxime"];
$annuaire[] = "rayonx";
$annuaire[] = "rayan";

$motDePasseAdmin= "Tyrolium2026";
$ageMinimum="18";

function afficherBadge($nom, $statut) {
    echo "Badge généré : " . $nom . " - Statut : " . $statut . "<br>";
}
if (isset($_POST['prenom'])){
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $motDePasse = $_POST['motDePasse'];
    $statut = $_POST['statut'];

    if ($age >= $ageMinimum && $motDePasse == $motDePasseAdmin) {
        $annuaire[] = $prenom;
        echo "Bienvenue, $prenom a été ajouté !</p>";
    }
    elseif ($age < $ageMinimum || $statut == "Stagiaire") {
        echo "Erreur : Accès non autorisé pour ce profil.</p>";
    }
    else {
        echo "Erreur : Mot de passe administrateur incorrect.</p>";
    }
}


?>

<!DOCTYPE html>
<body>
<form method="post" action="evaluation_finale.php">
    <input type="text" name="prenom" placeholder="Nom du pelo">
    <input type="number" name="age" placeholder="Age du tahane felhan">
    <input type="password" name="motDePasse" placeholder="ton mdp achik">
    <select name="statut">

        <option>"Stagiaire"</option>
        <option>"Employé"</option>

    </select>
    <button type="submit">Ajouter au répertoire</button>

</form>
<h3>Annuaire de l'entreprise</h3>
<?php
foreach ($annuaire as $employe) {
    afficherBadge($employe, "Employé");
}
for ($i = 0; $i <= 2; $i++) {
    echo "Emplacement bureau vide disponible<br>";
}
$chargement = 0;
while ($chargement < 2) {
    echo "Synchronisation de la base de données...<br>";
    $chargement++;
}
?>

</body>
