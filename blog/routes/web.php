<?php

Route::get('/home', 'HomeController@showContent')->middleware('home');
