<?php

namespace Controller;
//session_start();
include_once "../Model/Query.php";
use DatabaseQuery\Query;



class DashboardController
{
    private $crudModel;

    public function __construct()
    {
        $this->crudModel = new Query();
    }

    public function insertData()
    {
        $query = $_POST['crQuery'];
        if ($this->crudModel->insert($query)) {
            header("Location: ../views/dashboard.php");
            $_SESSION["message"] = ["type" => true, "displayMessage" => "Data inserted successfully!"];
        } else {
            header("Location: ../views/dashboard.php");
            $_SESSION["message"] = ["type" => false, "displayMessage1" => "Data is already  there!"];
        }
    }

    public function selectData()
    {
        $query = $_POST['crQuery'];
        $result = $this->crudModel->select($query);

        if (mysqli_num_rows($result)) {
            $_SESSION["with"] = $result->fetch_assoc();
            header("Location: ../views/query/list.php");
        } else
            $_SESSION["message"] = ["type" => true, "displayMessage" => "No Data found"];
    }
}

$controller = new DashboardController;

if (key_exists('actionQuery', $_POST)) {

    $action = $_POST['actionQuery'];
    switch ($action) {
        case "Insert":
            $controller->insertData();
            break;
        case "Select":
            $controller->selectData();
            break;
        default:
            die("Your favorite color is neither red, blue, nor green!");

    }
}