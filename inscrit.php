<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>inscription</title>
	<link rel="stylesheet" type="text/css" href="compte.css">
</head>
<body>
	<form method="POST" action=".php">
		<fieldset>
			<legend>
				renseigner les informations suivante
			</legend>
			<label>entrez votre nom</label><br/><input type="text" name="nom" required><br/>
			<label>entrez vos prénoms </label><br/><input type="text" name="prenom" required><br/>
			<label>entrez votre email </label><br/><input type="mail" name="mail" required><br/>
			<label>entrez votre numéro </label><br/>
			<input type="tel" name="telephone"><br/>
		<input type="submit" name="envoyer">
		</fieldset>
	</form>
</body>
</html>