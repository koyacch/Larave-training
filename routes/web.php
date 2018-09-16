<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Hello World ルーティング
// ルーティングパラメーター追加
// 必須パラメーター追加

Route::get('/helloworld/{msg?}', function($msg = 'no sub directory.'){
    $html = '<html><head><title>Laravel</title><body><h1>Hello World!</h1><p>'.$msg.'</p></body></html>';
    return $html;
});

Route::get('/', 'HelloController@index');