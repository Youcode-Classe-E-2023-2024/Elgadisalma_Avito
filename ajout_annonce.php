<?php
require_once 'config.php';

$nom_err = ''; 

if (isset($_POST['submit'])) {
    $nom_utilisateur = $_POST['userName'];
    $numero_tel = $_POST['phoneNumber'];
    $titre_annonce = $_POST['annoceTitre'];
    $description_annonce = $_POST['annoceDescription'];
    $date_ajout = $_POST['dateAjout'];

    $sql_check_user = "SELECT id FROM annonce WHERE nom_utilisateur = '$nom_utilisateur'";
    $result_check_user = $link->query($sql_check_user);

    if ($result_check_user->num_rows > 0) {
        $nom_err = 'Nom d\'utilisateur déjà existant.';
        session_start();
        $_SESSION['nom_err'] = $nom_err;
        header("Location: annonce.php?STATUS=Nom d'utilisateur déjà existant");
        exit();
    } else {
        $sql_insert = "INSERT INTO annonce (nom_utilisateur, numero_tel, titre_annonce, description_annonce, date_ajout) 
                       VALUES ('$nom_utilisateur', '$numero_tel', '$titre_annonce', '$description_annonce', '$date_ajout')";

        if ($link->query($sql_insert) === TRUE) {
            header("location:../annonce.php?task=added_successfully");
            exit();
        } else {
            echo "Erreur: " . $link->error;
        }
    }

    $link->close();
}
?>
