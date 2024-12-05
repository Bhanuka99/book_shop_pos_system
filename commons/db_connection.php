<?php 

class Db_Connection {
    private $hostname = "localhost";
    private $dbname   = "book_shop";
    private $dbusername = "root";
    private $dbpassword = "";
    public $conn;

    public function __construct(){
        $this->conn = new mysqli(
            $this->hostname,
            $this->dbusername,
            $this->dbpassword,
            $this->dbname
        );
        if (!$this->conn->connect_error) {
            $GLOBALS["conn"]=$this->conn;
        }
    }
}