<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>poster vos annonces</title>
</head>
<body>
	<form action="produit.php" method="POST">
		<legend>renseigner les information de votre produit ici</legend><br/><label>ajouter au moins trois photos de vos produits</label><br/><input type="file" name="photo1"><br/>
		<label>le titre de votre annonce</label><br/>
		<input type="text" name="titre"><br/>
		<label>la description de votre annonce </label><br/>
		<input type="text" name="description"><br/>
		<input type="submit" value="poster"> 
	</form>
</body>
</html>