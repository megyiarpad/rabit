<?php 

class ShowAdvertisement extends Advertisement
{
    public function showAllAdvertisement() {
        $datas = $this->getAllAdvertisement();
        foreach ($datas as $data){
            echo "Advertisement title: " .$data['title'] . " ";
            echo "from: " .$data['name']."<br>";
        }
    }
}