<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>PHP - Base</title>
        <meta name="viewport" content="width=device-width, initial-scal=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

    <body>  
         <a href="http://localhost/Dw_exo_afpa/">Retour</a>      
        <header>
<?php
    echo "Exercice - 3:<br>";
?>
        <table>
         <thead>
          <tr>
           <th></th>
<?php
    $x = 0;
    while ($x <= 12) {
?>
            <th><?= $x ?></th>
<?php
    $x++;
    }
?>
          </tr>
         </thead>

         <tbody>
<?php
    $y = 0;
    while ($y <= 12) {
?>
          <tr>
           <td>
            <?= $y ?>
           </td>
<?php
    $x = 0;
    while ($x <= 12) {
?>
           <td>
            <?= $x * $y ?>
            <?php $x++; ?>
           </td>
<?php
    } 
?>
          </tr>
<?php
    $y++;
    }
?>
         </tbody>
        </table>
        </header>

        <footer>
        </footer>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
    </body>
</html>