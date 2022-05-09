<?php
echo "関数課題1";
echo "<br>";
function sum($x,$y){
  $x=$x+$y;
  return $x;
}
  echo sum(1,5);
echo "<br>";

function genzan($a,$b){
  $a=$a-$b;
  return $a;
}
echo genzan(3,2);
echo "<br>";

function jozan($n,$m){
  $n=$n*$m;
  return $n;
}
echo jozan(3,4);
echo "<br>";

function josan($c,$d){
  $c=$c/$d;
  return $c;
}
echo josan(6,2);
echo "<br>";

function joyo($p,$r){
  $p=$p%$r;
  return $p;
}
echo joyo(7,2);
echo "<br>";
?>
<?php
echo "関数課題2";
echo "<br>";
function kazan($x,$y){
  $x=&$x+$y;
  return $x;
}
echo kazan(1,5);
echo "<br>";

function genzan1($a,$b){
  $a=&$a-$b;
  return $a;
}
echo genzan1(3,2);
echo "<br>";

function jozan1($n,$m){
  $n=&$n*$m;
  return $n;
}
echo jozan1(3,4);
echo "<br>";

function josan1($c,$d){
  $c=&$c/$d;
  return $c;
}
echo josan1(6,2);
echo "<br>";

function joyo1($p,$r){
  $p=&$p%$r;
  return $p;
}
echo joyo1(7,2);
echo "<br>";
?>