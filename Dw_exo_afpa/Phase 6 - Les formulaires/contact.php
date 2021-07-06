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
    <p>* Ces zones sont obligatoires</p>
        <form action="Verif_formulaire.php" method="post" id="envoie">
            <h2>Vos coordonnées</h2>
            <div class="form-group">
                <label for="user_lname" class="mb-2">Nom*</label>
                <input type="text" class="form-control" id="user_lname" name="user_lname" placeholder="Veuillez saisir votre nom" value="<?= isset($last_name) ? htmlspecialchars($last_name) : "";?>">
                <span class="text-danger">
                    <?php 
                    if (isset($last_name_error)) echo "$last_name_error"; 
                    ?>
                </span>
            </div>
            <div class="form-group">
                <label for="user_fname" class="my-2">Prénom*</label>
                <input type="text" class="form-control" id="user_fname" name="user_fname" placeholder="Veuillez saisir votre prénom" value="<?= isset($first_name) ? htmlspecialchars($first_name) : "";?>">
                <span class="text-danger">
                    <?php if (isset($first_name_error)) echo "$first_name_error"; ?>
                </span>
            </div>
            <div class="form-group">
                <p>Sexe*</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender_radio" id="gender_radio_female" value="Mme">
                    <label class="form-check-label" for="gender_radio_female">Féminin</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender_radio" id="gender_radio_male" value="M.">
                    <label class="form-check-label" for="gender_radio_male">Masculin</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender_radio" id="gender_radio_neutral" value="M.Mme" >
                    <label class="form-check-label" for="gender_radio_neutral">Neutre</label>
                </div>
                <span class="text-danger">
                    <?php if (isset($gender_error)) echo "$gender_error"; ?>
                </span>
            </div>
            <div class="form-group">
                <label for="user_birth_date" class="my-2">Date de Naissance*</label>
                <input type="text" class="form-control" id="user_birth_date" name="user_birth_date" placeholder="jour-mois-année" value="<?= isset($birth) ? htmlspecialchars($birth) : "";?>">
                <span class="text-danger">
                    <?php if (isset($birth_error)) echo "$birth_error"; ?>
                </span>
            </div>
            <div class="form-group">
                <label for="user_pcode" class="my-2">Code Postal*</label>
                <input type="number" class="form-control" id="user_pcode" name="user_pcode" value="<?= isset($postal) ? htmlspecialchars($postal) : "";?>">
                <span class="text-danger">
                    <?php if (isset($postal_error)) echo "$postal_error"; ?>
                </span>
            </div>
            <div class="form-group">
                <label for="user_adress" class="my-2">Adresse</label>
                <input type="text" class="form-control" id="user_adress" name="user_adress" value="<?= isset($adress) ? htmlspecialchars($adress) : "";?>">
            </div>
            <span class="text-danger">
                    <?php if (isset($address_error)) echo "$address_error"; ?>
                </span>
            <div class="form-group">
                <label for="user_city" class="my-2">Ville</label>
                <input type="text" class="form-control" id="user_city" name="user_city" value="<?= isset($city) ? htmlspecialchars($city) : "";?>">
            </div>
            <span class="text-danger">
                    <?php if (isset($ville_error)) echo "$ville_error"; ?>
                </span>
            <div class="form-group">
                <label for="user_email" class="my-2">Email*</label>
                <input type="email" class="form-control" id="user_email" name="user_email" value="<?= isset($email) ? htmlspecialchars($email) : "";?>">
                <span class="text-danger">
                    <?php if (isset($email_error)) echo "$email_error"; ?>
                </span>
            </div>
            <h2 class="my-2">Votre demande</h2>
            <div class="form-group">
                <label for="subject_select" class="my-2">Sujet*</label>
                <select class="form-control" id="subject_select" name="subject" value="<?= isset($subject) ? htmlspecialchars($subject) : "";?>">
                    <option>Veuillez sélectionner un sujet</option>
                    <option>Réclamation</option>
                    <option>Remboursement</option>
                    <option>Echange</option>
                    <option>Question sur un produit</option>
                </select>
                <span class="text-danger">
                    <?php if (isset($subject_error)) echo "$subject_error"; ?>
                </span>
            </div>
            <div class="form-group">
                <label for="user_question" class="my-2">Votre question*</label>
                <textarea class="form-control" id="user_question" name="user_question" rows="3"><?= isset($question) ? htmlspecialchars($question) : "";?></textarea>
                <span class="text-danger">
                    <?php if (isset($question_error)) echo "$question_error"; ?>
                </span>
            </div>
            <div class="form-check form-check-inline my-2">
                <input class="form-check-input" type="checkbox" id="user_agreements" name="user_agree" value="true">
                <label class="form-check-label" for="user_agreements">J'accepte le traitement informatique de ce
                    formulaire</label> <br>
                <span class="text-danger">
                    <?php if (isset($agree_error)) echo "$agree_error"; ?>
                </span>
            </div>
            <div class="form-group my-3">
                <button type="submit" id="send" class="btn btn-dark">Envoyer</button>
                <button type="reset" class="btn btn-dark">Annuler</button>
            </div>
        </form>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
    </body>
</html>