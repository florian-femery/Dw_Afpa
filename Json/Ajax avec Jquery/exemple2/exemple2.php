<?php
    require_once("database_connect.php");
    $db =new DB();
    $query ="SELECT * FROM regions";
    $results = $db->runQuery($query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Liaison entre deux liste déroulante pays et ville</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    function getVille(val) {
					$.ajax({
					type: "POST",
					url: "get_ville.php",
					data:'id_pays='+val,
					success: function(data){
						$("#list-ville").html(data);
					}
					});
				}

                function selectCountry(val) {
                    $("#search-box").val(val);
                    $("#suggesstion-box").hide();
                };
</script>
<link rel="stylesheet" href="style.css">
</head>
    <body>
    <div class="form">
                <div class="row">
                    <label>Region:</label>
                    <br/>
                    <select name="region" id="liste-region" class="boxInput" onChange="getDepartements(this.value);">
                        <option value="">Sélectionnez la Region</option>
						<?php
						foreach($results as $region) {
						?>
							<option value="<?php echo $region["reg_id"]; ?>"><?php echo $region["reg_v_nom"]; ?></option>
						<?php
						}
						?>
					</select>
                </div>
                <div class="row">
                    <label>Departements:</label><br/>
                    <select name="departements" id="list-ville" class="boxInput">
                        <option value="">Sélectionnez le Departements</option>
<?php
if(!empty($_POST["reg_id"])) {
	$query ="SELECT * FROM departements WHERE dep_reg_id = '" . $_POST["reg_id"] . "'";
	$results = $db->runQuery($query);
?>
<?php
	foreach($results as $departements) {
?>
	<option value="<?php echo $ville["dep_id"]; ?>"><?php echo $departements["dep_nom"]; ?></option>
<?php
	}
}
?>
                    </select>
                </div>
            </div>
    </body>
</html>