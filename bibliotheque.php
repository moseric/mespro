<?php 
	class mabase{
		//attribut
	//les methodes
	   

	    public	function insertionproduit($nom1,$prix1,	$des,$photo1)
		{	// la fonction qui permet d'inserrer les produits 
			
			$con=$bs->prepare('INSERT INTO produit(nom,prix,description,date) VALUES (:nom,:prix,:description,:photo,:NOW())');
			$con->execute(array(':nom'=>$nom1,':prix'=>$prix1,':description'=>$des,':photo'=>$photo1));
		}
		public function modifierleproduit($nom1,$prix1,	$des,$photo1)
		{	// la fonction qui permet de modifier les contenues du jeux
			
			$mod=$bs->prepare('UPDATE produit SET nom=:nom1,prix=:prix1,description=:des, photo=:photo1 WHERE nom=:nom');
			$mod->execute(array(':nom1'=>$nom1,':prix1'=>$prix1,':des'=>$des,':photo1'=>$photo1));
		}
	}