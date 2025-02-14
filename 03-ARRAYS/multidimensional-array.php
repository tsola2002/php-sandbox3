<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Array</title>
</head>

<body>
    <h1>Multidimensional Array</h1>
    <?php
        // CREATING A MULTIDIMENSIONAL ARRAY
    $flower_shop = array("category1" => array("Lotus", 12.50, 2, "shola"), "category2" => array("White Rose", 1.75, 15,"nkechi"),"category3" => array("red rose", 2.15, 8, "shuaibu")
    );


    //print_r($flower_shop);
    //var_dump($flower_shop);
    
    // var_dump($flower_shop['category2'][0]);

    // print_r($flower_shop['category3'][2]);
    
    $flower_shop["category2"][0] = "Lily";
    $flower_shop["category2"][1] = 10.0;
    $flower_shop["category2"][2] = 20;

    echo "<table border='1'>";
    echo "<caption><strong>Flower Shop</strong></caption>";
    echo "<tr>";
    echo "<th>Flower Name</th>";
    echo "<th>Price</th>";
    echo "<th>Quantity</th>";
    echo "</tr>";

    echo"<tr><td>";
    echo $flower_shop['category1'][0] . "</td>";
    echo "<td>" . $flower_shop['category1'][1] . "</td>";
    echo "<td>" . $flower_shop['category1'][2] . "</td></tr>";
    echo "</tr>";
    echo "<tr><td>" . $flower_shop['category2'][0] . "</td>";
    echo "<td>" . $flower_shop['category2'][1] . "</td>";
    echo "<td>" . $flower_shop['category2'][2] . "</td></tr>";
    echo "<tr><td>" . $flower_shop['category3'][0] . "</td>";
    echo "<td>" . $flower_shop['category3'][1] . "</td>";
    echo "<td>" . $flower_shop['category3'][2] . "</td></tr>";

    echo "</table><br>";

    echo "The Array Count is: " . count($flower_shop) . "<br>";

    echo "The Sub Array Count is: " . count($flower_shop['category1']);

    ?>
</body>

</html>