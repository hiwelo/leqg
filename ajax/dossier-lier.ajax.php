<?php
    $dossier = (isset($_GET['dossier'])) ? $_GET['dossier'] : '';
    $evenement = (isset($_GET['evenement'])) ? $_GET['evenement'] : '';
    
    // On va tout d'abord ouvrir le dossier
    $dossier = new folder(md5($dossier));
    
    // On récupère les données en JSON
    $dossier_json = $dossier->json();
    
    // On ouvre l'événement
    $evenement = new evenement(md5($evenement));
    
    // On lie l'événement et le dossier
    $evenement->lier_dossier($dossier->get('dossier_id'));
    
    // On retourne les informations sur le dossier en JSON
    echo $dossier_json;
?>