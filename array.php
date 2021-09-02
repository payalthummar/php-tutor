<?php

    $array = array("Softweb","Technologies","Ahmedabad","Gujarat");
    print_r($array);
    echo "<br>";
    // 2 Type of array
    // 1. General
    // 2. Associate Array

    $assArr  = array('Abcd' => "Softweb", "Bcde" => "technologes");
    print_r($assArr);
    echo "<br>";
    $arrKey = array_keys($assArr);
    print_r($arrKey);

    echo "<br>";
    // Array to String
    echo implode(" ",$array);
    $str = "Softweb Technologies Ahmedabad Gujarat";
    echo "<br><br>";
    $strArr = explode(" ",$str);
    print_r($strArr);

    echo "<br>";
    foreach($array as $arrdata){
        echo $arrdata."<br>";
    }

    $arrDuble = array(
        array("Softweb","Techno","IT"),
        array("Ahmdabad", "Gujarat")
    );

    foreach($arrDuble as $arr){
        foreach($arr as $data){
            echo $data." || ";
        }
        echo "<br>";
    }
?>