<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5/6</title>
  </head>
  <body>
    <!-- exo05-6/?week=12 -->
      <?php
        if (!empty($_GET['week'])) {
        echo $_GET['week'];
      } else {
        echo 'Merci d\indiquer une semaine';
      }
      ?>
  </body>
</html>
