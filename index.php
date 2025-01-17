<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Guide: PHP</title>
</head>
<body>
    <hr><hr>
    <!-- DEV: Below is the content for the webpage -->

    <h1>Quick Guide for PHP</h1>
    <?php
        // Uncomment the line below to refresh the page every 1 second, this happens on SERVER-SIDE
        // header("refresh: 1;");
        echo "<p>Using this mostly to keep track of what functions I learn!</p><hr>";
        echo "<p>Current PHP Version: " . phpversion() . "</p>";
        echo "<p>Current date and time: " . date("Y-m-d H:i:s") . "</p>";
    ?>
    <hr>
    <?php
        echo "<p>Let's do some math!</p>";
        echo "<p> Let x (denoted by \$x) = 5 and y (denoted by \$y) = 10</p>";
        $x = 5;
        $y = 10;
        echo "\$x + \$y = $x + $y = " . ($x + $y) . "<br>";
        echo "\$x - \$y = $x - $y = " . ($x - $y) . "<br>";
        echo "\$y - \$x = $y - $x = " . ($y - $x) . "<br>";
        echo "\$x * \$y = $x * $y = " . ($x * $y) . "<br>";
        echo "\$y * \$x = $y * $x = " . ($y * $x) . "<br>";
        
    ?>
</body>
</html>