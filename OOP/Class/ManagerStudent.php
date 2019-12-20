<?php

include_once "ManagerFile.php";

class ManagerStudent extends ManagerFile

{
    public function add($student)
    {
        $listStudent = $this->readFile();
        $data = [
            "name" => $student->name,
            "age" => $student->age,
            "address" => $student->address,
            "group" => $student->group,
        ];

        array_push($listStudent, $data);
        $this->saveFile($listStudent);

    }

    public function delete($index)
    {
        $listStudent = $this->readFile();
        array_splice($listStudent, $index, 1);
        $this->saveFile($listStudent);
    }

    public function edit($index)
    {
        $student = $this->getListStudent();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $student[$index]->name = $_POST['name'];
            $student[$index]->age = $_POST['age'];
            $student[$index]->address = $_POST['address'];
            $student[$index]->group = $_POST['group'];
            $this->saveFile($student);

        }
    }

    public function getListStudent()
    {
        $data = $this->readFile();
        $list = [];
        foreach ($data as $item) {
            $student = new Student(
                $item["name"],
                $item["age"],
                $item["address"],
                $item["group"]
            );
            array_push($list, $student);

        }
        return $list;
    }

    public function search($keyword)
    {
        $data = $this->readFile();
        $lists = [];
        foreach ($data as $value) {
            if ($value['name'] == $keyword ){
                $student = new Student($value['name'], $value['age'], $value['address'], $value ['group']);
                array_push($lists, $student);
            }

        }
        return $lists;
    }
}