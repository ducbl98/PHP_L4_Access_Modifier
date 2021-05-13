<?php
//include_once "../models/EmployeeManager.php";
use Models\EmployeeManager;
include "../vendor/autoload.php";

$index=$_REQUEST['index'];
$employeeManager =new EmployeeManager('../employee.json');
$employeeManager->deleteEmployee($index);
header("Location: ../index.php");