<?php
// require_once 'config.php';

// if(isset($_POST["submit"]) ){
    
//     $id = $_POST["id"];
//     $numero_tel = $_POST["numero_tel"];
//     $titre_annonce = $_POST["titre_annonce"];
//     $description_annonce = $_POST["description_annonce"];
//     $etat_annonce = $_POST["etat_annonce"];


//     $sql = "UPDATE annonce SET numero_tel = ?, titre_annonce = ?, description_annonce = ?, etat_annonce = ? WHERE id = ?;";
//     $stmt = $link->prepare($sql);
    
//    $stmt->bind_param("ssss", $numero_tel,$titre_annonce,$description_annonce,$description_annonce);

//    $res = $stmt->execute();

//    if($res){
//     header("location:../mes_annonces.php?STATUS=annonce edited succesfully");
//     exit();
//    }else{
//     echo "error ";
//    }
// }


if (isset($_GET['id'])) {
    $annonce_id = $_GET['id'];
    $numero_tel = $_POST["numero_tel"];
    $titre_annonce = $_POST["titre_annonce"];
    $description_annonce = $_POST["description_annonce"];
    $etat_annonce = $_POST["etat_annonce"];

    $sql = "UPDATE annonce SET numero_tel = ?, titre_annonce = ?, description_annonce = ?, etat_annonce = ? WHERE id = ?;";
    $stmt = $link->prepare($sql);

    // Correction de la ligne suivante pour correspondre aux types et à l'ordre des champs dans la requête
    $stmt->bind_param("ssssi", $numero_tel, $titre_annonce, $description_annonce, $etat_annonce, $annonce_id);

    $res = $stmt->execute();

    if ($res) {
        header("location:../mes_annonces.php?STATUS=annonce edited successfully");
        exit();
    } else {
        echo "Erreur lors de la modification de l'annonce : " . $stmt->error;
    }

    $stmt->close();
}
?>