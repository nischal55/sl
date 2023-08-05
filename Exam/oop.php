<?php
class Employee
{
    private $name;
    private $address;


    function setName($emp_name, $emp_address)
    {
        $this->name = $emp_name;
        $this->address = $emp_address;
    }
}
class Permanent extends Employee
{
    private $salary;
    private $post;
    function setData($salary, $post)
    {
        $this->salary = $salary;
        $this->post = $post;
    }

    function __construct($name, $address, $salary, $post)
    {
        $this->name = $name;
        $this->address = $address;
        $this->salary = $salary;
        $this->post = $post;
    }
    function showData()
    {
        echo ($this->name);
    }
}

$emp1 = new Permanent('Nischal', 'ktm', '10lakh', 'manager');
$emp1->showData();
