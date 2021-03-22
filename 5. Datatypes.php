<?php

// PHP supports the following data types:

// String
// Integer
// Float (floating point numbers - also called double)
// Boolean
// Array
// Object
// NULL
// Resource

// String

$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;

// Integer

$x = 5985;
echo "<br>Integer<br>".var_dump($x);
// The PHP var_dump() function returns the data type and value:

// Boolean

$x = true;
$y = false;

// Array

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

// Object  

// NULL
$x = null;
var_dump($x);

// PHP Resource
// The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.

// A common example of using the resource data type is a database call.

// We will not talk about the resource type here, since it is an advanced topic.
?>
