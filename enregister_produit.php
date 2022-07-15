<?php 
	include('bibliotheque.php');
	  try {
		 $bs=new PDO('mysql:host=localhost;dbname=commerce','hosermos','modeste1998');
		   	
		   } catch (Exception $e) {
		   	die('le site est en maintenance'.$e->getMessage());
		   }
		    }
	$ins=new mabase();
	$ins->insertionproduit($_POST['photo'],$_POST['nom'],$_POST['leprix'],$_POST['description']);
	?>