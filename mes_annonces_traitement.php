<?php


// mes_annonces_traitement.php

function get_mes_annonces() {

    // session_start();

    require_once 'config.php';
    $nom_utilisateur = isset($_SESSION['nom_utilisateur']) ? $_SESSION['nom_utilisateur'] : '';

    $sql = "SELECT * FROM annonce WHERE nom_utilisateur = ?";
    $stmt = $link->prepare($sql);

    $stmt->bind_param("s", $nom_utilisateur);

    $stmt->execute();

    $result = $stmt->get_result();

    $stmt->close();

    $annonces = [];
    while ($row = $result->fetch_assoc()) {
        $annonces[] = $row;
    }

    return $annonces;
}
?>
