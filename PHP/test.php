<?php
    $numbers = [1, 2, 3, 4, 5, 6];
    $sum = array_reduce($numbers, function ($number, $item) {

        print_r($number . 'number');

        print_r($item . 'item');
        echo "<br>";
        return $number + $item;
    }, 0);
    echo "The sum is: " . $sum; // Output: The sum is: 21
    echo "<br>";
?>