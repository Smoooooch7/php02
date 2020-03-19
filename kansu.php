<?php

function sum($result){
  
  $result = $result*2;
  
  return $result;
}

echo sum(7);
echo "\n";


function f($a, $b){
  
  $result2 = $a + $b;
  
  return $result2; 
}

echo f(100000,2);
echo "\n";


function sum2($arr){
  $result = 1;
  foreach($arr as $a){
    $result = $result * $a;
  }
  return $result;
}

echo sum2([1,3,5,7,9]); 
echo "\n";


 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
   $max_number = $arr[0];
   foreach($arr as $a){
 
}
   return $max_number;
 }
 
 $string = "abcdefg<br>hijklmn";
 echo strip_tags($string);
 echo "\n";
 
 
 $fruits = ['apple','banana','kiwi'];
 
 array_push($fruits,'litchi','orange');
 
 print_r($fruits);

 $number1 = [1,2,3];
 $number2 = [4,5];
 $number3 = [6];
 
 $number_merge = array_merge($number1, $number2, $number3);
 
 print_r($number_merge);
 
 $timestamp = mktime(0,0,0,3,19,2020);
 echo $timestamp;

 $date = time();
 echo $date;
