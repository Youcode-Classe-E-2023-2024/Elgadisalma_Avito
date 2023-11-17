<?php
session_start();

if(!isset($_SESSION['id'])){
    header("location:./connexion.php");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Mes annonces</title>
</head>
<body>
<div class="container mt-5">
    
    <h2>Ma liste</h2>
    <form action="log_out_traitement.php" method="post">
    <button type="submit" class="btn btn-danger">Log out</button>
    </form>
    <br>
    <a href="annonce.php"><button>Ajouter une annonce</button></a>
    <br>
    <a href="index.php"><button type="button" class="btn btn-primary">Voir les annonces</button></a>


    <table class="table mt-3">
        <thead>
            <tr>
                <th>Vendeur</th>
                <th>Numero de telephone</th>
                <th>Titre du produit</th>
                <th>État</th>
                <th>Description du produit</th>
                <th>Actions</th>
            </tr>
        </thead>
        
        <tbody id="taskTableBody">
        <?php
            include_once 'mes_annonces_traitement.php';
            $annonces = get_mes_annonces();
            foreach ($annonces as $annonce) {
        ?>
            <tr>
                <td><?php echo $annonce['nom_utilisateur'] ;?></td>
                <td><?php echo $annonce['numero_tel'] ;?> </td>
                <td><?php echo $annonce['titre_annonce'] ;?> </td>
                <td><?php echo $annonce['etat_annonce'] ;?> </td>
                <td><?php echo $annonce['description_annonce'] ;?> </td>
                <td>
                <a href="edit.php?id=<?php echo $annonce['id']; ?>">
    <button class="btn btn-warning btn-sm">
        <i class="fas fa-edit"></i> Modifier
    </button>
</a>
                
                <form action="delete.php" method="get" style="display: inline;">
                    <input type="hidden" name="id" value="<?php echo $annonce['id']; ?>">
                    <button type="submit" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i> Supprimer
                    </button>
                </form>
                


            </td>
            </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<!--  -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
