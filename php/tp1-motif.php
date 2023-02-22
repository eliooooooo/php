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
        <?php
        if (isset($_POST['valider'])) {
            $ligne = $_POST['ligne'];
            $colonne = $_POST['colonne'];
            $espace = $_POST['espace'];
            $motif = $_POST['motif'];
        }
        ?>
        <section>
            <h1>Voici votre motif !</h1>
            <article>
                <h2>Vous avez choisi :</h2>
                <div class="horizontal">
                    <?php echo '<p>' . $ligne . ' Lignes</p>' ?>
                    <?php echo '<p>' . $colonne . ' Colonnes</p>' ?>
                    <?php echo '<p>' . $espace . ' Espaces</p>' ?>
                    <?php echo '<p>' . $motif . ' Motifs</p>' ?>
                </div>
                <div>
                    <?php
                    for ($j = 1; $j <= $ligne; $j++) {
                        for ($l = 1; $l <= $motif; $l++) {
                            for ($k = 1; $k <= $espace; $k++) {
                                echo '&nbsp';
                            }
                            if (($j == 1) || ($j == ($ligne))) {
                                for ($i = 1; $i <= $colonne; $i++) {
                                    echo '<img src= "MA_Route_30.svg.png" />';
                                }
                            } else {
                                echo '<img src= "MA_Route_30.svg.png" />';
                                for ($i = 1; $i <= ($colonne - 2); $i++) {
                                    echo '<span></span>';
                                }
                                echo '<img src= "MA_Route_30.svg.png" />';
                            }
                        }
                        echo '<br>';
                    }
                    ?>
                </div>
            </article>
        </section>
    </main>
</body>

</html>