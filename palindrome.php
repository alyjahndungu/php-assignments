<?php
//pass a string to be checked whether it is a palindrome or not
$word = "refer";

$check = strrev($word);
if ($word===$check) {
  echo $word. " is a Palindrome";
}else {
    echo $word. " is not a Palindrome";
}
?>