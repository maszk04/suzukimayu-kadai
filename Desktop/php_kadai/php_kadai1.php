<?php
echo "(1-1)";
if(strcasecmp("abc","ABC")==0)
    echo "match"."<br/>";?>

<?php
echo "(1-2)";
$name="abc"."def" ;
echo $name ."<br/>" ;?>

<?php
echo "(1-3)";
$a= "あいうえお"  ;
$b= $a. "かきくけこ" ;
echo "$b"."<br/>" ;?>
<?php
echo "(1-4)";
define("TAX" , 1.10);
$price=1000;
echo "税込" .$price *TAX. "円". "\n";?>

<?php
const TAX=1.1;
$price=120;
$sum=$price * TAX;
echo "税込". $sum. "円"."<br/>" ;?>
<?php
echo "(1-5)";
echo "行番号:".__LINE__."<br/>" ;?>
<?php
echo "(1-6)";
$n=300;
echo $n/365 ."<br/>" ;?>

<?php
echo "(1-7)";
$m=1;
echo $m++. "\n" ;
echo $m. "<br />";?>
<?php
echo "(1-8)" ;
$l=5;
echo $l--. "\n" ;
echo $l . "<br/>" ;?>
<?php
echo "(1-9)";
$s=3;
$p=4;
$s++;
echo ($s)."\n";
++$p;
echo ($p). "<br/>";?>
<?php
echo "(1-10)";
$i=3;
$o=2;
echo $i+$o. "<br/>";?>
<?php
echo "(1-11)";
$q=1234;
var_dump($q)."<br/>";
?>
<?php
echo "(1-12)";
$locations=3;
$c=$locations +2;
echo $c . "<br/>";
?>






