<?php
namespace Controller\User;
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
            $_SESSION["message"] =["type"=>true,"displayMessage"=>"Welcome to dashboard!"];
            header("Location: ../views/dashboard.php");
        } else {
            $_SESSION["message"] =["type"=>false,"displayMessage1"=>"username or password is wrong"];
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
            $_SESSION["message"] =["type"=>true,"displayMessage"=>"Welcome to dashboard account created successfully!"];
        } else {
            header("Location: ../views/dashboard.php");
            $_SESSION["message"] =["type"=>false,"displayMessage1"=>"Please input another email id as this is already registered with us."];
        }
    }

    public function logoutUser()
    {
        $this->userModel->logout();
        header("Location: ../index.php "); echo "logout";
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
    case "logout":
        $controller->logoutUser();
        break;
    default:
        die("Your favorite color is neither red, blue, nor green!");
}
