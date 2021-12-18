<?php
session_start();
include "../Model/User.php";

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function loginUser()
    {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if ($this->userModel->login($user, $pass)) {
            header("Location: ../views/dashboard.php");
            $_SESSION["message"] =["type"=>true,"message"=>"Welcome to dashboard!"];
        } else {
            $_SESSION["message"] =["type"=>false,"message"=>"username or password is wrong"];
            header("Location: ../index.php ");
        }
    }

    public function registerUser()
    {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $emailId = $_POST['emailId'];
        $birthDate = $_POST['birthDate'];
        $gender = $_POST['gender'];
        $pass = $_POST['pass'];
        $post = $_POST['postDetails'];
        if ($this->userModel->register($firstName, $lastName, $emailId, $birthDate, $gender, $pass, $post)) {
            header("Location: ../views/dashboard.php");
            $_SESSION["user"] =["type"=>true,"user"=>"Welcome to dashboard!"];
        } else {
//            $_SESSION["user"] =["type"=>true,"user"=>"Please input details."];
            header("Location: ../index.php "); echo "hi";
        }
    }
}

$controller = new UserController;

$action = $_POST['action'];
switch ($action) {
    case "login":
        $controller->loginUser();
        break;
    case "register":
        $controller->registerUser();
        break;
    default:
        die("Your favorite color is neither red, blue, nor green!");
}
