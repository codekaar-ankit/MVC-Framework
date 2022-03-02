<?php

namespace DatabaseModel;

include "Database.php";

use Helper\UrlHelper;
use Model\Database\DataBase;


class User
{
    private $db;
    public function __construct()
    {
        $this->db = new DataBase();
    }

    public function login($username, $password)
    {
        $user_query = "select * from registrationsDeatils where email_id = '$username' AND password = '$password'";
        $result = $this->db->makeQuery($user_query);
        $row =  mysqli_num_rows($result);
        $DataCheck = $result->fetch_assoc();
        $_SESSION["userId"] = $DataCheck['id'];
        return $DataCheck;
    }

    public function register($fname, $lname, $emailId, $dob, $gender, $pass, $post)
    {
        $checkIfAlreadyExist = "select * from registrationsDeatils where email_id = '$emailId'";

        $result = $this->db->makeQuery($checkIfAlreadyExist);
        $num = mysqli_num_rows($result);

        if ($num > 0) {
            return  false;
        } else {
            $regisQuery = "insert into registrationsDeatils(first_name, last_name, email_id , date_birth, gender, password, post) 
            VALUES('$fname', '$lname', '$emailId', '$dob', '$gender', '$pass', '$post')";
            $insertQuery = $this->db->makeQuery($regisQuery);
            return true;
//            mysqli_num_rows($insertQuery)
        }
    }

    public function isLogedin()
    {
        if ( !empty($_SESSION["userId"])) {
            $urlHelper = new UrlHelper();
            $dashboardUrl = $urlHelper->getViewUrl("dashboard.php");
            header("location: $dashboardUrl");
        }
    }

    public function logout()
    {
        $_SESSION["userId"] = "";
        session_unset();
        session_destroy();
        return true;
    }

    public static function redirectIfNotLoggedIn()
    {
        if (empty($_SESSION["userId"])){
            $urlHelper = new UrlHelper();
            $baseUrl = $urlHelper->getBaseUrl();
            header("location: $baseUrl");
//            $url->getBaseUrl();
        }
    }

}
