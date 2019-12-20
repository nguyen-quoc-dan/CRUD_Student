<?php
include_once "../Class/ManagerStudent.php";
include_once "../Class/Student.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $group = $_POST['group'];
    $student = new Student($name, $age, $address, $group);
    $pathFIle = "../Data/data.json";
    $studentManager = new ManagerStudent($pathFIle);
    $studentManager->add($student);

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../Css/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <table>
        <form method="post">
            <tr>
                <td>Name:<input type="text" name="name"><br></td>
            </tr>
            <tr>
                <td>Age:<input type="number" name="age"><br></td>
            </tr>
            <tr>
                <td> Address:<input type="text" name="address"><br></td>
            </tr>
            <tr>
                <td> Group:<input type="text" name="group"><br></td>
            </tr>
            <tr>
                <td><input type="submit" value="ADD"></td>
            </tr>
            <tr>
                <td><input type="submit" value="BACK"></td>
            </tr>

    </table>
    </form>
</div>

</body>
</html>