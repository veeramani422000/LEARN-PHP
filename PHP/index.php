<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Document</title>
</head>
<body>
<!-- Syntax -->
    <?php
    echo "Hello World <br>";
    ?>
<!-- Note: However; all variable names are case-sensitive! -->
    <?php
    $color = "red";
    echo "My car is " . $color . "<br>";
    // echo "My house is " . $COLOR . "<br>";
    // echo "My boat is " . $coLOR . "<br>";
    ?>

<!-- Creating (Declaring) PHP Variables -->
<!-- In PHP, a variable starts with the $ sign, followed by the name of the variable: -->
    <?php
    $text ="php";
    echo "I Leaning $text! <br>";
    echo "I love " . $text . "! <br>";
    $x = 5;
    $y = 4;
    echo $x + $y;
    ?>
<!-- PHP Variables Scope (local, global, static)-->
<!-- Global Scope -->
    <?php
    $x = 5; // global scope

    function myTest1() {
    // echo "<p> Variable x inside function is: $x</p>";
    }
    myTest1();

    echo "<p>Variable x outside function is: $x</p>";
    ?>

<!-- Local Scope -->
    <?php
    function myTest2() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
    }
    myTest2();

    echo "<p>Variable x outside function is: $x</p>";
    ?>

<!-- PHP The global Keyword -->
    <?php
    $x = 5;
    $y = 10;

    function myTest3() {
    global $x, $y;
    $y = $x + $y;
    }

    myTest3();
    echo $y; // outputs 15
    echo "<br>";
    ?>

<!-- PHP The static Keyword -->
    <?php
    function myTest() {
    static $x = 0;
    echo $x;
    $x++;
    }

    myTest();
    echo "<br>";
    myTest();
    echo "<br>";
    myTest();
    echo "<br>";
    ?>

<!-- PHP Data Types -->
<!-- String("A string is a sequence of characters, enclosed in single or double quotes") -->
<!-- Integer("positive and negative Numbers") -->
<!-- Float (or Double)("decimal points") -->
<!-- Boolean("true or false values") -->
<!-- Array("An array is a data structure that can hold multiple values") -->
<!-- Object("Objects are instances of classes and are used in object-oriented programming. ") -->
<!-- Null("variable has no value") -->
<!-- Resource("external resources like database connections or file handles.") -->
    <?php
    $name = "John";
    $age = 25;
    $price = 19.99;
    $isRegistered = true;
    $fruits = ["apple", "banana", "cherry"];
    class Person {
        public $name;
        public $age;
    }

    $person = new Person();
    $person->name = "Alice";
    $person->age = 30;
    $result = null;
    // $file = fopen("example.txt", "r");
    ?>

<!-- PHP Strings -->
<h1>PHP Strings</h1>
<!-- strlen() - Return the Length of a String -->
<!-- str_word_count() - Count Words in a String -->
<!-- strrev() - Reverse a String -->
<!-- strpos() - Search For a Text Within a String -->
<!-- str_replace() - Replace Text Within a String -->
<?php
$word = "Hello My World!";
echo strlen("$word"); // outputs 12
echo "<br>";
echo str_word_count("$word"); // outputs 2
echo "<br>";
echo strrev("$word"); # !dlroW yM olleH
echo "<br>";
echo strpos("Hello world!", "world"); // outputs 6
echo "<br>";
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
echo "<br>";

?>

<!-- PHP Arrays (An array stores multiple values in one single variable) -->
<h1>PHP Indexed arrays</h1>
    <?php
    $fruits = ["apple", "banana", "cherry"];
    echo $fruits[0];   // Outputs "apple"
    echo "<br>";
    echo $arrlength = count($fruits);
    echo "<br>";

    // or
    $colors = array("red", "green", "blue");
    echo $colors[1];  // Outputs "green"
    echo "<br>";
    ?>

<!-- In PHP, there are three types of arrays:

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays -->

<!-- Associative Arrays: -->
<h1>Associative Arrays</h1>
    <?php
    $person = [
        "first_name" => "John",
        "last_name" => "Doe",
        "age" => 30
    ];
    echo $person["first_name"];  // Outputs "John"
    echo "<br>";
    echo $person["age"];  // Outputs "30"
    echo "<br>";

    ?>

<!-- Iterating Through Arrays: -->
<h1>Iterating Through Arrays</h1>
    <?php
    foreach($fruits as $fruit) {
        echo $fruit . " ";
        echo "<br>";
    } // Outputs: apple banana cherry
    ?>

<!-- Multidimensional Arrays: -->
<h1>Multidimensional Arrays</h1>
    <?php
    $matrix = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    echo $matrix[1][2];
    echo "<br>"; // Outputs 6
    ?>

<!-- Task: Create an indexed array of your favorite colors and then add a new color to the array. -->
<?php
$favorite_colors = ["red","blue","black","white"];
$favorite_colors[] = "yellow";
// print_r($favorite_colors);
foreach ($favorite_colors as $favorite_color) {
    echo $favorite_color . "<br>";
}
?>

<!-- PHP Array Functions -->
<h1>PHP Array Functions</h1>
<!-- count(): Count the number of elements in an array. -->
<!-- array_push(): Add one or more elements to the end of an array. -->
<!-- array_pop(): Remove and return the last element of an array. -->
<!-- array_unshift(): Add one or more elements to the beginning of an array. -->
<!-- array_shift(): Remove and return the first element of an array. -->
<!-- array_merge(): Merge one or more arrays into a single array. -->
<!-- array_keys(): Get an array of keys from an associative array. -->
<!-- array_filter(): Filters elements of an array using a callback function. -->
<!-- array_map(): Applies a callback function to each element of an array and returns a new array. -->
<!-- array_reduce(): Reduce an array to a single value using a callback function. -->
<!-- array_unique(): Remove duplicate values from an array. -->

    <?php
    $fruits = array("apple", "banana", "cherry");
    print_r ($fruits);
    echo "<br>";

    $count = count($fruits); // Returns the number of elements (3 in this case)
    echo "$count"; // 3
    echo "<br>";

    array_push($fruits, "orange", "grape");
    print_r($fruits); // $fruits = array("apple", "banana", "cherry", "orange", "grape");
    echo "<br>";

    $lastFruit = array_pop($fruits); // Return "grape"
    echo "$lastFruit"; // $fruits = array("apple", "banana", "cherry", "orange");
    echo "<br>";

    array_unshift($fruits, "strawberry", "kiwi");
    print_r($fruits);   // $fruits = array("strawberry", "kiwi", "apple", "banana", "cherry", "orange");
    echo "<br>";

    $firstFruit = array_shift($fruits);// Return "strawberry"
    echo "$firstFruit"; // $fruits = array("kiwi", "apple", "banana", "cherry", "orange");
    echo "<br>";

    $moreFruits = array("pineapple", "mango");
    $allFruits = array_merge($fruits, $moreFruits);
    print_r($allFruits);    // $fruits = array("kiwi", "apple", "banana", "cherry", "orange", "pineapple", "mango");
    echo "<br>";

    $person = ["name" => "John", "age" => 30, "city" => "New York"];
    $keys = array_keys($person);
    print_r($keys); // Output: Array ( [0] => name [1] => age [2] => city )
    echo "<br>";

    $numbers = [1, 2, 3, 4, 5, 6];
    $evenNumbers = array_filter($numbers, function ($number) {
        return $number % 2 == 0;
    });
    print_r($evenNumbers); // Output: Array ( [1] => 2 [3] => 4 [5] => 6 )
    echo "<br>";

    $squared = array_map(function ($value) {
        return $value * $value;
    }, $numbers);
    print_r($squared); // Output: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )
    echo "<br>";

    $sum = array_reduce($numbers, function ($number, $item) {
        print_r($number);
        print_r($item);
        return $number + $item;
    });
    echo "The sum is: " . $sum; // Output: The sum is: 21
    echo "<br>";

    $colors = ["red", "green", "blue", "red", "yellow"];
    $uniqueColors = array_unique($colors);
    print_r($uniqueColors); // Output: Array ( [0] => red [1] => green [2] => blue [4] => yellow )
    echo "<br>";
    ?>

    <!-- PHP Functions -->
    <h1>PHP Functions</h1>
    <!-- Function without Parameters and Return Value -->
    <!-- Function with Parameters and Return Value -->
    <!-- Function with Default Parameter -->
    <!-- Function with Variable Scope -->
    <!-- Function with an Array Parameter: -->
    <?php

    function sayHello() {
    echo "Hello, World!";
    }
    sayHello(); // Call the function // Hello, World!
    echo "<br>";

    function add($a, $b) {
        return $a + $b;
    }
    $result = add(3, 15); // Call the function // 18
    echo "The sum is: " . $result;
    echo "<br>";

    function greet($name = "World") {
        echo "Hello, $name!";
    }
    greet("Mani"); // Hello, Mani!
    echo "<br>";


    $x = 10; // Global variable
    function printX() {
        global $x; // Access the global variable
        echo "The value of x is: $x";
        echo "<br>";
    }
    printX();

    function findMax($numbers) {
        $max = max($numbers);
        return $max;
    }
    $arr = [4, 2, 9, 1, 7];
    $maxValue = findMax($arr);
    echo "The maximum value is: " . $maxValue;
    echo "<br>";

    ?>

    <!-- PHP Date and Time -->
    <h1>PHP Date and Time</h1>
    <!-- Getting the Current Date and Time: -->
    <?php
    $currentDate = date('d-m-Y'); // Get the current date in YYYY-MM-DD format
    $currentTime = date('H:i:s'); // Get the current time in 24-hour HH:MM:SS format
    echo "Current Date: $currentDate<br>";
    echo "Current Time: $currentTime<br>";
    echo "Today is " . date("l");

    ?>

</body>
</html>