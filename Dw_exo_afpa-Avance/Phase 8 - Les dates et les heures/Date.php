<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>PHP - Base</title>
        <meta name="viewport" content="width=device-width, initial-scal=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

    <body>
     <div class="col-lg-3 bg-warning mb-3">
     </div>
        <header>  
<hr>
<?php
    //exo 1
    echo date('l j F Y, H:i');
?>
<hr>
<?php
    //exo 2
    $date_test = "2019-07-14";
    $good_format=strtotime ($date_test);
    echo date('W',$good_format);
?>
<hr>
<?php
    //exo 3,4
    $origin = new DateTime('2021-07-06');
    $target = new DateTime('2022-01-14');
    $interval = $origin->diff($target);
    echo $interval->format('%R%a days');
?>
<hr>
<?php
    //exo 5
       function bissextile($annee) {
	if( (is_int($annee/4) && !is_int($annee/100)) || is_int($annee/400)) {
		// Année bissextile
		// vous remplacez le retour par ce que vou voulez
		return TRUE;
	} else {
		// Année NON bissextile
		// vous remplacez le retour par ce que vou voulez
		return FALSE;
	}
}
echo '<hr/><font color="#CC0000">' . date('Y') . ' ';
echo bissextile(date('Y')) ? 'est' : 'n\'est pas';
echo ' bissextile.';
?>
<hr>
<?php
    //exo 6
    function validateDate($date, $format = 'Y-m-d H:i:s')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }
    var_dump(validateDate('2019-17-17 12:12:12'));
?>
<hr>
<?php
    //exo 7
    echo date(' H:i');
?>
<hr>
<?php
    //exo 8
    $maDate = "2021-07-06";
    $maDate = date("Y-m-d", strtotime("+1 month", strtotime($maDate."" )));
    echo $maDate;  
?>
<hr>

        </header>
 
        <footer>
        </footer>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
    </body>
</html>