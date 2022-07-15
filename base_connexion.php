<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div></div>

<?php 
	try { $bd=new PDO ('mysql:host=localhost;dbname=commerce','hosermos','modeste1998');
		
	} catch (Exception $e) {
		die('le site est en maintenance'.$e->getMessage());
		
	}
	$bon=$_POST['mot_de_pass'];
	$bon1=$_POST['pseudo'];
	$sup= $bd->prepare('SELECT mot_de_pass,pseudo FROM inscription WHERE mot_de_pass=:mot_de_pass and pseudo=:pseudo');
	$sup->execute(array('mot_de_pass'=>$bon,'pseudo'=>$bon1));
	$res=$sup->fetch();
	if (!$res) {

		echo "informayion invalide";
	}
	else{
	header('location:moncompte.php');
}?>
</body>
</html>