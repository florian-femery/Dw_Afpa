<?php 
     // Class Initialisation.
    require '../controllers/table/Produit.php'; 
    use App\Table\Produit; 
    require '../controllers/table/Categorie.php'; 
    use App\Table\Categorie;  
    require '../controllers/App.php'; 
    use App\App;
    require_once('db_config.php');
    
     // Getting GET datas. 
    $pro_id = isset($_GET['pro_id']) ? $_GET['pro_id'] : $_POST['prod_id']; 

     //  Getting DB Datas. -> to move in models. 
    $produits = $db->prepare("SELECT * FROM produits JOIN categories  ON categories.cat_id = produits.pro_cat_id WHERE pro_id = ?  ", [$pro_id],'App\Table\Produit', true); 
    $categories = $db->query("SELECT DISTINCT * FROM categories", 'App\Table\Categorie'); 
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

        <div class="text-center mt-5">
            <img src="<?= $produits->getIMG() ?>" alt="" width="250">
        </div>

        <form action="../models/update_script.php" method="post" enctype="multipart/form-data">
            <div class="form-group mt-4">
                <label for="prod_id" class="mb-2">ID :</label>
                <input type="text" class="form-control" id="prod_id" name="prod_id" value="<?= $produits->pro_id?>" readonly>
            </div>

            <div class="form-group mt-4">
                <label for="prod_ref" class="mb-2">Référence* :</label>
                <input type="text" class="form-control" id="prod_ref" name="prod_ref" value="<?= isset($_POST['prod_ref']) ? $_POST['prod_ref'] : $produits->pro_ref?>">
                <p class="text-danger"><?php echo isset($error_ref) ? $error_ref : '' ;?></p>
            </div>

             <!-- //changer ici par une liste qui prends les catégories. JOIN etc... -->
            <div class="form-group mt-4">
                <label for="prod_cat" class="mb-2">Catégorie :</label>
                <select class="form-control" id="prod_cat" name="prod_cat">
                    <option value = <?= $produits->cat_id ?>><?= $produits->cat_nom ?>
                    <?php foreach($categories as $categorie) : ?>
                    <option value = <?= $categorie->cat_id ?>><?= $categorie->cat_nom ?></option>
                    <?php endforeach; ?> 
                </select>
            </div>

            <div class="form-group mt-4">
                <label for="prod_lib" class="mb-2">Libellé* :</label>
                <input type="text" class="form-control" id="prod_lib" name="prod_lib" value="<?= isset($_POST['prod_lib']) ? $_POST['prod_lib'] : $produits->pro_libelle?>">
                <p class="text-danger"><?php echo isset($error_lib) ? $error_lib : '' ;?></p>
            </div>

            <div class="form-group mt-4">
                <label for="prod_des" class="mb-2">Description :</label>
                <textarea class="form-control" id="prod_des" rows="3" name="prod_des"><?= $produits->pro_description ?></textarea>
            </div>

            <div class="form-group mt-4">
                <label for="prod_pri" class="mb-2">Prix* :</label>
                <input type="text" class="form-control" id="prod_pri" name="prod_pri" value="<?= isset($_POST['prod_pri']) ? $_POST['prod_pri'] : $produits->pro_prix?>">
                <p class="text-danger"><?php echo isset($error_pri) ? $error_pri : '' ;?></p>
            </div>

            <div class="form-group mt-4">
                <label for="prod_sto" class="mb-2">Stock* :</label>
                <input type="text" class="form-control" id="prod_sto" name="prod_sto" value="<?= isset($_POST['prod_sto']) ? $_POST['prod_sto'] : $produits->pro_stock?>">
                <p class="text-danger"><?php echo isset($error_sto) ? $error_sto : '' ;?></p>
            </div>

            <div class="form-group mt-4">
                <label for="prod_cou" class="mb-2">Couleur</label>
                <input type="text" class="form-control" id="prod_cou" name="prod_cou" value="<?= isset($_POST['prod_cou']) ? $_POST['prod_cou'] : $produits->pro_couleur?>">
            </div>

            <div class="form-group mt-4">
                <p class="mb-2">Produit bloqué ?</p><?= $produits->radioBlocked(false); ?>
            </div>

            <div class="form-group mt-4">
                <label for="prod_dat" class="mb-2">Date d'ajout :</label>
                <input type="date" class="form-control" id="prod_dat" name="prod_dat" value="<?= $produits->pro_d_ajout?>" readonly>
            </div>

            <div class="form-group mt-4">
                <label for="prod_dat_mod" class="mb-2">Date de modification :</label>
                <input type="text" class="form-control" id="prod_dat_mod" name="prod_dat_mod" value="<?= App::getDateTime();?>" readonly>
            </div>

            <div class="form-group mt-4">
                <label for="prod_pic" class="mb-2">Image du produit :</label>
                <input type="file" class="form-control" id="prod_pic" name="prod_pic">
            </div>

            <div class="my-5">
                <a href="details.php?pro_id=<?= $produits->pro_id ?>" class="btn btn-secondary btn-lg">Retour</a>
                <button type="submit" class="btn btn-success btn-lg">Enregistrer</button>
            </div> 
        </form>

		<!-- Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>