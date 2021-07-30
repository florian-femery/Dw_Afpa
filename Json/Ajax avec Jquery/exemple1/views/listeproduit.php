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
	</head>

	<body class="container">
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
	</body>
</html>