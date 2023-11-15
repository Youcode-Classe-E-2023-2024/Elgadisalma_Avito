
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
    <h2>ajouter une annonce</h2>
    
    <form id="taskForm" action="ajout_annonce.php" method="post">
    
    <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Nom d'utilisateur" aria-label="Nom d'utilisateur" id="userName" name="userName">
            <span class="text-danger"><?php if(isset($_GET['STATUS']))echo $_GET['STATUS'] ?></span>
        </div>



        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Numero de telephone" aria-label="Numero de telephone" id="phoneNumber" name="phoneNumber">
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Titre de l'annonce" aria-label="Titre de l'annonce" id="annonceTitre" name="annoceTitre">
        </div>

        <div class="input-group mb-3">
            <textarea class="form-control" placeholder="Description de l'annonce" aria-label="Description de l'annonce" id="annonceDescription" name="annoceDescription"></textarea>
        </div>

        <div class="input-group mb-3">
            <input type="date" class="form-control" id="dateAjout" name="dateAjout">
        </div>

        <div class="input-group mb-3">
            <button class="btn btn-outline-secondary" type="submit" name="submit">Ajouter</button>
        </div>

    </form>

        <div class="input-group mb-3">
            <a href="index.php"><button class="btn btn-outline-secondary"  name="revenir">Revenir à la page d'acceuil</button></a>
        </div>

</div>

</body>

</html>
