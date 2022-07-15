<?php 
	try {
		$bs=new PDO('mysql:host=localhost; dbname=commerce','hosermos','modeste1998');
		
	} catch (Exception $e) {
		die('le site est en maintenance'.$e->getMessage());	
	}
	$nom1=$_POST['nom'];
	$prenom1=$_POST['prenom'];
	$mail1=$_POST['mail'];
	$telephone1=$_POST['telephone'];
	$req=$bs->prepare('INSERT INTO membres(nom,prenom,mail,telephone) VALUES(:nom,:prenom,:mail,:telephone)');
	$req->execute(array(':nom'=>$nom1,':prenom'=>$prenom1,':mail'=>$mail1,':telephone'=>$telephone1));
	header('location:creation_de_compte.php');
?>