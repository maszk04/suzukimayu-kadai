<?php
echo "(2-1)";
$z=2+4;
$x=$z-5;
echo $x. "\n";?>
<?php
$y=4-5;
$v=$y+2;
echo $v. "<br>";?>
<?php
echo "(2-2)";
$a=2*3;
$b=4+1;
echo $a+$b. "\n";?>
<?php
$e=3+4+1;
$d=2*$e;
echo $d. "<br>";?>
<?php
echo "(2-3)";
$username="Admin";
if($username == "Admin"){
  echo("Welcome to the admin page.");
}else{
  echo("Welcome to the user page.");
}
echo "<br>";
?>
<?php
echo "(2-4)";
$animals = ["rabbit","dog","cat"];
foreach ($animals as $animal){
  echo $animal;
};
echo "<br>";
?>
<?php
echo "(2-5)";
$animals =array ( "rabbit","dog","cat");
sort($animals);
print_r($animals)."<br>";
?>
<?php
echo "(2-6)";
echo "<br/>";
?>