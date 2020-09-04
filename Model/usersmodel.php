<?php 

class User extends BaseModel
{

    protected function getAllUsers() {
        $sql = "SELECT name FROM users";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if($numRows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
}