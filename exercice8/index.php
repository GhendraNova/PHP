<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $userInfos = [
        [
            'name' => 'Jean',
            'birthdate' => '14/03/2000'
        ],
        [
            'name' => 'Marc',
            'birthdate' => '15/08/1967'
        ],
        [
            'name' => 'Sophie',
            'birthdate' => '12/11/1987'
        ],
        [
            'name' => 'Marie',
            'birthdate' => '27/01/1956'
        ],
        [
            'name' => 'Joseph',
            'birthdate' => '31/12/2003'
        ],
    ];

    foreach($userInfos as $info){
        echo '<h2>' . $info['name'] . '</h2>';
        echo '<p> Bonjour je m\'appelle ' . $info['name'] . ' et je suis né le ' . $info['birthdate'] . '</p>';
    }

    ?>
</body>
</html>