<?php

class Cmodel {
    public function getData(){
        /*
        $arrayResult[] = array(
            'TITLE' => 'Blog hosting site',
            'DATE' => '22.06.2020',
            'AUTHOR' => 'VolDeMort',
            'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
            'TEXT' => 'Nulla morbi, ad pur Portwisu morbsed id, arcu vestibulum dolor conmtum ac egestas lorem elit libero.'

        );
        $arrayResult[] = array(
            'TITLE' => 'Blog hosting site NEW',
            'DATE' => '21.07.2021',
            'AUTHOR' => 'Igor',
            'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
            'TEXT' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus harum voluptas esse vel cumque cul.'
    
        );
        */

        $mysqli = new mysqli('localhost', 'root', '', 'mvc');
        if (mysqli_connect_errno()) {

            echo 'Connection not established';

            exit();
        }
        $mysqli->set_charset('utf8');
        $query = "Select * From News";
        $result = $mysqli->query($query);
        $arrayResult = $result->fetch_all(MYSQLI_ASSOC);

        return $arrayResult;
    }
}
