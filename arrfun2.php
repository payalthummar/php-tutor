<?php
function divideby($var1, $var2){
    return $var1 + $var2;
}
function getOld($var, $key){
    echo $var."   ".$key."<br>";
}
function compareValue($v1, $v2){
    return $v1>$v2?$v1:$v2;
}
$array1= array(12,34,13,11,56,47);
$array2 = array("Ahm","Sur","Amr","Raj","Mum","Pune");
print_r($array1);
echo "<br><br>";
$arr1 = array_pop($array1);
print_r($arr1);
print_r($array1);
echo "<br><br>";
array_push($array1,100);
print_r($array1);
echo "<br><br>";
echo array_product($array1);
echo "<br><br>";
$arr2 = array_rand($array1,3);
print_r($arr2);
echo "<br><br>";
$arr3 = array_reduce($array1,"divideby");
print_r($array1);
print_r($arr3);
echo "<br><br>";
echo array_sum($array1);
echo "<br><br>";
$arr3 =  array_replace($array1, $array2);
print_r($arr3);
echo "<br><br>";
$arr4 = array_reverse($array1);
print_r($arr4);
echo "<br><br>";
echo $arr5 = array_shift($array1);
print_r($array1);
echo "<br><br>";
array_unshift($array1,111);
print_r($array1);
echo "<br><br>";
$arr6 = array_slice($array1,3,2);
print_r($array1);
print_r($arr6);
echo "<br><br>";
$arr7 = array_splice($array1,3,2);
print_r($array1);
print_r($arr7);
echo "<br><br>";
$arr8 = array_udiff($array1, $arr7,"compareValue");
print_r($arr8);
echo "<br><br>";
array_push($arr8,111);
print_r($arr8);
$arr9 = array_unique($arr8);
print_r($arr9);
echo "<br><br>";
$arr10 = array_values($array2);
print_r($arr10);
echo "<br><br>";
$arr11 = array_walk($array1,"getOld");
?>