<?php
session_start();
include "database.php";

class User
{
    private $db;
    public function __construct()
    {
        $this->db = new DataBase;
    }

    public function login($username, $password)
    {
        $user_query = "select * from registrationsDeatils where email_id = '$username' AND password1 = '$password'";
        $result = $this->db->makeQuery($user_query);
        return mysqli_num_rows($result);
    }

    public function register($fname, $lname, $emailId, $dob, $gender, $pass, $post)
    {
        $checkIfAlreadyExist = "select * from registrationsDeatils where email_id = '$emailId'";
        $result = $this->db->makeQuery($checkIfAlreadyExist);
        $num = mysqli_num_rows($result);

        if ($num == 1) {
            header("Location: ../index.php");
            $_SESSION["user"] =["type"=>false,"user"=>"This email-id is already registered with us, Please login.."];

        } else {
            $regisQuery = "insert into registrationsDeatils(first_name, last_name, email_id , date_birth, gender, password1, post) VALUES('$fname', '$lname', '$emailId', '$dob', '$gender', '$pass', '$post')";
            $insertQuery = $this->db->makeQuery($regisQuery);
            return mysqli_num_rows($insertQuery);
        }
    }

}
