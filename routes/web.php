<?php

$router->get('name', 'NameController@index');
$router->get('name/{id}', 'NameController@show');
$router->get('/name/filter/{id}, NameController@getMany');
$router->post('name','NameController@store');
$router->delete('name/{id}', 'NameController@destroy');
$router->put('name/{id}','NameController@update');

