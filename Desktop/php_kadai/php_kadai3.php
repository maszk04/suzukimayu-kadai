<?php
echo "制御文課題"."<br/>";
echo "(1)";
$a=rand(10);
if($a>=8){
  echo "◯";
}elseif($a>=5){
  echo "△";
}else{
  echo "×";
}
echo "<br/>";
?>
<?php
echo "(2)";
$number=rand(10,15);
echo ($number===10)? "10":"15";
echo "<br/>";?>
<?php
echo "(3)";
$a=mt_rand(1,4);
switch($a){
  case 1;
  echo "1を表示する";
  break;
  case 2;
  echo "2を表示する";
  break;
  case 3;
  echo "3を表示する";
  break;
  case 4;
  echo "4を表示する";
  break;
}
echo "<br>";?>
<?php
echo "(4)";
$a=mt_rand(1,4);
switch($a){
  case 1;
  echo "1を表示する";

  case 2;
  echo "2を表示する";

  case 3;
  echo "3を表示する";

  case 4;
  echo "4を表示する";

}
echo "<br>" ;?>
<?php
echo "(5)";
$a=mt_rand(1,6);
switch($a){
  case 1;
  echo "1を表示する";
  break;
  case 2;
  echo "2を表示する";
  break;
  case 3;
  echo "3を表示する";
  break;
  case 4;
  echo "4を表示する";
  break;
  case 5;
  default:
  echo "error";
}
echo "<br>";
?>
<?php
echo "(6)";
$b=1;
$count=0;
while($b<10){
  echo $b;$b++;}
  $count++;
  echo "<br>"?>
<?php
  echo "(7)";
  $i=1;
  while($i<11){
    echo("iの値=$i<br>");
    $i++;
  }
  echo "<br>";
  ?>
  <?php
  echo "(8)";
  $i=1;
  do{
  echo $i;
  $i ++;
  }while($i<11);
echo "<br>";
  ?>

  <?php
  echo "(9)";
  for($counter = -3; $counter< 10;$counter){
    echo 100/$counter;
    break;
  }
  echo "<br>";
?>
<?php
echo "(10)";
for($counter = -3; $counter< 10;$counter){
  echo 100/$counter;
  break;
}
echo "<br>";
?>