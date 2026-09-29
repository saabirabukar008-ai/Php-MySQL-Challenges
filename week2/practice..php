<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple calculator</title>
</head>
<body>
    <h1> Simple Calculator</h1>

    <?php 
    $a = 20;
    $b = 5;

    $add = $a + $b;
    $sub = $a - $b;
    $mul = $a * $b;
    $div = $a / $b;
    $mod = $a % $b;

    echo "Adiition is: $add <br>";
    echo "subtratcion is: $sub <br>";
    echo "multiplication is: $mul <br>";
    echo "Division is: $div <br> ";
    echo "modulas is: $mod  <br> <hr>";


    // Student profile project 2 
  echo " <h1>Personal information</h1> ";
    $name = "Sabir";
    $age = 20;
    $course = "Php & MySQL";
    $university = "Jamhuriya University";
    

    echo "name : $name <br>";
    echo "age : $age <br>";
    echo "Course : $course <br>";
    echo "University : $university <br>
    ";


    // project 3 waan fahansanahay  waa project 2 o kle waana qori karaa sidas projecti 2 aan meelba ugu fiirsan oo kalle lagu daray comment nuucaan oo kale ah oo ah // arith operator
      

    // some assignment operaor 

    $number = 5;
    $number +=10;
    echo $number ,"<br>";

    $number -=10 ;
    echo $number ,"<br>";

    // one example ocf comaprism operator
    $age = 20;
    echo $age >= 18 ,"<br>";

    // logical opertor
    $age = 20;

if ($age >= 18 && $age <= 30) {
    echo "Allowed ", "<br>";
}

// concatenation 

$First_name = "Sabir";
$Last_name = "Abukar";

echo $First_name. " ".$Last_name ,"<br>";

// ternary operator 
$myage = 18;
echo $myage >=20 ? "Adult" : "Minor" , "<br>";

// conditional statement 
$age1 = 20;

if ($age1 >= 18) {
    echo "You are an adult";
}

// if else  for marks 

$marks = 49;

if($marks >= 50){
    echo "Pass";
} else {
    echo "Fail" ,"<br>";
}

// elseif 

$std_marks = 75;

if ($std_marks >= 80) {
    echo "A";
} elseif ($std_marks >= 70) {
    echo "B";
} elseif ($std_marks >= 60) {
    echo "C";
} else {
    echo "F ";
}

echo "<br> <hr>";
echo " <h1>Simple  Electricity Bill Checker project 3</h1>";

//  Simple  Electricity Bill Checker project 3

$customnerName =  " Mustafa";
$unitsUsed = 35;
$bill = $unitsUsed * 0.50;

if($bill >=20 ){
    echo "Normal bill";   // nromal bill because normal bill is not eanugh 20
} else {
    echo "High Bill";
}
echo "Customer name: " . $customnerName . "<br>";
echo "Units used: " . $unitsUsed . "<br>";
echo "Elec bill: " . $bill;

echo "<br> <hr>";
echo "<h1>simple  navigation choose project 4</h1>";
// simple  navigation choose project 4

$choice = 3;
switch($choice){
    case 1:
        echo "Home";
        break;
    case 2:
        echo "Profile";
        break;
    case 3 :
        echo "Setting";
        break;
     case 4:
        echo "Logout";
        break;
    default:
        echo "invslid choice";                   
}


// simple example skip and continue

for ($num; $num <=20; $num++){
    if($num == 10){
        break;
    }
    echo $num. "<br>";
}





// simple multiplication project nested loop project 5


for($i=1; $i<=5; $i++){
    for($j=1; $j<=5; $j++){
        echo $i. " x ". $j. "<br>" ;

}
}



echo "<br> <hr>";
echo "<h1>Part two HTML + PHP </h1>";

echo "<h2 style = 'color : blue;'>Saabir Abuukar abdukadir</h2>";
echo "<h3 style = 'color : green;'>Jamhuriya University of Science and technology</h3>";
echo "<p>PHP and MySQL Course </p>";


    

    ?>
</body>
</html>