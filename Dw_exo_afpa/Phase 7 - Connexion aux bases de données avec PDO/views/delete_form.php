<?php 
     // Class init
    require '../controllers/table/Produit.php'; 
    use App\Table\Produit; 

     // DB init. 
    require '../controllers/Database.php';
    use App\Database; 
    $db = new Database('jarditou'); 

     // Getting Datas from DB
    $produits = $db->prepare("SELECT * FROM produits JOIN categories  ON categories.cat_id = produits.pro_cat_id WHERE pro_id = ?  ", [$_GET['pro_id']],'App\Table\Produit', true); 
?>

<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP - Base</title>
		 <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	</head>

	<body class="container">
		<header class="d-none d-lg-flex m-2 justify-content-between align-content-center">
		</header>

		<div class="row">
			 <!-- ../pages/img/promotion.jpg -->
			<img src="<?= isset($file_path) ? $file_path : ''; ?>img/promotion.jpg" class="img-fluid" alt="promo image">
		</div>

        <form action="../models/delete_script.php" class="text-center my-5" method="post">
            <div class="text-center mt-3">
                <img src="<?= $produits->getIMG() ?>" alt="" width="250">
                <h1 class="display-2 fw-bold"><?= $produits->pro_libelle; ?></h1>
                <p class="display-4">Etes vous sûr de vouloir supprimer <br><span class="fw-bold">"<?=$produits->pro_libelle; ?>"</span> de la base de données ?   </p>
            </div>

            <input type="hidden" name="pro_id" value="<?= $_GET['pro_id']; ?>">
            <a href="details.php?pro_id=<?= $produits->pro_id ?>" class="btn btn-secondary btn-lg">Retour</a>
            <button type="submit" class="btn btn-danger btn-lg">Supprimer</button>
        </form>
        

		<!-- Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>