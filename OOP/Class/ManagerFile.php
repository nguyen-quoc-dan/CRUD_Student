<?php


class ManagerFile
{
    public $pathFIle;

    public function __construct($pathFIle)
    {
        $this->pathFIle = $pathFIle;
    }

    public function readFile()
    {
        $data = file_get_contents($this->pathFIle);
        return json_decode($data, true);
    }

    public function saveFile($data)
    {
        $dataSave = json_encode($data);
        file_put_contents($this->pathFIle, $dataSave);

    }
}