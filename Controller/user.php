<?php 

class ShowUser extends User
{
    public function showAllUsers() {
        $datas = $this->getAllUsers();
        foreach ($datas as $data){
            echo $data['name']."<br>";
        }
    }
}