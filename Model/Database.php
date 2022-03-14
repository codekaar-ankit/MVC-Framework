<?php
namespace Model\Database;

class Database
{
    private function getConnection()
    {
        $servername = "localhost";
        $username = "ankit";
        $password = "root";
        $conn = mysqli_connect($servername, $username, $password, 'mvc');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    public function makeQuery(string $query)
    {
        return mysqli_query($this->getConnection(), $query);
    }
}
