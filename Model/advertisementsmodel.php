<?php 

class Advertisement extends BaseModel
{

    protected function getAllAdvertisement() {
        $sql = "SELECT advertisements.title, users.name
                FROM advertisements, users 
                WHERE advertisements.userid = users.id";
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