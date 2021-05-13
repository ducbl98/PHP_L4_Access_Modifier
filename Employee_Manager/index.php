<?php
//include_once "models/EmployeeManager.php";
//include_once "models/Employee.php";
use Models\EmployeeManager;

include "./vendor/autoload.php";

$employeeManager = new EmployeeManager("employee.json");
$employees = $employeeManager->getAllEmployeeInformation();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Management</title>
    <style>
        table {
            width: 500px;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<a href="views/add.php">Them moi</a>
<table border="1">
    <tr>
        <td>Order</td>
        <td>Name</td>
        <td>Age</td>
        <td>Address</td>
        <td>Phone Number</td>
        <td>Position</td>
        <td></td>
        <td></td>
    </tr>

    <?php foreach ($employees as $order => $employee): ?>
        <tr>
            <td><?php echo $order + 1 ?></td>
            <td><?php echo $employee->getName() ?></td>
            <td><?php echo $employee->getAge() ?></td>
            <td><?php echo $employee->getAddress() ?></td>
            <td><?php echo $employee->getPhone() ?></td>
            <td><?php echo $employee->getPosition() ?></td>
            <td><a onclick="return confirm('Are you sure?')" href="actions/delete.php?index=<?php echo $order ?>">Delete</a></td>
            <td><a href="views/edit.php?index=<?php echo $order ?>">Edit</a></td>
        </tr>

    <?php endforeach; ?>
</table>
</body>
</html>
