




<?php 

// Assignmen activity 1
echo "<body style = 'width :1350px ; background-color:grey; padding:10px' </body>";
echo "<h1 style = 'color : darkblue ; text-align :center; font-family :verdana; background-color:white';>Week2 Assignments</h1>";

echo "<br>";

//assignment 1

$ass2 = "Assignment 1: Finding the Greatest and Smallest number with out Function like Max";

echo "<button style = 'background-color : white; color: blue; padding :10px; font-size : 25px; font-family :verdana; border:none; border-radius: 5px; cursor: pointer; margin-left :30px'>$ass2</button>, <br><br>";


$num1 = 20;
$num2 = 50;
$num3 = 100;


// Greatest Number
if ($num1 > $num2 && $num1 > $num3) {

    echo "<div style='color: white; font-size: 25px; font-weight: thin; font-family :calibri; margin-left: 30px;'>
            The Greatest Number is: $num1
          </div>";

} elseif ($num2 > $num1 && $num2 > $num3) {

    echo "<div style='color: white; font-size: 25px; font-weight: thin; font-family :calibri; margin-left: 30px;'>
            The Greatest Number is: $num2
          </div>";

} else {

    echo "<div style='color: white; font-size: 25px; font-weight: thin; font-family :calibri; margin-left: 30px;'>
            The Greatest Number is: $num3
          </div>";
}


// Smallest Number
if ($num1 < $num2 && $num1 < $num3) {

    echo "<div style='color: white; font-size: 25px; font-weight: thin; font-family :calibri; margin-left: 30px;'>
            The Smallest Number is: $num1
          </div>";

} elseif ($num2 < $num1 && $num2 < $num3) {

    echo "<div style='color: white; font-size: 25px; font-weight: thin; font-family :calibri; margin-left: 30px;'>
            The Smallest Number is: $num2
          </div>";

} else {

    echo "<div style='color: white; font-size: 25px; font-weight: thin; font-family :calibri; margin-left: 30px;'>
            The Smallest Number is: $num3
          </div>";
}



//assignment 2

echo "<br> <br>";


$ass2 = "Assignment Two: Divisble by bothe 3 and 5";

echo "<button style = 'background-color : white; color: blue; padding :10px; font-size : 25px; font-family :verdana; border:none; border-radius: 5px; cursor: pointer; margin-left :30px'>$ass2</button>, <br><br>";

// assignment 2 code 


$num = 15;
if($num % 3 == 0 && $num % 5 == 0){
    echo "<div style='color: white; font-size: 25px; font-weight: 300; font-family :calibri; margin-left: 30px;'> Number is divisible by both 3 and 5 </div>";
} else if ($num % 3 == 0){
    echo "number is only divisble by 3";
} else if ($num % 5 == 0) {
    echo " <div style='color: white; font-size: 25px; font-weight: thin; font-family :calibri; margin-left: 30px;'> Number is only divisble by 5</div>";
} else {
    echo " <div style='color: white; font-size: 25px; font-weight: thin; font-family :calibri; margin-left: 30px;'>None of them is not divisble </div>";
}


//assignment 3

echo "<br> <br>";


$ass3 = "Assignment Three: Odd and Even Numbers";

echo "<button style = 'background-color : white; color: blue; padding :10px; font-size : 25px; font-family :verdana; border:none; border-radius: 5px; cursor: pointer; margin-left :30px'>$ass3</button>, <br><br>";

// assignment 3 code 

$count = 3;

while ($count <= 20) {
    echo "<span style='color: white; font-size: 25px; font-family: calibri; margin-left: 30px;'>$count</span> <br>";

    $count += 2;
}

// 2
for ($i = 34; $i >= 8; $i -= 2) {
    echo "<span style='color: white; font-size: 25px; font-family: calibri; margin-left: 30px;'>$i ,</span>";
}




//assignment 4

echo "<br> <br>";


$ass4 = "Assignment Four: Divisible by 2 and 5 from 50 to 2";

echo "<button style = 'background-color : white; color: blue; padding :10px; font-size : 25px; font-family :verdana; border:none; border-radius: 5px; cursor: pointer; margin-left :30px'>$ass4</button>, <br><br>";

// assignment 4 code 

$numb = 50; 

while($numb > 2){ 
    if($numb % 5 == 0 && $numb % 2 == 0){ 
 echo "<span style=' color: white;  font-size: 25px;  font-family: calibri;   margin-left: 30px; margin-right: 20px;
        '>$numb,</span>";
    }   
    $numb--;    
}

//assignment 5

echo "<br> <br>";


$ass5 = "Assignment Five: Reverse of Given Numbers";

echo "<button style = 'background-color : white; color: blue; padding :10px; font-size : 25px; font-family :verdana; border:none; border-radius: 5px; cursor: pointer; margin-left :30px'>$ass5</button>, <br><br>";

// assignment 5 code 

$number = 12345;
$reverse = 0;
while ($number > 0) {
    $digit = $number % 10;
    $reverse = ($reverse * 10) + $digit;
    $number = intdiv($number, 10);
}
echo "<div style=' color: white; font-size: 25px; font-weight: 300;font-family: calibri; margin-left: 30px;
'>Reverse Number: $reverse </div>";


//assignment 6

echo "<br> <br>";


$ass6 = "Assignment Six: Finding Lowest Common Multiplier";

echo "<button style = 'background-color : white; color: blue; padding :10px; font-size : 25px; font-family :verdana; border:none; border-radius: 5px; cursor: pointer; margin-left :30px'>$ass6</button>, <br><br>";

// assignment 6 code 


$num1 = 24;
$num2 = 18;

$multiple = 1;

while (true) {
    if ($multiple % $num1 == 0 && $multiple % $num2 == 0) {
        break;
    }
    $multiple++;
}
echo "<span style=' color: white;  font-size: 25px; font-weight: 300; font-family: calibri; margin-left: 30px;
'>
 LCM of $num1 and $num2 is: $multiple
</span>";

//assignment 7

echo "<br> <br>";


$ass7 = "Assignment 7: Finding the Lowest common factor of two positive numbers";

echo "<button style = 'background-color : white; color: blue; padding :10px; font-size : 25px; font-family :verdana; border:none; border-radius: 5px; cursor: pointer; margin-left :30px'>$ass7</button>, <br><br>";

// assignment 7 code 

$num1 =18;
$num2 =24;

$hcf=1;
$i =1;

while ($i <= $num1 && $i <= $num2) {
    if ($num1 % $i == 0 && $num2 % $i == 0) {
        $hcf = $i;
    }
    $i++;
}
echo "<div style=' color: white; font-size: 25px; font-weight: 300; font-family: calibri; margin-left: 30px;
'>
    HCF of $num1 and $num2 is: $hcf
</div>";

//assignment 8

echo "<br> <br>";


$ass8 = "Assignment 8: Multiplicatin Table of 12 ";

echo "<button style = 'background-color : white; color: blue; padding :10px; font-size : 25px; font-family :verdana; border:none; border-radius: 5px; cursor: pointer; margin-left :30px'>$ass8</button>, <br><br>";

// assignment 8 code 



// Assignment 8

echo "<table border='1' style='background-color: darkblue; color: white; margin-left :30px'>";

for($m = 1; $m <= 12; $m++){
    echo "<tr>";
    for($n = 1; $n <= 12; $n++){
        echo "<td style='padding: 10px;'>" . ($m * $n) . "</td>";
    }

    echo "</tr>";
}
echo "</table>";
echo"<br>";



$ass9 = "Assignment 9: Finding Prime or No Prime Numbers ";

echo "<button style = 'background-color : white; color: blue; padding :10px; font-size : 25px; font-family :verdana; border:none; border-radius: 5px; cursor: pointer; margin-left :30px'>$ass9</button>, <br><br>";

// assignment 9 code 

 $num =18;
$isPrime =true;

if ($num <=1) {
    $isPrime=false;
} else {

    for ($i = 2; $i < $num; $i++) {

        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}
if ($isPrime) {
 echo "<div style=' color: white; font-size: 25px; font-weight: 300; font-family: calibri;  margin-left: 30px;
    '>
        $num is a Prime Number
    </div>";
} else {
 echo "<div style=' color: white; font-size: 25px;  font-weight: 300;  font-family: calibri;     margin-left: 30px;
    '>
        $num is a Non-Prime Number
    </div>";
}


echo"<br>";



$ass10 = "Assignment 10: Prime Numbers from 10 t0 50 ";

echo "<button style = 'background-color : white; color: blue; padding :10px; font-size : 25px; font-family :verdana; border:none; border-radius: 5px; cursor: pointer; margin-left :30px'>$ass10</button>, <br><br>";

// assignment 10 code 



for ($num = 10; $num <= 50; $num++) {

    $isPrime = true;

    for ($i = 2; $i < $num; $i++) {

        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo "<span style='  color: white; font-size: 25px; font-weight: 300;  font-family: calibri;  margin-left: 30px; margin-right: 20px;
 '>
          $num
        </span>";
    }
}




?>