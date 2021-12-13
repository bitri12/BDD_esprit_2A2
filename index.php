<?php require('./config.php'); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title>Projet - Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	  <link href="./css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="card col-lg-8 mx-auto">
      <div class="card-header">
        <h2 class="card-title text-center">Bienvennue {user}</h2>
        <nav class="navbar navbar-expand-md navbar-light rounded nav justify-content-center">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <li><a class="nav-link active" href="./index.php">Profil</a></li>
                    </li>
                    <li class="nav-item">
                      <li><a class="nav-link" href="./historique.php">historique</a></li>
                    </li>
                    <li class="nav-item">
                      <li><a class="nav-link" href="./gestion_users.php">Gestion Utilisateurs</a></li>
                    </li>
                    <li class="nav-item">
                      <li><a class="nav-link" href="./gestion_autorisations.php">Gestion des Autorisation</a></li>
                    </li>
                </ul>
            </nav>
      </div>
      <div class="card-body">
        <p class="text-center">Nom : {Nom}</p><br/>
        <p class="text-center">Prenom : {prenom} </p><br/>
        <p class="text-center">Email : {email}</p><br/>
        <p class="text-center">Job : {Type} </p><br/>
        <p class="text-center">Autorisation : {Auto} </p><br/>
      </div>
    </div>
  </body>
</html>
