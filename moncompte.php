<?php //section_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>moncompte</title>
	<link rel="stylesheet" type="text/css" href="compte.css">
</head>
<body>
<img src="logocompte.png" id="logo">
<?php echo $_SESSION['speudo']; ?>   <br/>
<p>Bienvenue sur votre compte</p>
<span>mon solde:</span>      <?php $solde=0.0000;
echo $solde ;?>
<h3>transfère</h3>
<h3>Message</h3>
<h3><a href="">Mes publicité</a></h3>

</body>
</html>