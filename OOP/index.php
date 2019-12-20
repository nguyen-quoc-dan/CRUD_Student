<?php
include_once "Class/Student.php";
include_once "Class/ManagerFile.php";
include_once "Class/ManagerStudent.php";

$file = new ManagerFile("Data/data.json");
$students = $file->readFile();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="Css/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="get" action="Process/seach.php">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                       name="keyword">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <a href="Process/add.php">
        <button type="button" class="btn btn-outline-success mt-3 mb-3 ml-3">Creat</button>
    </a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">NAME</th>
            <th scope="col">AGE</th>
            <th scope="col">ADDRESS</th>
            <th scope="col">GROUP</th>
            <th scope="col">EDIT</th>
            <th scope="col">DELETE</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($students as $key=>$student):
            ?>
            <tr>
                <th scope="row"><?php echo $key++ ?></th>
                <td><?php echo $student["name"] ?></td>
                <td><?php echo $student["age"] ?></td>
                <td><?php echo $student["address"] ?></td>
                <td><?php echo $student["group"] ?></td>
                <td>
                    <a href="Process/edit.php?index=<?php echo $key ?>">
                        <button type="button" class="btn btn-outline-info">Edit</button>
                    </a>
                </td>
                <td>
                    <a href="Process/delete.php?index=<?php echo $key ?>">
                        <button type="button" class="btn btn-outline-danger ">Delete</button>
                    </a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
        </tbody>
    </table>
</div>
</body>
<script src="Js/js/bootstrap.min.js"></script>
</html>