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

    

?>