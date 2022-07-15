<?php 
	try {
		$bs=new PDO('mysql:host=localhost;dbname=hosermos','hosermos','modeste1998');
	} catch (Exception $e) {
		die('le site est en maintenance'.$e->getMessage());
	}
	
	$bas1=$_POST['nom'];
	$bas2=$_POST['mail'];
	$req= $bs->prepare('INSERT INTO inscription(nom,mail ) VALUES(:nom,:mail)');
	$req->execute(array(':nom'=>$bas1,':mail'=>$bas2));
?>