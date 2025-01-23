<?php
require_once(__DIR__ . '/oeuvres.php');
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<body>

    <?php require_once(__DIR__ . '/header.php'); ?>

    <main>

        <?php $identifiant = $_GET['id']; ?>

        <?php foreach ($oeuvres as $oeuvre) : ?>

            <?php if (array_key_exists('id', $oeuvre) && ($oeuvre['id'] == $identifiant)) : ?>

                <article id="detail-oeuvre">
                    <div id="img-oeuvre">
                        <img src=" <?php echo $oeuvre['image']  ?>" />
                    </div>
                    <div id="contenu-oeuvre">
                        <h1><?php echo $oeuvre['title']; ?></h1>
                        <p class="description"><?php echo $oeuvre['description']; ?></p>
                        <p class="description-complete"><?php echo $oeuvre['description-complete']; ?>

                        </p>
                    </div>
                </article>

            <?php endif ?>
        <?php endforeach ?>



    </main>

    <?php require_once(__DIR__ . '/footer.php'); ?>

</body>

</html>