<?php require('./config.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <title>Projet - Gestion Utilisateurs</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="./css/style.css" rel="stylesheet">
</head>
<body>
  <div class="card mx-auto col-lg-8">
    <div class="card-header">
      <h2 class="card-title text-center">Login</h2>
    </div>
    <div class="card-body">
      <div class="container text-center">
        <form method="POST" class="form-row col-lg-offset-4">
          <div class="row text-center">
            <div class="col-md-6 container">
              <input type="email" id="email" class="form-control rounded" name="email" placeholder="Email" required />
            </div>
            <br/>
            <div class="col-md-6 container">
              <input type="password" class="form-control rounded" id="password" name="password" placeholder="Mot de passe" required />
              <br/>
            </div>
            <div class="container-fluid">
              <button type="submit" class="btn btn-success" name="formconnexion">Se connecter </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
