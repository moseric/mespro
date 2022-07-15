<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>formulaire éducation</title>
	<link rel="stylesheet" type="text/css" href="compte.css">
</head>
<body>
	<h2>formulaire d'inscription</h2>
	<form action="base_éducation" method="POST" >
	<label>entrez votre numéro de télephone</label><br/><input type="tel" name="numero" required=""><br/>
	<label>selectionné la classe de votre enfant</label><br/><select id=classe>
		<option>sixième</option>
		<option>cinquième</option>
		<option>quatrième</option>
		<option>troisième</option>
		<option>seconde-A</option>
		<option>seconde-B</option>
		<option>seconde-D</option>
		<option>seconde-C</option>
		<option>seconde-technique</option>
		<option>prémière-A</option>
		<option>prémière-B</option>
		<option>prémière-C</option>
		<option>prémière-D</option>
		<option>pémière-technique</option>
		<option>Terminal-A</option>
		<option>Terminal-B</option>
		<option>Terminal-C</option>
		<option>Terminal-D</option>
		<option>Terminal-technique</option>
	</select><br/>
	<label>sélectionnez la matiere</label><br/>
	<select id=matière>
		<option>mathématiques</option>
		<option>PCT</option>
		<option>SVT</option>
	</select><br/>
<input type="submit" value="valider" id="valider">
</form>
</body>
</html>