<?php
require_once 'config.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $numero_tel = $_POST['numero_tel'];
    $titre_annonce = $_POST['titre_annonce'];
    $description_annonce = $_POST['description_annonce'];
    $etat_annonce = $_POST['etat_annonce'];

    $sql = "UPDATE annonce SET numero_tel = ?, titre_annonce = ?, description_annonce = ?, etat_annonce = ? WHERE id = ?";
    $stmt = $link->prepare($sql);
    
    $stmt->bind_param("ssssi", $numero_tel, $titre_annonce, $description_annonce, $etat_annonce, $id);

    $res = $stmt->execute();

    if ($res) {
        header("location:mes_annonces.php?STATUS=annonce éditée avec succès");
        exit();
    } else {
        echo "Erreur lors de la mise à jour de l'annonce : " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Formulaire non soumis";
}
?>
