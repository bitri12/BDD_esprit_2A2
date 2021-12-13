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
  <div class="card col-lg-8 mx-auto">
    <div class="card-header">
      <h2 class="card-title text-center">Bienvennue {user}</h2>
      <nav class="navbar navbar-expand-md navbar-light rounded nav justify-content-center">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <li><a class="nav-link" href="./index.php">Profil</a></li>
          </li>
          <li class="nav-item">
            <li><a class="nav-link" href="./historique.php">historique</a></li>
          </li>
          <li class="nav-item">
            <li><a class="nav-link active" href="./gestion_users.php">Gestion Utilisateurs</a></li>
          </li>
          <li class="nav-item">
            <li><a class="nav-link" href="./gestion_autorisations.php">Gestion des Autorisation</a></li>
          </li>
        </ul>
      </nav>
    </div>
    <div class="card-body">
      <div class="container-fluid col-lg-6 row-lg-2 mx-auto">
          <a class="btn btn-success" href="#">Ajouter un Utilisateur</a>
          <a class="btn btn-danger" href="#">Supprimer un Utilisateur</a>
      </div>
      <br/>
      <div class="container-fluid card col-lg-6 mx-auto">
        <form method="post" class="mx-auto">
          <select id="user_id" name="user_id">
            <option value="1">{user_id}</option>
          </select><br/><br/>
          <button type="submit" name="formdelete" class="btn btn-danger">Confirmer Suppression</button>
        </form>
      </div>
      <br/>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">mot de passe</th>
            <th scope="col">Email</th>
            <th scope="col">Job</th>
            <th scope="col">Photo</th>
            <th scope="col">Autorisation</th>
            <th scope="col">Modifier</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{id}</td>
            <td>{nom}</td>
            <td>{prenom}</td>
            <td class="text-center">-</td>
            <td>{email}</td>
            <td>{job}</td>
            <td>{photo}</td>
            <td>{Autorisation}</td>
            <td><a class="btn btn-warning" href="#">Modifier</a> </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
