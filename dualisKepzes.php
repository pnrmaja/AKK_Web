<?php

$DUALIS_KEPZES = require "includes/dualisKepzesAdatok.php";

?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Duális képzés - Szalézi AKK</title>

    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <?php include "includes/nav.php"; ?>

    <main>

        <h1>Duális képzés</h1>

        <div id="dualis-tartalom">

            <?php foreach ($DUALIS_KEPZES as $elem): ?>

                <section class="informacio">

                    <h2>
                        <?= htmlspecialchars($elem["cim"]) ?>
                    </h2>

                    <p>
                        <?= htmlspecialchars($elem["szoveg"]) ?>
                    </p>

                </section>

            <?php endforeach; ?>

        </div>

    </main>

</body>

</html>