<?php
namespace DatabaseQuery;
include "Database.php";
use Model\Database\Database;


class Query
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function insert($insertquery)
    {
        $checkifAlreadyData = "select * from crud_query where data = '$insertquery'";
        $result = $this->db->makeQuery($checkifAlreadyData);
        $rows = mysqli_num_rows($result);

        if ($rows > 0) {
           return false;
        } else {
            $insertQuery = "insert into crud_query(data) VALUES('$insertquery')";
            $this->db->makeQuery($insertQuery);
            return true;
        }
    }

    public function select($selectQuery)
    {
        return $this->db->makeQuery("select * from crud_query where data = '$selectQuery'");
    }

    public function __destruct()
    {
        $this->db = new Database(); ;
    }
}