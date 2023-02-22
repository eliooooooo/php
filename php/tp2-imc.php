<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Calculateur d'IMC</title>
</head>

<body>
    <main>
        <?php
        if (isset($_POST['valider'])) { // Le tableau $_POST contient toutes les valeures transmises en POST
            $nb1 = $_POST['prenom'];
            $nb2 = $_POST['taille'];
            $nb3 = $_POST['poids'];
        }
        ?>
        <section>
            <h1>Bonjour <?php echo $nb1; ?> !</h1>
            <article>
                <div>
                    <?php

                    $imc = $nb3 / $nb2 ** 2;
                    echo '<p>' . $nb1 . ', vous avez un IMC de ' . number_format($imc, 1) . '</p>';
                    if ($imc < 18.5) {
                        echo 'Vous êtes en sous nutrition !';
                    } elseif ($imc < 24.9) {
                        echo 'Vous avez un IMC normal';
                    } elseif ($imc < 29.9) {
                        echo 'Vous êtes en eccès de poids !';
                    } else {
                        echo 'Vous êtes en obésité !';
                    }
                    ?>
                </div>
            </article>
        </section>
    </main>
</body>

</html>