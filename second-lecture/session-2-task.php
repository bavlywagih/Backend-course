<?php

echo "<h1>task 1</h1>";
echo "<pre>
give an array and find the largest and the smallest number in the array

example: [10, 33, 1222, 4444, 0, -1111]

=> largest: 4444
=> smallest: -1111
</pre>";


$numbers = [10, 33, 1222, 4444, 0, -1111];

$max = $numbers[0];
$min = $numbers[0];

$i = 1;
while ($i < count($numbers)) {

    if ($numbers[$i] > $max){
        $max = $numbers[$i];
    }
    if ($numbers[$i] < $min){
        $min = $numbers[$i];
    }

    $i++;
}

echo "max is " . $max . " min is " . $min ;

echo "</br> <h4> ternary operator </h4>   ";

while ($i < count($numbers)) {
    $numbers[$i] > $max ? $max = $numbers[$i] : null;
    $numbers[$i] < $min ? $min = $numbers[$i] : null;
    $i++;
}

echo "max is " . $max . " min is " . $min;


echo "<h1>task 2</h1>";

echo "<pre>
Write a program to find the sum of all numbers from 1 to 1000 that meet all of the following conditions:
=> The number must be a multiple of 3 or 5.
=> The number must not be a multiple of 7.
=> The number must be greater than 50 and less than 500
</pre>";


for ($i=1; $i <= 1000 ; $i++) {
    if ( $i > 50 && $i < 500 && $i % 3 == 0 && $i % 5 == 0 && $i % 7 != 0 ){
        echo $i . " , ";
    }
    
}

echo "</br> <h4> ternary operator </h4>   ";

for ($i = 1; $i <= 1000; $i++) {
    $i > 50 && $i < 500 && $i % 3 == 0 && $i % 5 == 0 && $i % 7 != 0 ? print($i . " , ") : null;
}