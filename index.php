<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Avito</title>
</head>

<body>
<div class="container mt-5">
    <h2>To-Do List</h2>

    <a href="annonce.php"><button>Ajouter une commande</button></a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Vendeur</th>
                <th>Numero de telephone</th>
                <th>Titre du produit</th>
                <th>État</th>
                <th>Description du produit</th>
                
            </tr>
        </thead>
        
        <tbody id="taskTableBody">
        <?php
            include_once 'afficher_annonce.php';
            $annonce = get();
            foreach ($annonce as $annonce) {
        ?>
            <tr>
                <td><?php echo $annonce['nom_utilisateur'] ;?></td>
                <td><?php echo $annonce['numero_tel'] ;?> </td>
                <td><?php echo $annonce['titre_annonce'] ;?> </td>
                <td><?php echo $annonce['etat_annonce'] ;?> </td>
                <td><?php echo $annonce['description_annonce'] ;?> </td>
                <td>
            </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>