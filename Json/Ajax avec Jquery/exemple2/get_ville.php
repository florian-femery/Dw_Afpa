<?php
require_once("database_connect.php");
$db = new DB();
if(!empty($_POST["reg_id"])) {
	$query ="SELECT * FROM departements WHERE dep_reg_id = '" . $_POST["reg_id"] . "'";
	$results = $db->runQuery($query);
?>
	<option value="">Sélectionnez la Departements</option>
<?php
	foreach($results as $departements) {
?>
	<option value="<?php echo $ville["dep_id"]; ?>"><?php echo $departements["dep_nom"]; ?></option>
<?php
	}
}
?>