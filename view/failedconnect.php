<!--
Auteur : Kevin Vaucher
Date : 27.03.2020
Description : Projet Rent A Snow ICT-151
Version : 1.0
-->


<?php
ob_start();
$title = "RentASnow - Erreur de connexion"; // Titre de la page
?>

<h2>Mauvais pseudo ou mot de passe, veuillez réessayer</h2>
<a href="index.php?action=connect">Retour à la page de connexion</a>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>
