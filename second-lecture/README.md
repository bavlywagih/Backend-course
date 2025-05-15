# PHP Basic Practice Tasks

This repository contains simple PHP scripts that demonstrate the use of conditionals, loops, ternary operators, and logical comparisons.

---

## 📚 Lecture Info

- Course: Backend Course  
- Lecture:second Lecture  
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

### Task 1: Gender & Age Access Check

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

### Task 2: Arithmetic Conditions — If vs. Ternary

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

### Task 3: Countdown from 10 to 0

Using a while loop:

```php
$i = 10;
while ($i >= 0) {
    echo $i . "<br>";
    $i--;
}
```

---

### Task 4: Count from 0 to 20

Using a for loop:

```php
for ($i = 0; $i <= 20; $i++) {
    echo $i . "<br>";
}
```

(✔ Note: Incremented by 1 to include all numbers between 0 and 20.)

---

### Task 5: Limak vs Bob — The Bear Weight Problem

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

## 🛠️ How to Run These Scripts

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

## 🌐 Author

Instructor: [Your Name]  
GitHub: https://github.com/your-username  

---

Happy Coding! 🚀
