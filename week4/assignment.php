<?php

// Assessment Question 1
echo "<body style='width:1350px; background-color:grey; padding:10px;'>";

echo "<h1 style='color:darkblue; text-align:center; font-family:verdana; background-color:white;'>
PHP & MySQL Assessment
</h1>";

echo "<br>";


// ======================================================
// QUESTION 1
// One-Dimensional Array
// ======================================================

$ass1 = "Question 1: One-Dimensional Array";

echo "<button style='background-color:white; color:blue; padding:10px;
font-size:25px; font-family:verdana; border:none; border-radius:5px;
cursor:pointer; margin-left:30px;'>$ass1</button>";

echo "<br><br>";


// Array
$numbers = array(
    5, -7, 12, 10, -7, 11,
    -6, 12, 1, -7, 2, 9
);


// ------------------------------------------------------
// 1. Print all numbers
// ------------------------------------------------------

echo "<div style='color:white; font-size:25px;
font-family:calibri; margin-left:30px;'>
All Numbers:
</div>";

foreach($numbers as $number){

    echo "<span style='color:white; font-size:25px;
    font-family:calibri; margin-left:30px;'>
    $number
    </span>";

}


// ------------------------------------------------------
// 2. Calculate total
// ------------------------------------------------------

$total = 0;

foreach($numbers as $number){

    $total = $total + $number;

}

echo "<div style='color:white; font-size:25px;
font-family:calibri; margin-left:30px; margin-top:20px;'>
Total: $total
</div>";


// ------------------------------------------------------
// 3. Calculate total of even numbers
// ------------------------------------------------------

$evenTotal = 0;

foreach($numbers as $number){

    if($number % 2 == 0){

        $evenTotal = $evenTotal + $number;

    }

}

echo "<div style='color:white; font-size:25px;
font-family:calibri; margin-left:30px;'>
Total Even Numbers: $evenTotal
</div>";


// ------------------------------------------------------
// 4. Calculate total of odd numbers
// ------------------------------------------------------

$oddTotal = 0;

foreach($numbers as $number){

    if($number % 2 != 0){

        $oddTotal = $oddTotal + $number;

    }

}

echo "<div style='color:white; font-size:25px;
font-family:calibri; margin-left:30px;'>
Total Odd Numbers: $oddTotal
</div>";


// ------------------------------------------------------
// 5. Find minimum number and its positions
// ------------------------------------------------------

$min = $numbers[0];

foreach($numbers as $number){

    if($number < $min){

        $min = $number;

    }

}

echo "<div style='color:white; font-size:25px;
font-family:calibri; margin-left:30px;'>
Minimum Number: $min
</div>";

echo "<div style='color:white; font-size:25px;
font-family:calibri; margin-left:30px;'>
Minimum Positions:
</div>";

foreach($numbers as $index => $number){

    if($number == $min){

        echo "<span style='color:white; font-size:25px;
        font-family:calibri; margin-left:30px;'>
        $index
        </span>";

    }

}


// ------------------------------------------------------
// 6. Find maximum number and its positions
// ------------------------------------------------------

$max = $numbers[0];

foreach($numbers as $number){

    if($number > $max){

        $max = $number;

    }

}

echo "<div style='color:white; font-size:25px;
font-family:calibri; margin-left:30px; margin-top:20px;'>
Maximum Number: $max
</div>";

echo "<div style='color:white; font-size:25px;
font-family:calibri; margin-left:30px;'>
Maximum Positions:
</div>";

foreach($numbers as $index => $number){

    if($number == $max){

        echo "<span style='color:white; font-size:25px;
        font-family:calibri; margin-left:30px;'>
        $index
        </span>";

    }

}

echo "<br>";
echo "<br>";



// Assignment 2
$ass2 = "Question 2: Associative Two-Dimensional Array";

echo "<button style='background-color:white; color:blue; padding:10px;
font-size:25px; font-family:verdana; border:none; border-radius:5px;
cursor:pointer; margin-left:30px;'>$ass2</button>";

echo "<br><br>";


// Associative Two-Dimensional Array

$colors = array(

    "Light" => array(
        "Red" => 255,
        "Green" => 255,
        "Blue" => 255
    ),

    "Normal" => array(
        "Red" => 128,
        "Green" => 128,
        "Blue" => 128
    ),

    "Dark" => array(
        "Red" => 0,
        "Green" => 0,
        "Blue" => 0
    )

);


// Display the array as a table

echo "<table border='1' style='background-color:darkblue;
color:white; margin-left:30px; border-collapse:collapse;'>";


// Table headings

echo "<tr>";
echo "<th style='padding:10px;'> </th>";
echo "<th style='padding:10px;'>Red</th>";
echo "<th style='padding:10px;'>Green</th>";
echo "<th style='padding:10px;'>Blue</th>";
echo "</tr>";


// Display rows

foreach($colors as $type => $values){

    echo "<tr>";

    echo "<td style='padding:10px;'>$type</td>";

    foreach($values as $value){

        echo "<td style='padding:10px;'>$value</td>";

    }

    echo "</tr>";
}


echo "</table>";


echo "<br>";
echo "<br>";


// Assignment 3

$ass3 = "Question 3: Square Two-Dimensional Array";

echo "<button style='background-color:white; color:blue; padding:10px;
font-size:25px; font-family:verdana; border:none; border-radius:5px;
cursor:pointer; margin-left:30px;'>$ass3</button>";

echo "<br><br>";


// 3 x 3 Two-Dimensional Array

$numbers = array(

    array(2, -6, 8),
    array(-6, 1, 6),
    array(7, 8, -6)

);


// ------------------------------------------------------
// Display Array as a Table
// ------------------------------------------------------

echo "<table border='1' style='background-color:darkblue;
color:white; margin-left:30px; border-collapse:collapse;'>";


// Table Header

echo "<tr>";

echo "<th style='padding:10px;'> </th>";
echo "<th style='padding:10px;'>Column 1</th>";
echo "<th style='padding:10px;'>Column 2</th>";
echo "<th style='padding:10px;'>Column 3</th>";
echo "<th style='padding:10px;'>Row Total</th>";

echo "</tr>";


// Rows

for($i = 0; $i < 3; $i++){

    echo "<tr>";

    echo "<th style='padding:10px;'>Row " . ($i + 1) . "</th>";

    $rowTotal = 0;

    for($j = 0; $j < 3; $j++){

        echo "<td style='padding:10px; text-align:center;'>"
        . $numbers[$i][$j] .
        "</td>";

        $rowTotal = $rowTotal + $numbers[$i][$j];

    }

    echo "<td style='padding:10px; text-align:center;'>$rowTotal</td>";

    echo "</tr>";

}


// ------------------------------------------------------
// Column Totals
// ------------------------------------------------------

echo "<tr>";

echo "<th style='padding:10px;'>Column Total</th>";

for($j = 0; $j < 3; $j++){

    $columnTotal = 0;

    for($i = 0; $i < 3; $i++){

        $columnTotal = $columnTotal + $numbers[$i][$j];

    }

    echo "<td style='padding:10px; text-align:center;'>
    $columnTotal
    </td>";

}


// Overall total

$total = 0;

foreach($numbers as $row){

    foreach($row as $number){

        $total = $total + $number;

    }

}

echo "<td style='padding:10px; text-align:center;'>
$total
</td>";

echo "</tr>";

echo "</table>";

echo "<br>";


// ------------------------------------------------------
// Total Odd Numbers
// ------------------------------------------------------

$oddTotal = 0;

foreach($numbers as $row){

    foreach($row as $number){

        if($number % 2 != 0){

            $oddTotal = $oddTotal + $number;

        }

    }

}

echo "<div style='color:white; font-size:25px;
font-family:calibri; margin-left:30px;'>
Total Odd Elements: $oddTotal
</div>";


// ------------------------------------------------------
// Total Even Numbers
// ------------------------------------------------------

$evenTotal = 0;

foreach($numbers as $row){

    foreach($row as $number){

        if($number % 2 == 0){

            $evenTotal = $evenTotal + $number;

        }

    }

}

echo "<div style='color:white; font-size:25px;
font-family:calibri; margin-left:30px;'>
Total Even Elements: $evenTotal
</div>";


// ------------------------------------------------------
// Diagonal 1
// ------------------------------------------------------

$diagonal1 = 0;

for($i = 0; $i < 3; $i++){

    $diagonal1 = $diagonal1 + $numbers[$i][$i];

}

echo "<div style='color:white; font-size:25px;
font-family:calibri; margin-left:30px;'>
Diagonal 1 Total: $diagonal1
</div>";


// ------------------------------------------------------
// Diagonal 2
// ------------------------------------------------------

$diagonal2 = 0;

for($i = 0; $i < 3; $i++){

    $diagonal2 = $diagonal2 + $numbers[$i][2 - $i];

}

echo "<div style='color:white; font-size:25px;
font-family:calibri; margin-left:30px;'>
Diagonal 2 Total: $diagonal2
</div>";


// ------------------------------------------------------
// Total of All Elements
// ------------------------------------------------------

echo "<div style='color:white; font-size:25px;
font-family:calibri; margin-left:30px;'>
Total of All Elements: $total
</div>";


// ------------------------------------------------------
// Minimum Number and Positions
// ------------------------------------------------------

$min = $numbers[0][0];

foreach($numbers as $i => $row){

    foreach($row as $j => $number){

        if($number < $min){

            $min = $number;

        }

    }

}

echo "<div style='color:white; font-size:25px;
font-family:calibri; margin-left:30px;'>
Minimum Element: $min
</div>";

echo "<div style='color:white; font-size:25px;
font-family:calibri; margin-left:30px;'>
Minimum Positions:
</div>";

foreach($numbers as $i => $row){

    foreach($row as $j => $number){

        if($number == $min){

            echo "<span style='color:white; font-size:25px;
            font-family:calibri; margin-left:30px;'>
            [$i][$j]
            </span>";

        }

    }

}


// ------------------------------------------------------
// Maximum Number and Positions
// ------------------------------------------------------

$max = $numbers[0][0];

foreach($numbers as $row){

    foreach($row as $number){

        if($number > $max){

            $max = $number;

        }

    }

}

echo "<div style='color:white; font-size:25px;
font-family:calibri; margin-left:30px;'>
Maximum Element: $max
</div>";

echo "<div style='color:white; font-size:25px;
font-family:calibri; margin-left:30px;'>
Maximum Positions:
</div>";

foreach($numbers as $i => $row){

    foreach($row as $j => $number){

        if($number == $max){

            echo "<span style='color:white; font-size:25px;
            font-family:calibri; margin-left:30px;'>
            [$i][$j]
            </span>";

        }

    }

}


echo "<br>";
echo "<br>";


// Assignment 4

$ass4 = "Question 4: Student Information";

echo "<button style='background-color:white; color:blue; padding:10px;
font-size:25px; font-family:verdana; border:none; border-radius:5px;
cursor:pointer; margin-left:30px;'>$ass4</button>";

echo "<br><br>";


// Associative 2D  Array

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

    "CA221" => array(
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    )

);




echo "<table border='1' style='background-color:darkblue;
color:white; margin-left:30px; border-collapse:collapse;'>";



echo "<tr>";

echo "<th style='padding:10px;'>Student ID</th>";
echo "<th style='padding:10px;'>Name</th>";
echo "<th style='padding:10px;'>Phone</th>";
echo "<th style='padding:10px;'>Address</th>";

echo "</tr>";



foreach($students as $id => $student){

    echo "<tr>";

    echo "<td style='padding:10px;'>$id</td>";

    echo "<td style='padding:10px;'>" . $student["Name"] . "</td>";

    echo "<td style='padding:10px;'>" . $student["Phone"] . "</td>";

    echo "<td style='padding:10px;'>" . $student["Address"] . "</td>";

    echo "</tr>";

}


echo "</table>";

echo "<br>";
echo "<br>";

// Assignment 5

$ass5 = "Question 5: Student Transcript";

echo "<button style='background-color:white; color:blue; padding:10px;
font-size:25px; font-family:verdana; border:none; border-radius:5px;
cursor:pointer; margin-left:30px;'>$ass5</button>";

echo "<br><br>";


// creating array

$transcript = array(

    "Semester 1" => array(

        array("subject1", 9, 26, 10, 40, 85, "Pass"),
        array("subject2", 9, 26, 10, 40, 85, "Pass"),
        array("subject3", 9, 26, 10, 40, 85, "Pass")

    ),

    "Semester 2" => array(

        array("subject1", 9, 26, 10, 0, 45, "Fail"),
        array("subject2", 9, 26, 10, 40, 85, "Pass"),
        array("subject3", 9, 26, 10, 40, 85, "Pass")

    )

);



echo "<table border='1' style='background-color:darkblue;
color:white; margin-left:30px; border-collapse:collapse;'>";


// Table

echo "<tr>";

echo "<th style='padding:10px;'>Semester</th>";
echo "<th style='padding:10px;'>Course</th>";
echo "<th style='padding:10px;'>CW1</th>";
echo "<th style='padding:10px;'>MidTerm</th>";
echo "<th style='padding:10px;'>CW2</th>";
echo "<th style='padding:10px;'>Final</th>";
echo "<th style='padding:10px;'>Total</th>";
echo "<th style='padding:10px;'>Status</th>";

echo "</tr>";


// transcriptng data

foreach($transcript as $semester => $courses){

    foreach($courses as $course){

        echo "<tr>";

        echo "<td style='padding:10px;'>$semester</td>";

        echo "<td style='padding:10px;'>$course[0]</td>";

        echo "<td style='padding:10px;'>$course[1]</td>";

        echo "<td style='padding:10px;'>$course[2]</td>";

        echo "<td style='padding:10px;'>$course[3]</td>";

        echo "<td style='padding:10px;'>$course[4]</td>";

        echo "<td style='padding:10px;'>$course[5]</td>";

        echo "<td style='padding:10px;'>$course[6]</td>";

        echo "</tr>";

    }

}


echo "</table>";

?>