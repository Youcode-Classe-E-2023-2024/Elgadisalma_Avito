<?php
include_once "config.php";
session_start();

if (!isset($_SESSION['id'])) {
    header("location:./connexion.php");
    exit();
}
$id = $_GET['id'];
$sql = "SELECT * FROM annonce WHERE id =$id ;";
$result = $link->query($sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Avito</title>
</head>
<body>

<form class="row g-3 needs-validation" action="edit_traitement.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Numéro de téléphone</label>
        <input type="text" class="form-control" id="validationCustom01" name="numero_tel" value="<?php echo $row['numero_tel'] ?>" required>
    </div>

    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Titre de l'annonce</label>
        <input type="text" class="form-control" id="validationCustom02" name="titre_annonce" value="<?php echo $row['titre_annonce'] ?>" required>
    </div>

    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Description de l'annonce</label>
        <input type="text" class="form-control" id="validationCustom03" name="description_annonce" value="<?php echo $row['description_annonce'] ?>" required>
    </div>

    <div class="col-md-3">
        <label for="validationCustom04" class="form-label">État de l'annonce</label>
        <select class="form-select" id="validationCustom04" name="etat_annonce" required>
            <option <?php echo ($row['etat_annonce'] == 'à vendre') ? 'selected' : ''; ?>>à vendre</option>
            <option <?php echo ($row['etat_annonce'] == 'vendu') ? 'selected' : ''; ?>>vendu</option>
        </select>
    </div>

    <button class="btn btn-primary" type="submit" name="submit">Enregistrer les modifications</button>
</form>

</body>
</html>
