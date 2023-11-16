<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
</head>
<body>
    <form action="connect_user.php" method="post">
     
    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">+</span>
        <input type="text" class="form-control" placeholder="nom d'utilisateur"  aria-describedby="addon-wrapping" name='userName'>
    </div>
<br>
    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">+</span>
        <input type="password" class="form-control" placeholder="Mot de passe" aria-describedby="addon-wrapping" name='password'>
    </div>
<br>
    <button>connexion</button>
    </form>
<br>
    <a href="inscription.php"><button>s'inscrire</button></a>
</body>
</html>