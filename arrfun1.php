<?php
    $array1= array(12,34,13,11,56,47);
    $array2 = array("Ahm","Sur","Amr","Raj","Mum","Pune");
    print_r($array1);
    echo "<br><br>";
    print_r($array2);
    echo "<br><br>";
    echo "array_combine =";
    $arr1 = array_combine($array1,$array2);
    print_r($arr1); 
    echo "<br><br>";
    echo "array_change_key_case =";
    $age = array("Payal"=>26, "Nehal"=> 23, "Parth"=> 21, "Harmi"=>10);
    $arr2 = array_change_key_case($age,CASE_UPPER);
    print_r($arr2);
    echo "<br><br>";
    echo "array_chunk =";
    $arr3 = array_chunk($array2, 2);
    print_r($arr3);
    echo "<br><br>";

    echo "array_chunk =";
    $age1 = array_chunk($age, 2, true); // true = return original key 
    print_r($age1);
    echo "<br><br>";

    echo "array_column =";
    $arr4 = array_column($arr3,1);
    print_r($arr4);
    echo "<br><br>";

    echo "array_column =";
    $data = array(
        array('id' => 12, 'firstname' => "Payal", 'lastname'=> "Vora"),
        array('id' => 13, 'firstname' => "Nehal", 'lastname'=> "Satani"),
        array('id' => 14, 'firstname' => "Parth", 'lastname'=> "Thummar"),
    );
    $data1 = array_column($data, 'lastname', 'id');
    print_r($data1);
    echo "<br><br>";

    echo "array_count_values = ";
    $arr5 = array_count_values($array1);
    print_r($arr5);
    echo "<br><br>";

    echo "array_count_values = ";
    $count = array("A", "hello", "A", "good morning", "hello");
    $arr6 = array_count_values($count);
    print_r($arr6);
    echo "<br><br>";

    echo "array_diff = "; // Compare the values of two arrays,
    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("e"=>"red","f"=>"green","g"=>"blue");
    $result = array_diff($a1,$a2);
    print_r($result);
    echo "<br><br>";

    //Compare the keys and values of two arrays
    echo "array_diff_assoc = ";
    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("a"=>"red","b"=>"green","g"=>"blue");
    $a3=array("a"=>"red","b"=>"green","g"=>"grey","h"=>"pink");
    $result1 = array_diff_assoc($a1,$a2,$a3);
    print_r($result1);
    echo "<br><br>";

     //Compare the keys of three arrays
     echo " array_diff_keys = ";
    $b1=array("a"=>"red","b"=>"green","c"=>"blue");
    $b2=array("c"=>"yellow","d"=>"black","e"=>"brown");
    $b3=array("f"=>"green","c"=>"purple","g"=>"red");
    $result3 =array_diff_key($b1,$b2,$b3);
    print_r($result3);
    echo "<br><br>";

    echo " array_diff_uassoc using function = ";
    function myFunction($c1, $c2){
        if($c1 === $c2){
            return 0;
        } else{
            return ($c1 > $c2) ? 1 : -1;
        }
    }
    $c1=array("a"=>"red","b"=>"green","c"=>"blue");
    $c2=array("d"=>"red","b"=>"green","e"=>"blue");
    $result4 = array_diff_uassoc($c1, $c2, "myFunction"); // compare keys and values
    print_r($result4);
    echo "<br><br>";

    echo " array_fill = ";
    $arr7 = array_fill(11,10,"Softweb");
    print_r($arr7);
    echo "<br><br>";

    //Fill an array with values
    $fill = array("a","b","c","d");
    $arr8 = array_fill_keys($fill, "hello");
    print_r($arr8);
    echo "<br><br>";

    function test_odd($var){
        if($var % 2 == 0){
            return $var;
        }
    }
    echo "array_filter using function = ";
    $result5 = array_filter($array1, "test_odd");
    print_r($result5);
    echo "<br><br>";

    echo "array_flip = ";
    $arr9 = array_flip($array2);
    print_r($arr9);
    echo "<br><br>";

    echo "array_intersect = ";
    $d1=array("a"=>"red","b"=>"green","c"=>"black", "w"=>"grey");
    $d2=array("d"=>"red","b"=>"green","e"=>"yellow");
    $result6 = array_intersect($d1, $d2);
    print_r($result6);
    echo "<br><br>";

    echo "key_exist = ";
    $array3 = array("Ahm" =>1,"Sur" =>3,"Amr" =>4,"Raj"=>5,"Mum"=>6,"Pune"=>7);
    if($result7 = array_key_exists("Ahm",$array3)){
        echo "key exist KeY= ";
    } else{
        echo "key does not exist";
    }
    print_r($result7);
    echo "<br><br>";

    echo "array_keys = ";
    $array3 = array("Ahm" =>1,"Sur" =>3,"Amr" =>4,"Raj"=>5,"Mum"=>6,"Pune"=>7);
    $result8 = array_keys($array3, 7);
    print_r($result8);
    echo "<br><br>";

    echo "array_map using function = ";
    function mapFunction($v){
        return $v * $v;
    }
    $array1= array(12,34,13,11,56,47);
    $result9 = array_map("mapFunction", $array1);
    print_r($result9);
    echo "<br><br>";

    echo "array_merge = ";
    $result10 = array_merge($array1, $array2);
    print_r($result10);

    echo "<br><br>";
    echo "array_multisort = ";
   
    array_multisort($array2);
    print_r($array2);
    echo "<br><br>";

    echo "array_pad = ";
    $arr10 = array_pad($array1, 20, "**");
    print_r($arr10);
    echo "<br><br>";

?>