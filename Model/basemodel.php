<?php 

class BaseModel
{
    private $servername;
    private $username;
    private $psswrd;
    private $dbname;

    protected function connect() {
        $this->servername = "localhost";
        $this->username = "root";
        $this->psswrd = "";
        $this->dbname = "rabit";

        $conn = new mysqli($this->servername, $this->username, 
                            $this->psswrd , $this->dbname);
        return $conn;
    }
}