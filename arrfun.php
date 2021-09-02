<?php

  function test_odd($var)
  {
      if($var%2==0){
        return($var);
      }
  }
  function counter($var){
      return $var*2;
  }
    $arr = array(12,23,34,45,56);
    $arr1 = array("Ahm","Sur","Raj","Amr","Pon");
    print_r($arr);
    echo "<br><br>";
    $arr2 = array_combine($arr1,$arr);
    print_r($arr2);
    echo "<br><br>";
    $arr3 = array_change_key_case($arr2,CASE_UPPER);
    print_r($arr3);
    echo "<br><br>";
    $arr4 = array_chunk($arr,2);
    print_r($arr4);
    echo "<br><br>";
    $arr5 = array_column($arr4,0);
    print_r($arr5);
    echo "<br><br>";
    $arr6 = array_count_values($arr);
    print_r($arr6);
    echo "<br><br>";
    $arr7 = array_diff($arr,$arr5);
    print_r($arr7);
    echo "<br><br>";
    $arr8 = array_fill(10,10,"Softweb");
    print_r($arr8);
    echo "<br><br>";
    $arr9 = array_filter($arr,"test_odd");
    print_r($arr9);
    echo "<br><br>";
    $arr10 = array_flip($arr2);
    print_r($arr10);
    echo "<br><br>";
    $arr11 = array_intersect($arr,$arr7);
    print_r($arr11);
    echo "<br><br>";
    $arr12 = array_key_exists("Ahm",$arr2);
    print_r($arr12);
    echo "<br><br>";
    $arr13 = array_keys($arr2);
    print_r($arr13);
    echo "<br><br>";
    $arr14 = array_map("counter",$arr);
    print_r($arr14);
    echo "<br><br>";
    $arr15 = array_merge($arr,$arr1);
    print_r($arr15);
    echo "<br><br>";
    array_multisort($arr,SORT_DESC);
    print_r($arr);
    echo "<br><br>";
    $arr16 = array_pad($arr,10,"**");
    print_r($arr16);

?>