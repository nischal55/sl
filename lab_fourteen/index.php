<?php
class Fruit(){
     private $fruit_name;
}
class Student
{
    //attribute
    public function __construct()
    {
        $this->first_name = 'Mohan';
        $this->last_name = 'Shrestha';
        $this->email = "mohansth@gmail.com";
        $this->address = "Baneshwor";
    }

    public function getStudentInfo()
    {
        echo "Full Name" . $this->first_name . " " . $this->last_name;
    }
}
$std = new Student();
echo $std->getStudentInfo();

class Country
{
    public $country_name;
    public $country_currency;
}
$country = new Country();
$country->country_name = "Nepal";
echo $country->country_name;


