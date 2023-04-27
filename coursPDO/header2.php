<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" <href="#">HARIBO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="accueil-admin.php">accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-co" href="#">connexion</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            adminstration
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="formAjout.php">ajouter</a></li>
            <li><a class="dropdown-item" href="choixSupp.php">supprimer</a></li>
            <!---<li><hr class="dropdown-divider"></li>--->
            <li><a class="dropdown-item" href="choixModif.php">modifier</a></li>
          </ul>
        </li>
        <!---<li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>-->
      </ul>
      <form action = "recherche.php" class="d-flex" role="search" method = "POST">
        <input class="form-control me-2" type="search" placeholder="recherche" aria-label="Search" name = "recherche">
        <button class="btn btn-outline-success" type="submit">rechercher</button>
      </form>
    </div>
  </div>
</nav>