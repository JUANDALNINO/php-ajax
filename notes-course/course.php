<?php
    echo 'A text'; // Constructor

    echo 'A';
    echo 'B';
    echo 'C';

    echo '<strong>This is a bold text</strong>'; // With HTML tags


// 01.
// Variables:
    $variable_name = 'value';
    $username = 'JuAnDa';
    $age = 25;
    echo $username;

// Const
// name - value - sensitive (false or true)
define('MSG', 'Hi SoloLearners');
echo MSG;

// Data types:
    // String
    $string1 = 'Hi World';
    $string2 = 'Hi two';

    // For join two variables:
    echo $string1.$string2;

    // Integer
    $int1 = 42;
    $int2 = -42;

    //Float
    $x = 42.123;

    //Boolean
    $x = true;
    $y = false;

    $stri = '10';
    $int = 20;
    $sum = $stri + $int;
    echo($sum); // 30

// Scope variables:
    $name = 'David';

    function getName() {
        echo $fullName;
    }
    getName(); // Undefined variable

    // Key word: GLOBAL
    function getName2() {
        global $name;
        echo $name;
    }
    getName2();


// 02.
// Operators:

$x = 14;
$y = 3;
echo $x % $y; // 2

$num = 9;
$num = $num%2;
echo $num;

$a = 2; $b = $a++; echo $b; // 2
$a = 2; $b = ++$a; echo $b; // 3

/*  == Equal
    === Identical
    != No equal
    <> No equal
    !== No identical
*/

/*
    && 
    || = O
    ! = No
*/


?>