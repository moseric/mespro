<?php 
	session_start();?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>inserreer vos produits</title>
</head>
<body>
	<?php if(isset($_SESSION['identifiant']) AND isset($_SESSION['mot_de_pass']))
	{?>
	<h4>remplir ce formulaire pour publier vos produits à tous visiteurs de ce site</h4>
	<form method=POST action="enregistrer_produit.php">
		<label>ajouter la photo du produit</label><br/>
		<input type="file" name="photo"><br/>
		<label>le mom du produit</label><br/>
		<input type="text" name="nom"><br/>
		<label>le prix du produit</label><br/>
		<input type="tel" name="leprix"><br/>
		<label>la description du produit</label><br/>
		<textarea name="description" ></textarea><br/>
		<input type="submit" value="POSTER">
	</form>
	
	<?php }
		
		else
		 {
		echo'veillez vous inscrire suivant le lien ci-dessous.';
		}?>
		<a href="inscrit.php">s'inscrire</a><br/>
	
</body>
</html>