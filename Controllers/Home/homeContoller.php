<?php
    $partHome = str_replace('Home','', __DIR__);
    include_once($partHome.'Controllers.php');

    class Home extends Controllers
    {
        public static function index($prmData){
            echo $prmData;
        }
    }

?>