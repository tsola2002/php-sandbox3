<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <h1>WORKING WITH VARIABLES</h1>
    <?php
        // STRING
        $name = "5";
        // NUMBER
        $num1 = 8;
        // BOOLEAN 
        $trueValue = true;
        // FLOAT 
        $pi = 3.14;

        $random = "234adff";

        $falsy = 1;

        // DATATYPE CONVERSIONS
        $convertName = (int)$name;

        $convertPi = (int)$pi;

        $convertNum1Float = (float)$num1;

        $convertFalsy = (bool)$falsy;

        $convertRandom = (int)$random;

    $convertNum1 = (string) $num1;

    var_dump($convertPi);
    //var_dump($convertNum1Float);
    //echo $convertNum1Float
   // var_dump($convertFalsy);
    //var_dump($convertRandom);
    //var_dump($convertName);
    //var_dump($convertNum1);



        //var_dump($name);
        //var_dump($num1);
        //echo $name;
        //echo $trueValue;
        // var_dump    ($trueValue);
        //var_dump($pi);
    ?>
</body>
</html>