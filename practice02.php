<?php

$name = "えり";

if($name == "えり"){
    echo "私は".$name."です";
}else{
    echo "私は".$name."ではありません";
}

?>

<?php

$total = 0;
for($i = 1; $i <= 10000; $i++){
    $total = $total + $i;
}
echo $total;

?>

<?php

$fruits = array("pine","apple","banana","litchi","kiwi");

foreach($fruits as $fruit){
    echo $fruit;
    
}

?>

<?php

$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($start % 5 == 0){
    echo $i;
  }
}

?>
