<?php

    class Controllers
    {
        public static function View($path, $file)
        {
            include_once('../Views/'. $path. '/' . $file . '.php');
        }

    }

?>