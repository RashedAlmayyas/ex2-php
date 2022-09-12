<!--
 ***   ***        ****             *   *          ***   ***
***** *****       *   *            *   *         ***** *****
***********       *   *            ** **         ***********
 *********        ****     *****   * * *          *********                                            
  *******         * *              *   *           *******
   *****          *  *             *   *            *****
    ***           *   *            *   *             ***
     *                                                *
-->
<!DOCTYPE html>
<html>
<body>

<?php

//q1
function Prime($num)
{
 for($x=2; $x<$num; $x++)
   {
      if($num %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$n = Prime(3);
if ($n==0)
echo 'This is not a Prime Number';
else
echo 'This is a Prime Number';

//q2

function Reverse($str){
  return strrev($str);
}

$str = "remove";
echo Reverse($str)

//q3
$string='remove';
if (ctype_lower($string)) {
echo " OK";
}else{
echo " NO ";
}

//q4

$x = 12;
$y = 10;

$temp = $x;
$x = $y;
$y = $temp;
 
echo "x =".$x." y=".$y."\n";

//q5

$num=407;  
$total=0;  
$x=$num;  
while($x!=0)  
{  
$rem=$x%10;  
$total=$total+$rem*$rem*$rem;  
$x=$x/10;  
}  
if($num==$total)  
{  
echo " $num Armstrong number";  
}  
else  
{  
echo "No armstrong number";  
}  

//q6

function Palindrome($number){ 
  $temp = $number; 
  $new = 0; 
  while (floor($temp)) { 
      $d = $temp % 10; 
      $new = $new * 10 + $d; 
      $temp = $temp/10; 
  } 
  if ($new == $number){ 
      return 1; 
  }
  else{
      return 0;
  }
} 
$original = "Eva, can I see bees in a cave?";
if (Palindrome($original)){ 
  echo "Yes it is a palindrome "; 
}
else { 
echo "Not a Palindrome"; 
}

//q7
$array1 = array(2, 4, 7, 4, 8, 4);
$array1 = array_unique($array1); 
 print_r($array1);
?> 

</body>
</html>
