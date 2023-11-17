<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("location:./connexion.php");
    exit(); // Assurez-vous de terminer le script après la redirection
}

include_once "config.php";

$annonce_id = $_GET['id'];
$sql = "SELECT * FROM annonce WHERE id = $annonce_id;";

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

<form class="row g-3 needs-validation" novalidate action="edit_traitement.php" method="post">
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" value="<?php echo $POST['numero_tel'] ?>" required>
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $POST['titre_annonce'] ?>" required>
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $POST['description_annonce'] ?>" required>
  </div>

  <div class="col-md-3">
        <label for="validationCustom04" class="form-label">État de l'annonce</label>
        <select class="form-select" id="validationCustom04" name="etat_annonce" required>
            <option value="à vendre" <?php if ($POST['etat_annonce'] == 'à vendre') echo 'selected'; ?>>À vendre</option>
            <option value="vendu" <?php if ($POST['etat_annonce'] == 'vendu') echo 'selected'; ?>>Vendu</option>
        </select>
    </div>

    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

    <div class="col-12">
        <button class="btn btn-primary" type="submit" name="submit">Modifier l'annonce</button>
    </div>

  
</form>

</body>
</html>


