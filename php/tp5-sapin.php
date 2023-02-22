<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Générateur de sapin aléatoire</title>
</head>

<body>

    <?php
    function etoile()
    {
        echo '<font color="darkgoldenrod">*</font><br>';
    }

    function tronc()
    {
        echo '<font color="brown">[__]</font><br>';
    }

    function ligne($l)
    {
        echo '<font color="green">/</font>';
        if ($l % 2 == 0) {
            for ($i = 0; $i < $l; $i++) {
                $rdm = random_int(1, 3);
                if ($rdm == 1) {
                    echo '<font color="red">o</font>';
                } else {
                    echo '<font color="green">_</font>';
                }
                if ($i != ($l - 1)) {
                    echo '<font color="green">/</font>';
                }
            }
        } else {
            for ($i = 0; $i < $l; $i++) {
                $rdm = random_int(1, 3);
                if ($rdm == 1) {
                    echo '<font color="blue">o</font>';
                } else {
                    echo '<font color="green">_</font>';
                }
                if ($i != ($l - 1)) {
                    echo '<font color="green">\\</font>';
                }
            }
        }
        echo '<font color="green">\\</font><br>';
    }

    function espaces($n)
    {
        for ($i = 0; $i < $n - 1; $i++) {
            echo '&nbsp';
        }
    }

    function niveaux($k)
    {
        for ($i = 1; $i < $k; $i++) {
            // espaces($k - $i);
            ligne($i);
        }
    }

    function sapin($k)
    {
        echo '<br>';
        // espaces($k);
        etoile();
        niveaux($k);
        // espaces($k);
        tronc();
    }

    if (isset($_POST['valider'])) { // Le tableau $_POST contient toutes les valeures transmises en POST
        $nb1 = $_POST['etages'];
    }

    ?>
    <main>
        <section>
            <h1>Voici votre sapin de <?php echo $nb1; ?> étages !</h1>
            <article>
                <div>
                    <?php
                    if ($nb1 > 30) {
                        echo 'Ton sapin est beaucoup trop grand !!';
                    } else {

                        sapin($nb1);
                    }

                    ?>
                </div>
            </article>
        </section>
    </main>
</body>

</html>