<?php
    $partAdmin = str_replace('Admin','', __DIR__);
    include_once($partAdmin.'Controllers.php');

    class Admin extends Controllers
    {
        public static function index($prmData)
        {
            echo($prmData);
        }
    }

?>