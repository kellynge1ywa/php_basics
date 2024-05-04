<?php
$name = "Kelly";
echo "My name is $name \n";
// echo 'My name is $name \n';

echo strlen($name); //count characters in a string;

$input = <<<Heredoc
 
Welcome to GeeksforGeeks.
Started content writing in GeeksforGeeks!.
I am enjoying this.
 
Heredoc;

$word = "Welcome to GeeksforGeeks.started content writing in GeeksforGeeks!.I am enjoying this. \n";

echo str_replace("Geeks", "World", "Hello GeeksforGeeks!"), "\n";


echo $input;
echo $word;
echo strrev("Hello GeeksforGeeks! "), "\n"; //reverse strings
// echo str_replace("Geeks", "World", "Hello GeeksforGeeks!"), "\n";

$original = " Kelly  Ngeiywa ";
$search_name = "Kelly";
$replace = "Kelvin";
$lname = "Ngeiywa";
echo str_replace($search_name, $replace, $original), "\n";
echo strpos($original, $lname), "\n";
echo strpos($original, "Korir"), "\n";
echo trim($original), "\n";
var_dump(strpos($original, "Korir"));

$trim = " hello there ";
$trimmed = trim($trim);
echo $trim, "\n";
echo $trimmed, "\n";

echo explode($trim);
// echo $sum;
?>