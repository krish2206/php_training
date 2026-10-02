<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Krish Makariye</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
        echo "\n Hello, World!<br> ";
        $language= "PHP";
        echo "this code is written in " .$language;

        $var1= 30;
        $var2= 20;
        $sum= $var1 + $var2;
        echo "<br> The sum of " .$var1. " and " .$var2. " is " .$sum. ".";

        echo"<br>";
        echo(max(0, 150, 30, 20, -8, -200));
        
        echo"<br>";
        echo(abs(-6.7));


        echo"<br>";
        echo(round(3.60));

        echo"<br>";
        echo(round(0.59));

        $cars= array("Volvo", "BMW", "Toyota");
        echo"<br>";
        echo "I like " .$cars[0]. ", " .$cars[1]. " and " .$cars[2]. ".";
    ?>
</body>
</html>