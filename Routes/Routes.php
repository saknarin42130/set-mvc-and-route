<?php
    include_once('../Classes/Route.php');
    include_once('../Controllers/Home/homeContoller.php');
    include_once('../Controllers/Admin/homeController.php');

    Route::set('/', function(){
        echo 'index//';
    });

    Route::set('home/{name}', function($reque){
         Home::index($reque['name']);
         Home::View('Home','Home');
    });

    Route::set('admin/{name}', function($reque){
        Admin::index($reque['name']);
        Admin::View('Admin','Home');
    })

?>