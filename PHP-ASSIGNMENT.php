<?php

echo "<h1>PHP Assignment 1</h1>";


// ==============================
// QUESTION 1
// Greatest and Smallest
// ==============================

echo "<h2>Question 1: Greatest and Smallest</h2>";

$a = 25;
$b = 10;
$c = 40;

$greatest = $a;
$smallest = $a;

if ($b > $greatest) {
    $greatest = $b;
}

if ($c > $greatest) {
    $greatest = $c;
}

if ($b < $smallest) {
    $smallest = $b;
}

if ($c < $smallest) {
    $smallest = $c;
}

echo "Numbers: $a, $b, $c<br>";
echo "Greatest = $greatest<br>";
echo "Smallest = $smallest";


// ==============================
// QUESTION 2
// Divisible by 3 and 5
// ==============================

echo "<h2>Question 2: Divisibility</h2>";

$number = 15;

if ($number % 3 == 0 && $number % 5 == 0) {

    echo "$number is divisible by both 3 and 5.";

} elseif ($number % 3 == 0) {

    echo "$number is divisible by 3.";

} elseif ($number % 5 == 0) {

    echo "$number is divisible by 5.";

} else {

    echo "$number is divisible by neither 3 nor 5.";

}


// ==============================
// QUESTION 3
// Odd 2 to 20
// Even 35 to 7
// ==============================

echo "<h2>Question 3: Odd and Even Numbers</h2>";

echo "Odd numbers from 2 to 20: ";

for ($i = 2; $i <= 20; $i++) {

    if ($i % 2 != 0) {
        echo $i . " ";
    }

}

echo "<br>";

echo "Even numbers from 35 to 7: ";

for ($i = 35; $i >= 7; $i--) {

    if ($i % 2 == 0) {
        echo $i . " ";
    }

}


// ==============================
// QUESTION 4
// Divisible by 2 and 5
// From 50 to 2
// ==============================

echo "<h2>Question 4: Divisible by 2 and 5</h2>";

for ($i = 50; $i >= 2; $i--) {

    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }

}


// ==============================
// QUESTION 5
// Reverse Number
// Without strrev()
// ==============================

echo "<h2>Question 5: Reverse of a Number</h2>";

$number = 12345;
$reverse = 0;
$temp = $number;

while ($temp > 0) {

    $digit = $temp % 10;

    $reverse = ($reverse * 10) + $digit;

    $temp = (int)($temp / 10);
}

echo "Original number = $number<br>";
echo "Reverse = $reverse";


// ==============================
// QUESTION 6
// LCM
// ==============================

echo "<h2>Question 6: LCM</h2>";

$num1 = 8;
$num2 = 12;

if ($num1 > $num2) {
    $lcm = $num1;
} else {
    $lcm = $num2;
}

while (true) {

    if ($lcm % $num1 == 0 && $lcm % $num2 == 0) {
        break;
    }

    $lcm++;
}

echo "LCM of $num1 and $num2 = $lcm";


// ==============================
// QUESTION 7
// HCF
// ==============================

echo "<h2>Question 7: HCF</h2>";

$num1 = 18;
$num2 = 24;

$a = $num1;
$b = $num2;

while ($b != 0) {

    $remainder = $a % $b;

    $a = $b;

    $b = $remainder;
}

echo "HCF of $num1 and $num2 = $a";


// ==============================
// QUESTION 8
// Multiplication Table 12 x 12
// Using Nested Loops
// ==============================

echo "<h2>Question 8: Multiplication Table</h2>";

echo "<table border='1' cellpadding='8' cellspacing='0'>";

for ($i = 1; $i <= 12; $i++) {

    echo "<tr>";

    for ($j = 1; $j <= 12; $j++) {

        echo "<td>";
        echo $i * $j;
        echo "</td>";

    }

    echo "</tr>";
}

echo "</table>";


// ==============================
// QUESTION 9
// Prime or Non-Prime
// ==============================

echo "<h2>Question 9: Prime or Non-Prime</h2>";

$number = 29;

$isPrime = true;

if ($number < 2) {

    $isPrime = false;

} else {

    for ($i = 2; $i < $number; $i++) {

        if ($number % $i == 0) {

            $isPrime = false;

            break;
        }
    }
}

if ($isPrime) {

    echo "$number is a prime number.";

} else {

    echo "$number is a non-prime number.";
}


// ==============================
// QUESTION 10
// Prime Numbers from 10 to 50
// ==============================

echo "<h2>Question 10: Prime Numbers from 10 to 50</h2>";

for ($number = 10; $number <= 50; $number++) {

    $isPrime = true;

    if ($number < 2) {

        $isPrime = false;

    } else {

        for ($i = 2; $i < $number; $i++) {

            if ($number % $i == 0) {

                $isPrime = false;

                break;
            }
        }
    }

    if ($isPrime) {

        echo $number . " ";
    }
}

?>