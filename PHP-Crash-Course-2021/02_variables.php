<?php

// What is a variable
echo "<h3>Varibles are of different types</h3>";
// Variable types
echo "1.String";
echo "<br>";
echo "2.Integer";
echo "<br>";
echo "3.Bollean";
echo "<br>";
echo "4.Float/double";
echo "<br>";
echo "5.Null";
echo "<br><br>";


// Declare variables
$name ="Rakesh";
$age =20;
$ismyself=true;
$number=1.60;
$salary=null;
// Print the variables. Explain what is concatenation
echo "<b>Examples</b>";
echo "<br>";
echo $name;echo "<br>";
echo $age;echo "<br>";
echo $ismyself;echo "<br>";
echo $number;echo "<br>";
echo $salary;echo "<br>";

// Print types of the variables
echo "<b>Types of Varibles</b>";
echo "<br>";
echo gettype($name);echo "<br>";
echo gettype($age);echo "<br>";
echo gettype($ismyself);echo "<br>";
echo gettype($number);echo "<br>";
echo gettype($salary);echo "<br>";
echo "<br>";


// Print the whole variable
echo "<b>Printing length of varibles using var_dump</b>";
echo "<br>";
var_dump($name,$age,$ismyself,$number,$salary);echo "<br>";
echo "<br>";

// Change the value of the variable
echo "<b>Changing the value of the variable</b>";echo "<br>";
$name=false;

// Print type of the variable
echo gettype($name);echo "<br>";

// Variable checking functions
is_string($name);//true
is_int($age);//true
is_bool($ismyself);//true
is_float($number);//true
is_null($salary);//true
// Check if variable is defined
isset($name);//true
isset($address);//false
echo "<br>";echo "<br>";
// Constants
echo "<b>Constnat</b>";
define('PI', '3.14');echo "<br>";
echo PI.'<br>';
echo "echo not 'PI'".'<br><br>';

// Using PHP built-in constants
echo "<b>PHP built-in Constnat</b>";echo "<br>";
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';