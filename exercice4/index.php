<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>exercice 4</h1>
        <ul>
            <?php

            $i = 0;

            while($i < 5000){

            echo '<li>' . ($i+1) . '</li>';

            $i++;

            }

            ?>
        </ul>

</body>
</html>