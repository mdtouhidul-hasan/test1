<?php
echo "hello world3";
echo "\n";

$n1 = 100;
$n2 = 200;
$n3 = 300;

echo $n2;
echo "\n";

// ternary operator

$num1 = 88;
$num2 = 101;
$num3 = 203;

if($num1 > $num2 && $num1 > $num3){
    echo "$num1 is the greatest number";
}elseif($num2 > $num1 && $num2 > $num3){
    echo "$num2 is greater number";
}elseif($num3 > $num2 && $num3 > $num1){
    echo "$num3 is greater number";
}else{
    echo "this is a number";
}

echo "\n";
// ternary operator

$number = ($num1 > $num2 && $num1 > $num3) ? "large number $num1" : (($num2 > $num1 && $num2 > $num3) ? "large number $num2" : (($num3 > $num2 && $num3 > $num1) ? "large number $num3" : "equal"));
echo $number;