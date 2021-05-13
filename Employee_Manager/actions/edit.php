<?php
//include_once "../models/EmployeeManager.php";
//include_once "../models/Employee.php";
use Models\EmployeeManager;
include "../vendor/autoload.php";

$index = $_REQUEST['index'];

$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$address = $_REQUEST['address'];
$position = $_REQUEST['position'];
$phone = $_REQUEST['phone'];
$employee=[
    'name'=>$name,
    'age'=>$age,
    'address'=>$address,
    'phone'=>$phone,
    'position'=>$position
];

$employeeManager=new EmployeeManager('../employee.json');
$employeeManager->editEmployee($index,$employee);
header('Location: ../index.php');

header('Location: ../index.php');
