<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Employee</title>
</head>
<body>
<form action="../actions/create.php" method="post">
    <table>
        <tr>
            <td>Name :</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Age :</td>
            <td><input type="text" name="age"></td>
        </tr>
        <tr>
            <td>Address :</td>
            <td><input type="text" name="address"></td>
        </tr>
        <tr>
            <td>Phone :</td>
            <td><input type="text" name="phone"></td>
        </tr>
        <tr>
            <td>Position :</td>
            <td><input type="text" name="position"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Save</button></td>
        </tr>
    </table>
</form>
</body>
</html>
