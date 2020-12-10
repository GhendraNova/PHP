<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $names = ['Baptise', 'Jean', 'Marie','Jeanne','Joséphine','Marc','Bastien','Elise','Chris','Lana'];

    echo '<pre> <ul>';
    print_r($names);

    for($names = 0; $names > 10; $names++) {

        echo '<li>' . ($names) . '</li>';
    }
    echo '</ul> </pre>';

    ?>
</body>
</html>