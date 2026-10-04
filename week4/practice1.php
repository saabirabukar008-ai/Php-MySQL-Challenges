<?php

// $fruits = array("Apple", "Banana", "Mango","Lemon");
// // // echo $students[1] ."<br>";
// // echo $fruits[2];

// // //push element in arrays as index

// // $fruits[4] = "Mohamed";

// // echo $fruits[4];

// ass1

$students = array ("Mohamed", "Amina", "Hassan");


// way 1 add value to array using index 

$students [4] = "AHMED";
$students [5] = "Sabir";

$students [0] = "Sabir";

// Remove  last element array as push

array_pop($students);
array_pop($students);
array_pop($students);

// remove out fist element
array_shift($students);

// reverse array

array_reverse($students);

// assign result to the new array

$reserved_names = array_reverse($students); 




array_push($students, "Abdikani");

// way two using push


// to display one by one for elemets

// or fro each


// count of the array

echo count($students) ."<br>";

foreach($students as $student){
    echo $student;
    echo "<br>";
}

foreach($reserved_names as $student){
    echo $student;
    echo "<br>";
}



// empty array and add with value 
echo "<h4> empty array by adding value as indexed</h4>";

$colors = array();

echo $colors[] = "yellow";
echo "<br>";
echo $colors[] = "Green";
echo "<br>";
echo $colors[] = "White";
echo "<br>";
echo $colosr[] = "black";

array_pop($colors);




// ass1
echo "<h6> Assignment2</h6>";

$prices = array();

$prices[] = 100;
$prices[] = 250;
$prices[] = 300;
$prices[] = 500;

echo $prices[3];

echo "<br>";

// using for-each for all prices

foreach($prices as $price){
    echo $price;
    echo "<br>";
}

// associative array
echo "<h4> Associative array</h4>";

$days = array(
   "day1" => "Sarurday",
   "day2" => "Sunday",
   "day3" => "Monady"
);

echo $days["day1"];

foreach($days as $day){
    echo $day;
    echo "<br>";
}


// ass3 

echo "<h6> Assignment  3</h6>";

// $studentinfo = array();

$studentinfo = array(
    "name" => "Sabir",
    "ID" => "C1230785",
    "Adress" => "bulo xubey"

);


// using foreach

echo "<table border = '2'>";

foreach($studentinfo as $key => $value){
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>$value</td>";
    echo "<tr>";
    echo "<br>";
}
echo "</table>";



// ass1





// // table 
// echo "<table border='1'>";
// echo "<tr>";
// echo "<td>Name</td>";
// echo "<td>Age</td>";
// echo "</tr>";
// echo "</table>";


echo "<h6> Assignment  4</h6>";

$studentdetail = array(
    "name" => "Sabir",
    "ID" => "C1230785",
    "Adress" => "wadajir"
);


echo "<table border= '1'>";
foreach($studentdetail as $key => $value){
    echo "<tr>";
    echo "<td> $key </td>".  ":". "<td> $value </td>";
    echo "</tr>";
}

echo "</table>";

echo "<hr>";

echo "<h4> 2D  array </h4>";

$studentss = array (
    array("Mohamud", 19),
    array("Ali", 20),
    array("salim", 18)
);

echo $studentss[0][0]. "<br>";


// displaying for each

echo "<table border='2'>";

foreach($studentss as $std){
    echo "<tr>";

    foreach($std as $tem){
        echo "<td>$tem</td>";
    }

    echo "</tr>";
}

echo "</table>";





echo "<h6> assignment  5</h6>";

// 2 D array again as indexed 

echo "<h4> 2D assignment 6 </h4>";

$electronic = array (
    array("Laptop", 800),
    array("Phone", 400),
    array("Tablet", 300)
);

echo $electronic[1][0];
echo $electronic[2][1];



// exampele 7

echo "<h4> Array Functions part 7 </h4>";

$black_List_Names = array("Ali", "Amina", "Hassan");
var_dump (is_array($black_List_Names));
echo "<br>";

// check the value in array

var_dump(in_array("Amina", $black_List_Names));
echo "<br>";

//counts the number elements of arrauy

echo count($black_List_Names);
echo "<br>";


// sorting array as ascending sort()


//assignment 
echo "<hr>";

echo "<h6> Array Function assignment  7</h6>";

$prod = array("Watch", "Phone", "Tablet", "IPHONE");

var_dump(is_array($prod));

echo "<br>";

var_dump(in_array("Phone",$prod));

echo "<br>";

echo(count($prod));

echo "<br>";

$number = array (20,50,30,10,5);
sort($number);
rsort($number);

var_dump(sort($number));





































?>