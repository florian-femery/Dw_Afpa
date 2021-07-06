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
    <div class="row m-auto shadow">
            <div class="col-lg-8 col-xs-12 px-4">
                <section class="vh-80">
                    <h1 class="mt-4">Votre formulaire à bien été transmis.</h2>
<?php
    //Déclaration des variable des input.
    $last_name = filter_input(INPUT_POST, "user_lname"); 
    $first_name = filter_input(INPUT_POST, "user_fname"); 
    $gender = filter_input(INPUT_POST, "gender_radio"); 
    $birth = filter_input(INPUT_POST, "user_birth_date"); 
    $postal = filter_input(INPUT_POST, "user_pcode"); 
    $adress = filter_input(INPUT_POST, "user_adress"); 
    $city = filter_input(INPUT_POST, "user_city"); 
    $email = filter_input(INPUT_POST, "user_email"); 
    $subject = filter_input(INPUT_POST, "subject"); 
    $question = filter_input(INPUT_POST, "user_question");

    echo "Bonjour <b>$gender $last_name $first_name</b><br>";
    echo "Vous éte née le <b>$birth</b> à <b>$adress</b>, <b>$city</b>, <b>$postal</b><br>";
    echo "avec le-mail: <b>$email</b><br>";
    echo "au sujet de <b>$subject</b>: avec cette <b>$question</b><br>";

?>
                </section>
            </div>

        </div>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
    </body>
</html>