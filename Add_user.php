<?php
require_once 'config.php';
$nom_err='';

$nom_utilisateur = $_POST['userName'];
$numero_tel = $_POST['numero_tel'];
$password = $_POST['password'];

// $sql_insert = "INSERT INTO utilisateur (nom_utilisateur, numero_tel , password) 
//                      VALUES ('$nom_utilisateur', '$numero_tel','$password')";
// if ($link->query($sql_insert) === TRUE) {
//     // echo "Utilisateur ajouté avec succès.<br>";
//     header("Location: index.php");
// } else { 
//     if (mysqli_errno($link) == 1062) { 
//         echo "L'utilisateur avec le nom '$nom_utilisateur' existe déjà.<br>";
//     } else {
//         echo "Erreur lors de l'insertion de l'utilisateur : " . $link->error . "<br>";
//     }
// }



$sql_check_user = "SELECT id FROM utilisateur WHERE nom_utilisateur = '$nom_utilisateur'";
    $result_check_user = $link->query($sql_check_user);

    if ($result_check_user->num_rows > 0) {
        $nom_err = 'Nom d\'utilisateur déjà existant.';
        session_start();
        $_SESSION['nom_err'] = $nom_err;
        header("Location: inscription.php?STATUS=Nom d'utilisateur déjà existant");
        exit();
    } else {
        $sql_insert = "INSERT INTO utilisateur (nom_utilisateur, numero_tel ,password) 
                        VALUES ('$nom_utilisateur', '$numero_tel','$password')";
        if ($link->query($sql_insert) === TRUE) {
            header("location:../index.php?profil=added_successfully");
            exit();
        } else {
            echo "Erreur: " . $link->error;
        }
    }