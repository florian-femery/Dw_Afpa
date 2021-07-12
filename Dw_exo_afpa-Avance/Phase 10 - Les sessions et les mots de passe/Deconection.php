<?php
    session_start();
    session_destroy();
    header("location:Formulaire.php");
?>