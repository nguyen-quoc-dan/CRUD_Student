<?php
include_once "../Class/ManagerStudent.php";
include_once "../Class/Student.php";

$index = (int)$_GET["index"];
$listStudent = new ManagerStudent('../Data/data.json');
$student = $listStudent->getListStudent();
$listStudent->edit($index);

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
<form method="post">
    <div class="container">
        <table class="table table-dark">
            <tr>
                <th scope="col">Name:</th>
                <td><input type="text" name="name" value="<?php echo $student[$index]->name; ?>"></td>
                <th scope="col">Age:</th>
                <td><input type="text" name="age" value="<?php echo $student[$index]->age; ?>"></td>
                <th scope="col">Address:</th>
                <td><input type="text" name="address" value="<?php echo $student[$index]->address; ?>"></td>
                <th scope="col">Group:</th>
                <td><input type="text" name="group" value="<?php echo $student[$index]->group; ?>"></td>
                <th scope="col"><input type="submit" value="edit"></th>
            </tr>
        </table>
    </div>
</form>
</body>
</html>