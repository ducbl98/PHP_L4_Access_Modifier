<?php
//include_once "../models/EmployeeManager.php";
//include_once "../models/Employee.php";
use Models\EmployeeManager;
include "../vendor/autoload.php";

$index = $_REQUEST['index'];
$employeeManager = new EmployeeManager('../employee.json');
$employees = $employeeManager->getAllEmployeeInformation();
$employee = $employees[$index];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Edit</title>
</head>
<body>
<form action="../actions/edit.php" method="post">
    <table>
        <tr>
            <td>Name :</td>
            <td><input type="text" name="name" value="<?php echo $employee->getName() ?>"></td>
        </tr>
        <tr>
            <td>Age :</td>
            <td><input type="text" name="age" value="<?php echo $employee->getAge() ?>"></td>
        </tr>
        <tr>
            <td>Address :</td>
            <td><input type="text" name="address" value="<?php echo $employee->getAddress() ?>"></td>
        </tr>
        <tr>
            <td>Phone :</td>
            <td><input type="text" name="phone" value="<?php echo $employee->getPhone() ?>"></td>
        </tr>
        <tr>
            <td>Position :</td>
            <td><input type="text" name="position" value="<?php echo $employee->getPosition() ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="hidden" name="index" value="<?php echo $index?>">
                <button type="submit">Save</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
