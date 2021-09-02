<?php
// String Function
// Array Function
// Server side Function
// Filter function

// 1. String Function
$str = "Softweb Technologies";
$str1 = "Softweb Technology";
$str2 = "softweb techno";
echo "<br>";
echo $str;
echo "<br>";
print_r(str_getcsv($str,",")); // Parse string to an array
echo "<br>";
echo str_ireplace("soft","Hard",$str); // case insensitive
echo str_replace("Soft","Hard",$str); // case sensitive
echo "<br>";
echo str_pad($str,100,"*",STR_PAD_LEFT);
echo "<br>";
echo str_repeat($str,10);
echo "<br>";
echo str_rot13($str);
echo "<br>";
echo str_shuffle($str);
echo "<br>";
$arrStr = str_split($str,2);
print_r($arrStr);
echo "<br>";
echo str_word_count($str);
echo "<br>";
echo strcasecmp($str, $str1); // Case Insensitive str > 16 , str< -16, Str= 0
echo "<br>";
echo strcmp($str, $str1); // Case Sensitive
echo "<br>";
echo strchr($str,"e"); // searches for the first occurrence of a string and returns rest of the string
echo "<br>";
echo strchr($str, "e", true); // If set to "true", it returns the part of the string before the first occurrence of the search parameter.
echo "<br>";
echo strcoll($str,$str1); // str > -1, str < 1, str = 0
echo "<br>";
echo strcspn($str,"e",1,5); // Print the number of characters found in string
echo "<br>";
echo stripos($str,"F"); // position of the first occurance
echo "<br>";
var_dump(strpos($str,"F")); // return false (case sensitive)
echo "<br>";
echo strripos($str,"S"); // position of the last occurance
echo "<br>";
var_dump(strrpos($str,"w")); // position of the last occurance (case sensitive)
echo "<br>";
echo stripslashes("Apple\'s iphone"); // removes backslashes
echo "<br>";
echo stristr($str," "); // searches for the first occurrence of a string and return the rest of the string
echo "<br>";
echo strlen($str);
echo "<br>";
echo strnatcasecmp($str,$str1); //  compares two strings using a "natural" algorithm str > -1, str < 1, str = 0
echo "<br>";
echo strnatcmp($str,$str); 
echo "<br>";
echo strncasecmp($str,$str,5);
echo "<br>";
echo strncmp($str,$str,3);
echo "<br>";
echo strpbrk($str,"abt"); // return the rest of the string from where it found the first occurrence of the specified characters
echo "<br>";
echo strrchr($str,"o"); // finds the position of the last occurrence of a string 
echo "<br>";
echo strrev($str);
echo "<br>";
echo strpos($str, "w"); // from last occurance 
echo "<br>";
echo strripos($str,"S");
echo "<br>";
echo strrpos($str,"S");
echo "<br>";
echo strspn($str,"ft",3,20); //returns the number of characters found in the string that contains only characters from the charlist parameter
echo "<br>";
echo strstr($str,"T");
echo "<br>";
echo strtolower($str);
echo "<br>";
echo strtoupper($str);
echo "<br>";
echo strtr($str,3,5);
echo "<br>";
echo strval(100);
echo "<br>";
echo substr($str,5,10); /* A positive number - Start replacing at the specified position in the string
Negative number - Start replacing at the specified position from the end of the string
0 - Start replacing at the first character in the string*/
echo "<br>";
echo substr_compare($str,$str1,3,5);
echo "<br>";
echo substr_count($str,"o");
echo "<br>";
echo substr_replace($str,"...",5,5);
echo "<br>";

?>