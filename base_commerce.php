<?php 
			$mail1=$_POST['mail'] ;// le mail de l'interresser
				$mot=$_POST['pass'];// le premier mot de pass
				$mot1=$_POST['pass1'];//le mot de passe une deuxieme fois
	if($mot!=$mot1){
		echo 'les mots de passe sont distinct';
		header('location:inscrit.php');
	}
	else{
		try {
			$bse=new PDO('mysql:host=localhost;dbname=moseric','hosermos','modeste1998');
			
		} catch (Exception $e) {
			die('le site est en maintenance'.$e->getMessage());
		}
		$req=$bse->prepare('INSERT INTO inscription_de_commerce(mail,mot_de_pass)VALUES(:mail,:mot_de_pass)');
		$req->execute(array(':mail'=>$mail1,':mot_de_pass'=>$mot));}
	?>