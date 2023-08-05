<?php
function giveMyStatus()
{
    $status = "present";
    echo ("Your Current status is" . $status);
}
giveMyStatus();

//Global Variable
global $username;

function myDetails()
{
    //local variable
    $name = "Nischal Shakya";
    $address = "Natole";
    $contact = "9840151590";
    $college = "Dav";
    $faculty = "Science and humanitites";
    $username = "Nischal65";

    echo ("<br>");
    echo ($name);
    echo ("<br>");
    echo ($address);
    echo ("<br>");
    echo ($contact);
    echo ("<br>");
    echo ($college);
    echo ("<br>");
    echo ($faculty . "<br>");
    echo ("$username" . "<br>");
}
myDetails();

//method of defining two global variable using $GLOBALS
$num_one = 12;
$num_two = 14;
function doSum()
{
    echo ($GLOBALS['num_one'] + $GLOBALS['num_two']);
}
doSum();
//static keyword is used to define static variable
static $code = 45;
static $reg_no = 15825;
echo $code;
echo "<br>";

$val = $code++;
echo "<br>";

echo ($code);
echo ("<br>");

//Variable re-declaration
$num_one = 46;
echo ($num_one);

function staticExample()
{
    static $a = 12;
    $b = 12;
    //incrementing values

    echo ("<br>" . "before Incremeent: " . $a . "<br>");
    $a++;
    echo ("After Incremeent: " . $a . "<br>");
    echo ("before Incremeent: " . $b . "<br>");
    $b++;
    echo ("After Incrementing:" . $b . "<br>");
}
staticExample();
staticExample();
staticExample();
