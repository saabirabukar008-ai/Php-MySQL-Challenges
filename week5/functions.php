
<?php 

function myName(){
    echo "My name is Sabir";
}
myName();

echo "<br>";

// parameterize function 

function stdtdInfo($name, $course){
    echo "My name is: ". $name ." and  my Course is: " .$course;
}
stdtdInfo("Sabir","PHP");

echo "<br>";


// calculate square


function calculateSquare($number){
    return $number * $number;

}
$result = calculateSquare(6);
echo $result;

echo "<br>";

// default argument
function courses($course = "course"){
    echo "Welcome to ".$course. "<br>";

}
courses();
courses("PHP");

echo "<br>";

// declaration

function square(int $a, int $b) : int{
    return $a + $b;
}
echo square(5,10);

// global and local

$name = "Sabir";

function showName() {
    global $name;
    $name = "Ahmed";
}

showName();
echo $name;

?>




