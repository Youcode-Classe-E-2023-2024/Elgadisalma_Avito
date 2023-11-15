<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','avito');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link == false){
    die("Error: " . mysqli_connect_error());
}

$requete_creation_table_annonce = "
    CREATE TABLE IF NOT EXISTS annonce (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nom_utilisateur VARCHAR(255) UNIQUE NOT NULL,
        numero_tel VARCHAR(255),
        titre_annonce VARCHAR(255),
        etat_annonce VARCHAR(20) DEFAULT 'à vendre' NOT NULL,
        description_annonce VARCHAR(255),
        date_ajout DATE
    )
    
";
$requete_creation_table_utilisateur = "
    CREATE TABLE IF NOT EXISTS utilisateur (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nom_utilisateur VARCHAR(255) UNIQUE NOT NULL,
        numero_tel VARCHAR(255),
        password VARCHAR(255)
    )
";
$nom_utilisateur_ali = 'Ali';
$password_ali = 'motdepasse_ali';
$sql_insert_ali = "INSERT INTO users (nom_utilisateur, password) VALUES ('$nom_utilisateur_ali', '$password_ali')";

if ($link->query($sql_insert_ali) === TRUE) {
    echo "Utilisateur Ali ajouté avec succès.<br>";
} else {
    if (mysqli_errno($link) == 1062) {  // Code d'erreur pour violation d'unicité
        echo "L'utilisateur avec le nom '$nom_utilisateur_ali' existe déjà.<br>";
    } else {
        echo "Erreur lors de l'insertion de l'utilisateur Ali : " . $link->error . "<br>";
    }
}
// // Ajout de l'utilisateur Salma
// $nom_utilisateur_salma = 'Salma';
// $password_salma = 'motdepasse_salma';
// $sql_insert_salma = "INSERT INTO users (nom_utilisateur, password) VALUES ('$nom_utilisateur_salma', '$password_salma')";

// if ($link->query($sql_insert_salma) === TRUE) {
//     echo "Utilisateur Salma ajouté avec succès.<br>";
// } else {
//     echo "Erreur lors de l'insertion de l'utilisateur Salma : " . $link->error . "<br>";
// }



// if ($link->query($requete_creation_table_annonce) === TRUE && $link->query($requete_creation_table_utilisateur) === TRUE) {
//     echo "Tables 'annonce' et 'utilisateur' créées avec succès.";
// } else {
//     echo "Erreur lors de la création des tables : " . $link->error;
// }if ($link->query($requete_creation_table_annonce) === TRUE && $link->query($requete_creation_table_utilisateur) === TRUE) {
//     echo "Tables 'annonce' et 'utilisateur' créées avec succès.";
// } else {
//     echo "Erreur lors de la création des tables : " . $link->error;
// }



?>
