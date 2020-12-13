<?php 

    $router->get('/','WorkController@index');
    $router->post('/add','WorkController@add');
    $router->post('/update','WorkController@update');
    $router->get('/delete/{id}','WorkController@delete');
