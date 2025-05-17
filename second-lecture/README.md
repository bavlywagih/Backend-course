# PHP Basic Practice Tasks

This repository contains simple PHP scripts that demonstrate the use of conditionals, loops, ternary operators, and logical comparisons.

---

## 📚 Lecture Info

- Course: Backend Course  
- Lecture: Second Lecture  
- Date: 15-05-2025  

---

## 🧠 What You'll Learn

By reading and running these scripts, you'll gain practice in:

- Using if/else statements
- Rewriting conditions with ternary operators
- Working with for and while loops
- Building logic to compare and manipulate numeric values
- Real-world problem solving with math logic

---

## ✅ Tasks Breakdown

### Task 1 (session-explain) : Gender & Age Access Check

Check if a person is male and at least 18 years old:

```php
$gender = "male";
$age = 18;

if ($gender === "male" && $age >= 18){
    echo "you are succeed";
} else {
    echo "you can not access";
}
```

---

### Task 2 (session-explain): Arithmetic Conditions — If vs. Ternary

Check which pair of variables sums up to the third:

🟩 If / Else Version:

```php
$a = 30;
$b = 20;
$c = 10;

if ($a + $b === $c) {
    echo "A + B = C";
} elseif ($a + $c === $b) {
    echo "A + C = B";
} elseif ($b + $c === $a) {
    echo "B + C = A";
} else {
    echo "The End";
}
```

🟨 Ternary Operator Version:

```php
$a + $b === $c
    ? print("A + B = C")
    : ($a + $c === $b
        ? print("A + C = B")
        : ($b + $c === $a
            ? print("B + C = A")
            : print("The End")));
```

---

### Task 3 (session-explain) : Countdown from 10 to 0

Using a while loop:

```php
$i = 10;
while ($i >= 0) {
    echo $i . "<br>";
    $i--;
}
```

---

### Task 4 (session-explain): Count from 0 to 20

Using a for loop:

```php
for ($i = 0; $i <= 20; $i++) {
    echo $i . "<br>";
}
```

(✔ Note: Incremented by 1 to include all numbers between 0 and 20.)

---

### Task 5 (session-explain): Limak vs Bob — The Bear Weight Problem

Limak's weight triples yearly, Bob's doubles. How many years until Limak > Bob?

```php
$small_bear = 4;
$big_bear = 10;
$i = 0;

if ($small_bear >= $big_bear) {
    echo "already small_bear is bigger than big_bear";
} else {
    while ($small_bear <= $big_bear) {
        $small_bear *= 3;
        $big_bear *= 2;
        $i++;
        echo "small_bear is " . $small_bear . "<br>big_bear is " . $big_bear . "<br>and years is " . $i . "<br><br>";
    }
}

echo "Number of years: " . $i;
```

---

### Task 6: Find Max and Min in an Array
🟩 if condition and 🟨ternary operator

```php
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

$i = 1; // Reset index
while ($i < count($numbers)) {
    $numbers[$i] > $max ? $max = $numbers[$i] : null;
    $numbers[$i] < $min ? $min = $numbers[$i] : null;
    $i++;
}

echo "max is " . $max . " min is " . $min;
```

---

### Task 7: Filter and Sum Numbers Between 1 to 1000
🟩 if condition and 🟨ternary operator
```php
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
```

---

## 🌐 How to Run These Scripts

1. Save all code into a single `index.php` file or split into sections.
2. Use a local PHP server such as XAMPP, WAMP, or MAMP.
3. Access in browser at http://localhost/index.php
4. Make sure HTML tags like `<br>` render properly in browser output.

---

## 💡 GitHub Commands Reference

```bash
git init
git status
git add .
git commit -m "Initial commit"
git branch -m main
git remote add origin https://github.com/your-username/your-repo-name.git
git push -u origin main
```

---



Happy Coding! 🚀
