<?php

class DBConn
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = 'password';
    private $dbname = 'tasklist';
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        if ($this->conn->connect_error) {
            die('Connection Failed: ' . $this->conn->connect_error);
        }
    }

    public function get_connection()
    {
        return $this->conn;
    }

    public function close_connection()
    {
        $this->conn->close();
    }
}
