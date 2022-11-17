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
        echo $name;
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

?>