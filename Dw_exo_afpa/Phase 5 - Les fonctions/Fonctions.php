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
        <div class="container" style="margin-top: 50px">
<?php
    //If the submit button has been pressed.
    if (isset($_POST['submit'])){
        //Check number values.
        if (is_numeric($_POST['number1']) && is_numeric($_POST['number1'])){
            //Calculate total.
            if ($_POST['operation'] == 'plus'){
                $total =$_POST['number1'] + $_POST['number2'];
            }

            if ($_POST['operation'] == 'minus'){
                $total =$_POST['number1'] - $_POST['number2'];
            }

            if ($_POST['operation'] == 'multiply'){
                $total =$_POST['number1'] * $_POST['number2'];
            }

            if ($_POST['operation'] == 'divided by'){
                $total =$_POST['number1'] / $_POST['number2'];
            }
                //Print total to the browser.
                echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";
        }else{
            //Print error message to the browser.
            echo "Numeric Value are required";
        }
    }
?>
            <!-- Calculator form -->
            <form method="post" action="Fonctions.php">
                <input name="number1" type="text" class="form-group" style="width : 150px; display=inline" />
                <select name="operation">
                    <option value="plus">Plus</option>
                    <option value="minus">Minus</option>
                    <option value="multiply">Multiply</option>
                    <option value="divided by">Divided</option>
                </select>
                <input name="number2" type="text" class="form-group" style="width : 150px; display=inline" />
                <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
            </form>
        </div>
        </header>
        <footer>
        </footer>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
    </body>
</html>