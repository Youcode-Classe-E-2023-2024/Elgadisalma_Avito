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


if (!$link->query($requete_creation_table_annonce ) === TRUE) {
    echo "error in table creation : annonce";
} 


?>
