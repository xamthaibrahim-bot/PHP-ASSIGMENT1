<?php

echo "<h2>PHP Assignment</h2>";

/* Question 1 */

echo "<h3>Question 1</h3>";

$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

echo "All elements: ";

foreach ($numbers as $number) {
    echo $number . " ";
}

$total = 0;
$evenTotal = 0;
$oddTotal = 0;

foreach ($numbers as $number) {

    $total = $total + $number;

    if ($number % 2 == 0) {
        $evenTotal = $evenTotal + $number;
    } else {
        $oddTotal = $oddTotal + $number;
    }
}

echo "<br>Total = " . $total;
echo "<br>Total of even elements = " . $evenTotal;
echo "<br>Total of odd elements = " . $oddTotal;

$min = min($numbers);
$max = max($numbers);

echo "<br>Minimum = " . $min;
echo "<br>Maximum = " . $max;

echo "<br>Minimum positions: ";

foreach ($numbers as $key => $value) {
    if ($value == $min) {
        echo $key . " ";
    }
}

echo "<br>Maximum positions: ";

foreach ($numbers as $key => $value) {
    if ($value == $max) {
        echo $key . " ";
    }
}


/* Question 2 */

echo "<hr>";
echo "<h3>Question 2</h3>";

$colors = array(
    "Light" => array(
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ),

    "Normal" => array(
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ),

    "Dark" => array(
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    )
);

foreach ($colors as $row => $columns) {

    echo $row . ": ";

    foreach ($columns as $color => $value) {
        echo $value . " | ";
    }

    echo "<br>";
}


/* Question 3 */

echo "<hr>";
echo "<h3>Question 3</h3>";

$array = array(
    array(2, -6, 8),
    array(-6, 1, 6),
    array(7, 8, -6)
);

echo "Array:<br>";

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {
        echo $array[$i][$j] . " ";
    }

    echo "<br>";
}

$oddTotal = 0;
$evenTotal = 0;
$allTotal = 0;

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        $value = $array[$i][$j];

        $allTotal = $allTotal + $value;

        if ($value % 2 == 0) {
            $evenTotal = $evenTotal + $value;
        } else {
            $oddTotal = $oddTotal + $value;
        }
    }
}

echo "Total of odd elements = " . $oddTotal . "<br>";
echo "Total of even elements = " . $evenTotal . "<br>";

echo "<br>Total of each row:<br>";

for ($i = 0; $i < 3; $i++) {

    $rowTotal = 0;

    for ($j = 0; $j < 3; $j++) {
        $rowTotal = $rowTotal + $array[$i][$j];
    }

    echo "Row " . ($i + 1) . " = " . $rowTotal . "<br>";
}

echo "<br>Total of each column:<br>";

for ($j = 0; $j < 3; $j++) {

    $columnTotal = 0;

    for ($i = 0; $i < 3; $i++) {
        $columnTotal = $columnTotal + $array[$i][$j];
    }

    echo "Column " . ($j + 1) . " = " . $columnTotal . "<br>";
}

$diagonal1 = $array[0][0] + $array[1][1] + $array[2][2];
$diagonal2 = $array[0][2] + $array[1][1] + $array[2][0];

echo "<br>First diagonal = " . $diagonal1;
echo "<br>Second diagonal = " . $diagonal2;

echo "<br>Total of all elements = " . $allTotal;

$min = $array[0][0];
$max = $array[0][0];

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($array[$i][$j] < $min) {
            $min = $array[$i][$j];
        }

        if ($array[$i][$j] > $max) {
            $max = $array[$i][$j];
        }
    }
}

echo "<br>Minimum = " . $min;

echo "<br>Minimum positions: ";

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($array[$i][$j] == $min) {
            echo "(" . ($i + 1) . "," . ($j + 1) . ") ";
        }
    }
}

echo "<br>Maximum = " . $max;

echo "<br>Maximum positions: ";

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($array[$i][$j] == $max) {
            echo "(" . ($i + 1) . "," . ($j + 1) . ") ";
        }
    }
}


/* Question 4 */

echo "<hr>";
echo "<h3>Question 4</h3>";

$students = array(

    "CA221" => array(
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ),

    "CA223" => array(
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ),

    "CA221-2" => array(
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    )
);

echo "<table border='1' cellpadding='8'>";

echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";

foreach ($students as $id => $student) {

    echo "<tr>";

    echo "<td>" . $id . "</td>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Phone"] . "</td>";
    echo "<td>" . $student["Address"] . "</td>";

    echo "</tr>";
}

echo "</table>";


/* Question 5 */

echo "<hr>";
echo "<h3>Question 5</h3>";

$transcript = array(

    "Semester 1" => array(

        "subject1" => array(9, 26, 10, 40, 85, "Pass"),
        "subject2" => array(9, 26, 10, 40, 85, "Pass"),
        "subject3" => array(9, 26, 10, 40, 85, "Pass")

    ),

    "Semester 2" => array(

        "subject1" => array(9, 26, 10, 0, 45, "Fail"),
        "subject2" => array(9, 26, 10, 40, 85, "Pass"),
        "subject3" => array(9, 26, 10, 40, 85, "Pass")

    )
);

echo "<table border='1' cellpadding='8'>";

echo "<tr>";
echo "<th>Semester</th>";
echo "<th>Course</th>";
echo "<th>CW1</th>";
echo "<th>MidTerm</th>";
echo "<th>CW2</th>";
echo "<th>Final</th>";
echo "<th>Total</th>";
echo "<th>Status</th>";
echo "</tr>";

foreach ($transcript as $semester => $courses) {

    foreach ($courses as $course => $marks) {

        echo "<tr>";

        echo "<td>" . $semester . "</td>";
        echo "<td>" . $course . "</td>";
        echo "<td>" . $marks[0] . "</td>";
        echo "<td>" . $marks[1] . "</td>";
        echo "<td>" . $marks[2] . "</td>";
        echo "<td>" . $marks[3] . "</td>";
        echo "<td>" . $marks[4] . "</td>";
        echo "<td>" . $marks[5] . "</td>";

        echo "</tr>";
    }
}

echo "</table>";

?>