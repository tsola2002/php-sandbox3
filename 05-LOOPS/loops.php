<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <h1>Working with loops in php</h1>
    <?php 
        // IF LOOP 
    $age = 15;
    // if($age > 18){
    //     echo "You're an Adult now";
    // } else {
    //     echo "You're not an adult yet";
    // }

    // if($age > 18){
    //     echo "You're an Adult now";
    // } elseif($age > 10) {
    //     echo "You're not an adult yet";
    // }

    //SWITCH STATEMENT
    // $day = 5;
    // switch($day) {
    //     case 1:
    //         echo "The day is sunday";
    //         break;
    //     case 2:
    //             echo "The day is monday";
    //             break;
    //     case 3:
    //             echo "The day is Tuesday";
    //             break;
    //     case 4:
    //             echo "The day is Wednesday";
    //             break;
    //     case 5:
    //             echo "The day is Thursday";
    //             break;
    //     case 6:
    //             echo "The day is Friday";
    //             break;
    //     case 7:
    //             echo "The day is Saturday";
    //             break;
    // }

    // WHILE LOOP
    // $count = 0;
    // while($count <= 10){
    //     echo "$count  times 12 is: " . $count * 12 . "<br>";
    //     $count++;
    // }

    // DO WHILE LOOP
    // $count = 0;
    // do{
    //     echo "$count  times 12 is: " . $count * 12 . "<br>";
    // }
    // while(++$count <=10)


    // FOR LOOPS 
    // for ($i = 1; $i <= 10; $i++){
    //     echo $i;
    //     echo "<br>";
    // }

    // FOR EACH LOOP
    // $books = array("Gone with the wind", "Harry Potter", "Peter Pan", "Things fall apart");

    // foreach($books as $val){
    //     echo $val;
    //     echo "<br>";
    // }
    
    $numbers = array(1,2,3,4);
    foreach($numbers as $num){
        $num = $num * 2;
        echo $num;
        echo "<br>";
    }

    ?>
</body>
</html>