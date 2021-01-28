
<?php

use Illuminate\Support\Facades\Route;

Route::get('/home','site\SiteController@index') -> name('home');


