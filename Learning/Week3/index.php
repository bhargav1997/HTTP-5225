<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3 - Learing PHP</title>
</head>
<body>
    <h1>Week 3 - Learing PHP</h1>


    <?php 
       $rand = rand(1, 10);

       echo $rand;

       echo "<br>";

        date_default_timezone_set("Canada/Eastern");

        echo date('d/m/Y');

        echo "<br>";

        echo date('h:i:s');

        echo "<br>";

        echo date('l');

        echo "<br>";
    ?>


    <h1> Magic Number </h1>

    <?php
        $number = rand(1, 100);

        if($number % 3 == 0 && $number % 5 == 0){
            echo "<p>FizzBuzz</p>";
        } elseif($number % 5 == 0){
            echo "<p>Buzzz</p>";
        } elseif($number % 3 == 0 ){
            echo "<p>Fizzz</p>";
        } else {
            echo "<p>The Magic Number : " . $number . "</p>";
        }
    ?>
</body>
</html>