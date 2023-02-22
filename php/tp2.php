<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="style.css" rel="stylesheet">
	<title>L'IMC</title>
</head>


<body>
	<main>
		<section>
			<h1>L'IMC : if/else</h1>
			<article>
				<form method="post" action="tp2-imc.php">
					<fieldset>
						<legend><b>Saisi :</b></legend>
						<div>
							<label for="prenom">Entrez votre prenom :</label>
							<input type="text" name="prenom" />
						</div>
						<div>
							<label for="taille">Entrez votre taille (sous la forme x.xx) :</label>
							<input type="text" name="taille" />
						</div>
						<div>
							<label for="poids">Entrez votre poids (en kilos) :</label>
							<input type="text" name="poids" />
						</div>
						<div>
							<input type="submit" name="valider" value="OK" />
						</div>
					</fieldset>
				</form>
			</article>
		</section>
	</main>

</body>

</html>