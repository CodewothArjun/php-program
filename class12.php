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

