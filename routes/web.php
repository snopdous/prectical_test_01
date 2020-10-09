<?php

use Illuminate\Support\Facades\Route;
    Route::get('/', function () {
        return redirect('project');
    });
    Route::prefix('project')->namespace('App\Http\Controllers')->group(function(){
        Route::get('/','ProjectController@index');
        Route::any('add','ProjectController@add');
    });

