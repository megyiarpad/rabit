<?php 

class ViewAdvertisement extends Advertisement
{
    public function showAllAdvertisement() {
        $datas = $this->getAllAdvertisement();
        foreach ($datas as $data){
            echo $data['title'] . " ";
            echo $data['name']."<br>";
        }
    }
}