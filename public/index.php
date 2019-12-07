<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>password</title>

    <!-- GOAL: Stampare una stringa verde se la variabile password passata in GET è uguale a "Boolean", altrimenti stampare una stringa rossa. -->

    <?php

      $user_pas = $_GET["psw"];
      $pas = "Boolean";

      if ($user_pas == $pas) {
        $ris = "<h1 style='color:green'>Password corretta</h1>";
      } else {
        $ris = "<h1 style='color:red'>Password errata</h1>";
      }

    ?>

  </head>
  <body>

    <?php echo $ris ?>

  </body>
</html>
