<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php

    $names = ['Baptise', 'Jean', 'Marie','Jeanne','Joséphine','Marc','Bastien','Elise','Chris','Lana'];

    $arrayLength = count($names);

    // On boucle autant de fois qu'il y a d'éléments dans l'array $names.
    for($i = 0; $i < count($names); $i++) {
        echo '<li>' . $names[$i] . '</li>';
    }

    ?>
    </ul>
</body>
</html>