<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet">
  <title>Générateur de motifs</title>
</head>

<body>

  <main>
    <section>
      <h1>Le générateur de motifs</h1>
      <article>
        <div>
          <form name="formulaire" method="post" action="tp1-motif.php">
            <fieldset>
              <legend>
                <b>Saisi :</b>
              </legend>
              <div>
                <label for="ligne"> Entrez le nombre de lignes :</label>
                <input type="text" name="ligne" />
              </div>
              <div>
                <label for="Colonne">Entrez le nombre de colonnes :</label>
                <input type="text" name="colonne" />
              </div>
              <div>
                <label for="espace">Entrez le nombre d'espaces : </label>
                <input type="text" name="espace" />
              </div>
              <div>
                <label for="espace">Entrez le nombre de motifs : </label>
                <input type="text" name="motif" />
              </div>
              <input type="submit" name="valider" value="OK" />
            </fieldset>
          </form>
        </div>
      </article>
    </section>
  </main>

</body>

</html>