<?php
echo "配列課題" ."<br/>";
echo "(1)";
$weekday=array("Monday","Tuesday","Wednesday","Thursday","Friday");
echo $weekday[0]."<br/>";
?>
<?php
echo "(2)";
$fruits=array("apple"=>"りんご","grape"=>"ぶどう","strawberry"=>"いちご");
echo $fruits["grape"];
echo "<br/>";
?>
<?php
echo "(3)";
$weekday=array("Monday","Tuesday","Wednesday","Thursday","Friday");
echo $weekday[3]."<br/>";

$fruits=array("apple"=>"りんご","grape"=>"ぶどう","strawberry"=>"いちご");
echo $fruits["apple"];
echo "<br/>";
?>
<?php
echo "(4)"."<br>";
echo "問(1)"."<br>";
$weekday=array("Monday","Tuesday","Wednesday","Thursday","Friday");
$weekday=count($weekday);
echo $weekday."<br/>";

echo "問(2)"."<br>";
$fruits=array("apple"=>"りんご","grape"=>"ぶどう","strawberry"=>"いちご");
$fruits=count($fruits);
echo $fruits."<br>";

?>
<?php
echo "(5)";
$array=[
["田中",26,"男性"],
["遠藤",28,"女性"],
["中村",30,"女性"]
];
echo $array[1][0]. "(".$array[1][1]."歳".$array[1][2].")";
?>

