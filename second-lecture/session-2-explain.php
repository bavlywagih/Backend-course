<?php

// gender = male and age >= 18

echo "</br> task 1 </br>";
echo "gender = male and age >= 18 </br>";

$gender = "male";
$age = 18;

if ($gender === "male" && $age >= 18){
    echo "your are succeed" ;
}else{
    echo "you can not access";
}


// Rewrite the above code using only ternary operators (? :) instead of if / else.
echo "</br></br> task 2 </br>";
echo " Rewrite the above code using only ternary operators (? :) instead of if / else. </br>";

$a = 30;
$b = 20;
$c = 10;
//  If Conditions
echo "  If Conditions </br>";

if ($a + $b === $c) {

    echo "A + B = C";
} elseif ($a + $c === $b) {

    echo "A + C = B";
} elseif ($b + $c === $a) {

    echo "B + C = A";
} else {

    echo "The End";
}
// ternary operator
echo "</br> </br> ternary operator </br>";

$a + $b === $c ? print("A + B = C") : ($a + $c === $b ? print("A + C = B")  : ($b + $c === $a ? print("B + C = A") : print("The End")));


// prints all numbers from 10 down to 0, subtracting 1 on each iteration. Use a for loop and print each number followed by a line break.
echo "</br> </br> task 3 </br>";
echo "prints all numbers from 10 down to 0, subtracting 1 on each iteration. Use a for loop and print each number followed by a line break. </br>";


$i = 10;
while ($i>=0 ){
    echo $i;
    echo "</br>";
    $i--;
}

// Write a PHP script that prints all numbers from 0 up to 20, adding 1 on each iteration.

// ✅ Use a for loop.

// ✅ Print each number followed by a line break (<br>).

// ✅ Make sure the output starts from 0 and ends with 20.

echo "</br> task 4 </br>";
echo " Write a PHP script that prints all numbers from 0 up to 20, adding 1 on each iteration. </br> ✅ Use a for loop.</br> ✅ Print each number followed by a line break.</br> ✅ Make sure the output starts from 0 and ends with 20. ";



for ($i = 0; $i <= 20; $i += 2) {
    echo $i . "<br>";
}



echo "</br> task 5";
echo "<p> Bear Limak wants to become the largest of bears, or at least to become larger than his brother Bob.
Right now, Limak and Bob weigh 4 KG and 10 KG respectively. It's guaranteed that Limak's weight is smaller than or equal to his brother's weight.
Limak eats a lot and his weight is tripled after every year, while Bob's weight is doubled after every year.
After how many full years will Limak become strictly larger (strictly heavier) than Bob? </p> ";




$small_bear  = 4;
$big_bear  = 10 ;
$i = 0;

if($small_bear  >= $big_bear ){
    echo "already small_bear is bigger than big_bear ";
}
else{
    while ($small_bear  <= $big_bear  ){
        $small_bear  *= 3 ;
        $big_bear  *= 2 ;
        $i++;
        echo "small_bear  is " . $small_bear  . "</br> big_bear  is " . $big_bear  . "</br> and years is " . $i . "</br> </br>";
    }
}

echo "Number of years" . $i ; 

?>


