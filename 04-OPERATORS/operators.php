<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <h1>Operators in PHP</h1>
    <?php
        $var1 = 10;
        $var2 = 10;

    //ARITHMETIC OPERATORS 
    echo "Basic Addition: " . $var1 + $var2 . "<br>";
    echo "Basic Subtraction: " . $var1 - $var2 . "<br>";
    echo "Basic Multiplication: " . $var1 * $var2 . "<br>";
    echo "Basic Division: " . $var1 / $var2 . "<br>";
    echo "Basic Modulus: " . $var1 % $var2 . "<br>";

    // INCREMENT/DECREMENT OPERATORS
    $f = 2;
    echo "Post Increment  of 2: ". var_dump($f++) . "<br>";

    $e = 2;
    echo "Pre-Increment of 2: " . var_dump(++$e). "<br>". "<br>";

    $f = 4;
    echo "Post Decrement of 4: " . var_dump($f--). "<br>";

    $g = 4;
    echo "Pre Decrement of 4: " . var_dump(--$g). "<br>";

    // COMPARISON OPERATORS
    echo "loose equality operator: ";
    var_dump("a" == "a");
    echo "<br>";

    echo "greater than: ";
    var_dump($var1 > $var2);
    echo "<br>";

    echo "greater than and equal to: ";
    var_dump($var1 >= $var2);
    echo "<br>";

    echo "less than: ";
    var_dump($var1 < $var2);
    echo "<br>";

    echo "less than equal to: ";
    var_dump($var1 <= $var2);
    echo "<br>";

    //LOGICAL OPERATORS
    echo "and operator: ";
    $k = 1;
    $l = 1;
    $v = 0;
    var_dump($k && $l && $v);
    echo "<br>";

    echo "or operator: ";
    $a = 1;
    $b = 0;
    $c = 0;
    var_dump($a || $b || $c);
    echo "<br>";

    // ARRAY OPERATORS
    echo "<strong>Union of m and n: </strong>";

    $m = array("a" => "apple", "b" => "banana");
    $n = array("c" => "Orange", "d" => "Strawberry");

    $result = $m + $n;
    print_r($result);

    ?>

      
    <p>Plus Equals:
        <?php 
        // ASSIGNMENT OPERATORS  
            $a = 3;
        echo $a += 5; // $a = $a + 5
        ?>
    </p>

    <p>Minus Equals:
        <?php 
            $b = 5;
        echo $b -= 1; // $b = $b - 1
        ?>
    </p>

    <p>Multiply Equals:
        <?php 
            $c = 6;
        echo $c *= 3; // $c = $c * 3
        ?>
    </p>

    <p>Divide Equals:
        <?php 
            $d = 10;
        echo $d /= 2; // $d = $d / 2
        ?>
    </p>

    <p>Contenation Equals:
        <?php
            // STRING OPERATORS
            $e = "<strong>Hello</strong>";
        echo $e .= " There my friend";
        
        ?>
    </p>
</body>
</html>