<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for ($i=0; $i < 10; $i++) { ?>
            <br>
            <?php
            for ($j=0; $j < 10 ; $j++) { 
                if ($j % 2 == 0) {
                    echo "x";
                } else {
                   echo "o";
                }
            }
        }

    ?>





</body>
</html>
