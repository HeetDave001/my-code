<?php

 $str = "this";
echo $str. "<br>";
$lenn = strlen($str);
echo "The length of string is ". $lenn . ". Thank you <Br>";
echo "The Number of word in this string is ". str_word_count($str) .". Thank you <Br>";
echo "The reversed string is ". strrev($str) .". Thank you <Br>";
echo "The search for is in this string is ". strpos($str ,"is") .". Thank you <Br>";
echo "The Replace string is ". str_replace("is", "at" , "$str") .". Thank you <Br>";
// echo $lenn;

?>