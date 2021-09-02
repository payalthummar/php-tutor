<?php

$email = "john.doe@example.,com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}
echo "<br>";

$num = "ABCD";
if (filter_var($num, FILTER_VALIDATE_INT)) {
    echo("Valid INT");
  } else {
    echo("Invalid INT");
  }
  echo "<br>";

  $num = 3;
  echo "Num is ".is_numeric($num) . "<br>";
  $num = "abc";
  echo "Num is". is_numeric($num). "<br>";

  echo filter_id("email");
  echo "<br>";
  



?>