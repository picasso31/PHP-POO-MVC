
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./Content/css/style.css">
    <script src="./Content/js/script.js"></script>
    <title>mvc2222</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<header>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="?controller=home&action=home">Accueil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  

 

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

<!-- liste livres -->

    <ul class="navbar-nav mr-auto">
     
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="?controller=livres&action=all_livres" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         livres
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="?controller=livres&action=all_livres" >tous les livres</a>
          <a class="dropdown-item" href="?controller=livres&action=par_titre">par titre</a>
          <a class="dropdown-item" href="?controller=livres&action=par_auteur">par auteur</a>
          <a class="dropdown-item" href="?controller=livres&action=par_editeur">par editeur</a>
          <div class="dropdown-divider"></div>
        
        </div>
      </li>
    
           <!-- fournisseur -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       fournisseur
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="?controller=fournisseurs&action=all_fournisseurs">tous les fournisseurs</a>
          <a class="dropdown-item" href="?controller=fournisseurs&action=raison_sociale">Raison sociale</a>
          <a class="dropdown-item" href="?controller=fournisseurs&action=localite">localite</a>
          <a class="dropdown-item" href="?controller=fournisseurs&action=pays">pays</a>
        
        </div>
      </li> 
         <!-- commandes -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Commandes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="?controller=commandes&action=all_commandes">Toutes les commandes</a>
          <a class="dropdown-item" href="?controller=commandes&action=editeur_commandes">par editeur</a>
          <a class="dropdown-item" href="?controller=commandes&action=fournisseur_commandes">par fournisseur</a>
          <a class="dropdown-item" href="?controller=commandes&action=date_achat">par date </a>
          <div class="dropdown-divider"></div>      
        </div>
      </li>
<li>
<a class="navbar-brand" href="?controller=home&action=login">connexion</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</li>

    </ul>
   
  </div>
</nav>



    

</nav>



</header>
</body>
</html>