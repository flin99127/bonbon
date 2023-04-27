<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
  
  <body>
<?php
  include "header2.php";
?>

  <form method = "POST" action = "" entype = "multipart/form-data">
  <div class="mb-3">
    <label for="nomDuProduit" class="form-label">nom du produit</label>
    <input type="text" class="form-control" id="nomProduit" placeholder = "nom du bonbon" name = "produit">
  </div>
  <div class="mb-3">
    <label for="prix" class="form-label">prix du produit</label>
    <input type="text" class="form-control" id="prix" placeholder = "prix du bonbon" name = "prix">
  </div>
  <div class = "mb-3">
    <a>image du produit</a>
    <input type="file" class = "form-control">
</div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

<?php

    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>