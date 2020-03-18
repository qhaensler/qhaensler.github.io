<?php 

// On crée une varialbe vide
$annee = null;

// $_POST['annee'] : permet de récupérer la valeur envoyé par le formualire
// !empty test si la valeur n'est pas vide
if (!empty($_POST['annee'])) {
    echo 'Ton année de naissance est : ' . $_POST['annee'];
}

?>

<!-- 
    Action : Le fichier PHP qui traite les données du formulaire
    Method : POST (la plus courante) ou GET (qui rajoute les données à l'URL)
-->
<form action="" method="POST">

    <!-- Le champ pour rentrer sa date de naissance -->
    <label for="annee">Votre année de naissance ?</label>
    <input name="annee" type="text">

    <!-- Le bouton pour soumettre le formulaire -->
    <button type="submit">Envoyer</button>

</form>
