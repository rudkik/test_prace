<?php

use App\Services\Router;
use App\Controllers\User;


Router::page('/main','main');
Router::page('/users','users');
Router::page('/user_new','user_new');
Router::page('/user', 'user');

Router::post('/user/create', User::class,'createUser' , true);
Router::post('/user/delete', User::class,'deleteUser' , true);

Router::enable();





