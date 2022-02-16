<?php
 session_start();
 session_unset();  // Détruit toutes les variables d'une session
 session_destroy();  //détruit toutes les données associées à la session courante.
 header("location:indexs.php");
?>