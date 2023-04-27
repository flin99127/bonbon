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

    include "fonction.php";
?>

<br>

<div class = "container">
        <div class = "row">
            <div class = "col-8 ">
                <form class = "form" action = "piece.php" method = "POST">

                    <input type="text" class = "form-contol" name = "nom">
                    <input type="text" class = "form-contol" name = "prix">
                    <input type="text" class = "form-contol" name = "image">

                    <br>
                    <br>

                    <input type="submit" class="btn btn-primary" value = "Valider les modifications"></input>
                </form>
            </div>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>