<?php

$name = "えり";

if($name == "えり"){
    echo "私はあなたの名前です";
}else{
    echo "あなたの名前ではありません";
}

?>

<?php

for($i = 1; $i <= 10000; $i++){
    echo $i;
}

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

for($i = $start; $start <= $end; $start++){

  // 5で割り切れたら{}内を実行する
  if($start % 5 == 0){
    echo $start;
  }
}

?>