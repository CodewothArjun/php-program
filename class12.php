<!DOCTYPE html>
<html lang="en">
<head>
       <title>Document</title>
</head>
<body>

    <form action="" method="GET">
        <input type="text" name="string" >
        <button type="submit" name="submit">Check</button>
    </form>
   
    <?php
        if(isset($_GET['submit'])){
            $string=$_GET['string'];
            if($string==strrev($string)){
                echo "Palindrome";
            }else{ 
                echo "Not Palindorme";
            }
            
        }else{
            echo "Enter text and press check button";
        }
    ?>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
       <title>Array in PHP</title>
</head>
<body>
    <?php
        $cars=array("Volvo", "BMW", "Toyota");
        echo "I love ".$cars[1].','.$cars[0].'and '.$cars[2];
    ?>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
       <title>Array Sorting in PHP</title>
</head>
<body>
<?php
$fruits = array("lemon", "apple", "banana",  "orange");
rsort($fruits);
print_r($fruits);
?>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
       <title>Sum of odd and even numbers upto 100</title>
</head>
<body>

   <?php
   $sumEven=0;
   $sumOdd=0;
   for($i=0;$i<=100;$i++){
       if($i%2==0){
           $sumEven+=$i;
       }else{
           $sumOdd+=$i;
       }
   }
   echo "Sum of Even Numbers=".$sumEven;
   echo "<br>";
   echo "Sum of Odd Numbers=".$sumOdd;
    ?>
</body>
</html>






<?php

// PHP program to find the largest and smallest element in an array by using for loop

$x = [73, 42, 423, 42, 342, 14];

// $x - denotes array list of input numbers
// $b - denotes big element variable
// $sm - denotes small element variable

// This will stored the first element of the array to check the element
$b = $x[0];

for ($i = 1; $i < count($x); $i++) {
    
    // This will check one by one with each value of array
    // To compare the value is smallest or largest
    if ($b < $x[$i]) {
        $b = $x[$i];
    }
}

echo "\n-----The largest element is: ", $b, "\n";

// This will stored the first element of the array to check the element
$sm = $x[0];

for ($i = 1; $i < count($x); $i++) {
    
    // This will check one by one with each value of array
    // To compare the value is smallest or largest
    if ($sm > $x[$i]) {
        $sm = $x[$i];
    }
}

echo "\n-----The smallest element is: ", $sm, "\n";

?>


<?php
function primenumber($MyNum) {
  $n = 0;

  for($i = 2; $i < ($MyNum/2+1); $i++) {
    if($MyNum % $i == 0){
      $n++;
      break;
    }
  }

  if ($n == 0){
    echo $MyNum." ";
  } 
}

$x =100;
echo "Prime numbers less than ".$x." are: \n";
for($i = 2; $i < $x + 1; $i++) {
  primenumber($i);
}
?>  -->




Another way.....
Qn 15
<?php
$a=4321;
$sum=0;
while($a!=0){
    echo $a."<br>";
    $rem=$a%10;
    $sum+=$rem;
    $a=intdiv($a,10);
}

echo "sum=".$sum;



Qn 16
<?php
$sum=0;
for($i=1;$i<=100;$i++){
    if($i%2==0){
        $sum+=$i;
    }
}
echo "Sum=".$sum;
