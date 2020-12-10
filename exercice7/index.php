<?php

    $info = [
        'name' => 'Jacques',
        'age'  => '54',
        'location' => 'UK',
        'eye-color' => 'Bleu',
        'salary' => '1305£'
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo '<pre>';
    print_r($info);
    echo '</pre>';

    ?>
</body>
</html>