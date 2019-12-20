<?php
include_once "../Class/ManagerFile.php";
include_once "../Class/ManagerStudent.php";
include_once "../Class/Student.php";

$index = (int)$_GET["index"];
$listStudent = new ManagerStudent('../Data/data.json');
$listStudent->delete($index);
header('Location:../index.php');