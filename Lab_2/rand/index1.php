<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        function generate(){
            echo "<table cellspacing = 0>";
            for($col = 0;$col<10;$col++){
                echo "<tr>";
                for($row = 0;$row<10;$row++){
                    echo "<td>";
                    echo randomNumbers();
                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</table";
        }
        generate();
        function randomNumbers(){
            $numbers = rand(10,99);
            echo $numbers;
        }
    ?>
</body>
</html>