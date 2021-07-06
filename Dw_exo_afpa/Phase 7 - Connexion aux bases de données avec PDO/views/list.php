<?php 
     // Class init.
    require '../controllers/table/Produit.php'; 
    use App\Table\Produit; 

     // DB init. 
    require '../controllers/Database.php';

    use App\Database; 
    $db = new Database('jarditou');  

     // Getting datas from DB.
    $datas = $db->query('SELECT * FROM produits', 'App\Table\Produit'); 
?>

<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP - Bas</title>
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
		<div class="table-responsive-sm">
        	<table class="table table-striped table-hover table-bordered table-sm">
           	 	<thead>
                	<tr>
                    	<th scope="col" class="table-secondary text-center">Photos</th>
                    	<th scope="col" class="table-secondary text-center">ID</th>
                    	<th scope="col" class="table-secondary text-center">Référence</th>
                   		<th scope="col" class="table-secondary text-center">Libellé</th>
                    	<th scope="col" class="table-secondary text-center">Prix</th>
                    	<th scope="col" class="table-secondary text-center">Stock</th>
                	    <th scope="col" class="table-secondary text-center">Couleur</th>
                    	<th scope="col" class="table-secondary text-center">Ajout</th>
                	    <th scope="col" class="table-secondary text-center">Modif</th>
            	        <th scope="col" class="table-secondary text-center">Bloqué</th>
                	</tr>
            	</thead>

            	<tbody>
<?php foreach($datas as $row) :?> 
                	<tr>
                    	<td class="table-warning text-center" style="vertical-align: middle;"><img src="<?= $row->getIMG() ?>" width="150px"></td>
                    	<td class="table-secondary text-center my-auto" style="vertical-align: middle;"><?= $row->pro_id; ?></td>
                    	<td class="table-secondary text-center" style="vertical-align: middle;"><?= $row->pro_ref; ?></td>
    	                <td class="table-warning text-center" style="vertical-align: middle;"><a href="<?= $row->getURL() ?>" class="link-danger fw-bold"><?= $row->pro_libelle; ?></a></td>
        	            <td class="table-secondary text-center" style="vertical-align: middle;"><?= $row->pro_prix . ' €'; ?></td>
            	        <td class="table-secondary text-center" style="vertical-align: middle;"><?= $row->pro_stock; ?></td>
                	    <td class="table-secondary text-center" style="vertical-align: middle;"><?= $row->pro_couleur; ?></td>
                    	<td class="table-secondary text-center" style="vertical-align: middle;"><?= $row->pro_d_ajout; ?></td>
            	        <td class="table-secondary text-center" style="vertical-align: middle;"><?= $row->pro_d_modif; ?></td>
                	    <td class="table-secondary text-center" style="vertical-align: middle;"><?= $row->isBlocked(); ?></td>
               	    </tr>
<?php endforeach; ?>  
            	</tbody>
        	</table>
		</div>

        <div class="my-5">
            <a href="add_form.php" class="btn btn-danger  shadow-sm">Ajouter un produit</a>
        </div>

		<!-- Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>