<?php

use src\App\Route;

// 메인페이지
Route::get('/', 'ViewController@index');

    // 온라인 집들이
Route::get('/page6', 'ViewController@page6');
    Route::get('/houses/list', 'ViewController@houses_list');

    // 전문가
    Route::get('/page37', 'ViewController@page37');
    Route::get('/page39', 'ViewController@page39');
    Route::get('/page40', 'ViewController@page40');
    Route::get('/page42', 'ViewController@page42');
    Route::get('/page45', 'ViewController@page45');
    Route::get('/page46', 'ViewController@page46');
    Route::get('/page8', 'ViewController@page8');
    Route::get('/page38', 'ViewController@page38');
    Route::get('/page43', 'ViewController@page43');
    Route::get('/test', 'ViewController@test');

    // 시공 견적
    Route::get('/quote', 'ViewController@quote');
    Route::get('/quote/{idx}', 'ViewController@resp_quote');
    Route::get('/quote/update/{idx}', 'UpdateController@quote');