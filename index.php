<?php
    $color = array('white', 'green', 'red') ;
    $color_together = implode(", ", $color);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ol type="A">
        <li>
            <?php
            echo $color_together;
            ?>
        </li>
        <li></li>
    </ol>
    <ul>
        <?php

            foreach ($color as $value) {
              echo "<li>$value</li> <br>";
            }
        ?>

    </ul>

</body>

</html>