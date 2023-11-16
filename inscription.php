<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>connexion Avito </title>
</head>

<body>
    <h1>Bienvenue à Avito</h1>
    <form action="Add_user.php" method="post">

      <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col">nom d'utilisateur</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="staticEmail" name="userName">
      <span class="text-danger"><?php if(isset($_GET['STATUS']))echo $_GET['STATUS'] ?></span>
    </div>
      </div>

    <div class="mb-3 row">
      <label for="text" class="col-sm-2 col-form-label">numero de telephone</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="numero_tel" name="numero_tel">
      </div>
    </div>

    <div class="mb-3 row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword" name="password">
      </div>
    </div>

    <div class="col-sm-2 col-form-label">
      <button>S'inscrire</button>
    </div>
  
    </form>
    

</body>

</html>