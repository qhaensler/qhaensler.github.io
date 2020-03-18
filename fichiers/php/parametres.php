
<?php 

if( !empty( $_GET['prenom'] )) {
    echo '<p>Bonjour ' . $_GET['prenom'] . ' !</p>'; 
}
else {
    echo '<p>Il faut rajouter ?prenom=Quentin dans l\'URL pour que ça fonctionne';
}