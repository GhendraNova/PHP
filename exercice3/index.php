<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $admin = false;
    ?>
    <h1>exercice 3</h1>

    <style>
    .error {
        color: red;
        font-weight: bold;
    }
    </style>

    <?php

    if($admin) {
        ?>
        <p>Bonjour Admin clique <a href="#">sur ce lien</a> pour gérer le site </p>
        <?php

    } else {
        ?>
        <p class="error">Vous n'etes pas admin</p>

        <?php
}
        ?>
</body>
</html>