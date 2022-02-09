<?php 
$a = 22;
$b = 8;

//Addition-----------------
echo "This is Addition: ";
function addition(){
    echo $GLOBALS['a'] + $GLOBALS['b'];
}
addition();
echo"<br> <br>";

//Subtraction----------------
echo "This is Subtraction: ";
function subtraction(){
    echo $GLOBALS['a'] - $GLOBALS['b'];
}
subtraction();
echo "<br> <br>";

//Multiplication--------------
echo "This is Multiplication: ";
function multiplication(){
    echo $GLOBALS['a'] * $GLOBALS['b'];
}
multiplication();
echo "<br> <br>";

//Divition---------------------
echo "This is Divition: ";
function divition(){
    echo $GLOBALS['a'] / $GLOBALS['b'];
}
divition();

?>