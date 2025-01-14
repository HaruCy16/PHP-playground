<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action = "index.php" method = "post" enctype = "multipart/form-data">
            <label>Quantity;</label><br>
            <input type="text" name="quantity"><br>
            <input type="submit" value="Submit">
        </form>
</body>
</html> 
<?php
    $num1 = 10;
    $num2 = 20;

    echo "Sum: ". ($num1 + $num2);
    echo "<br>";
    echo "Difference: ". ($num1 - $num2);
    echo "<br>";
    echo "Product: ". ($num1 * $num2);
    echo "<br>";
    echo "Quotient: ". ($num1 / $num2);
    echo "<br>";
    echo "Remainder: ". ($num1 % $num2);

    echo var_dump($num2);

    $name = "Cy";

    function displayName(){
        global $name;
        echo "<p>My name is $name</p>";
    }

    displayName();

    function counter(){
        static $count = 0;
        $count++;
        echo $count;
    }

    counter();
    counter();
    counter();
    counter();

    $cars = array("Toyota", "Honda", "BMW");
    var_dump($cars);

    $age = array(
        "John" => 30,
        "Jane" => 25,
        "Mike" => 35
    );
        
    echo $age["John"];

    define("myName", "Cyrus Wilson");
    echo myName;

    //IF STATEMENTS
    $age = 74;
    // $ageString = "20";
    if ($age == 18 xor $age >= 19 ){
        echo "Eligible";
    } else {
        echo "Not eligible";
    }

    //shorthands

    $a = 30;

    if ($a > 20) $x="Okay";
    echo $x;
?>