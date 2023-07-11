<?php
class dbConnection
{
    private $servername='localhost';
    private $username='root';
    private $password='';
    private $database='bdtask';
    public $con;

    public function __construct()
    {
        // Create connection
        $this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);

// Check connection
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
//        echo "Connected successfully";
        return $this->con;
    }
}


?>