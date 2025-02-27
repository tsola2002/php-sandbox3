<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h1>Working With Functions in PHP</h1>

    <?php
    //BUILT IN FUNCTIONS
    //phpinfo();
    
    $numbers = array(1, 2, 3, 4, 5, 6);

    $randomNumbers = array_rand($numbers);

    //print_r($randomNumbers);

    // DATE FUNCTIONS
    echo date('l') . "<br>";
    echo date(" l dS \of F Y h :i :s A") . "<br>";

    // TIME FUNCTIONS
    echo "The time now is: " . time() . "<br>";

    // CALENDAR FUNCTIONS
    $week = cal_to_jd(CAL_GREGORIAN, date("d"), date("m"),date("y"));

    echo $week . "<br>";

    $info = cal_info(0);
    print_r($info) ;

    //USER DEFINED FUNCTIONS
    function add( $x, $y){
       return $x + $y;
    }

    $result = add(5, 5);

    echo "<br> Result of Addition is: " . $result . "<br>";

    function calc_tax($product_category, $product_name, $price)
    {
        if ($product_category == "Mobile") {
            $total_price = (17.5 / 100) * $price + $price;

            echo "Total price of " . $product_name . " is: $" . $total_price . "<br>";
        }

    if($product_category=="Medicine"){
            $total_price=$price;
            echo "Total price of " .$product_name ." is: $" .$total_price."<br>";
        }
           

    }

    // $product_category="Medicine";
    // calc_tax($product_category,"Paracetamol",8000);

    $product_category="Mobile";
calc_tax($product_category,"GV3",3000);



    ?>
</body>
</html>