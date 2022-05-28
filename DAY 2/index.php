<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>backend demo</title>
</head>
<body>
    <?php
        // To print to anything we useecho statement
        echo "<h1>hello world</h1>";
    ?>
    <?php
        // variable is declared starting with $ symbol
        $n = 6;
        echo "<ul>";
        for($i=1; $i<=10; $i++) {
            echo "<li>".$n." * ".$i." = ".$n*$i."</li>";
        }
        echo "</ul>";
    ?>

    <?php
        if($n%2 == 0)
            echo $n." is even number";
        else
            echo $n." is odd number";
    ?>


</body>
</html>



        