<?php 

class Controller
{
    public $db = null;

    function __construct() {
        $this->openDatabaseConnection();
    }

    private function openDatabaseConnection {
        // Create connection
        $conn = new mysqli('localhost', 'root');

        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
            }
        echo "Connected successfully";
        }
}