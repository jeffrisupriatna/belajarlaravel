<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function(){
    return view('contact',['name' => 'belajar laravel', 'sesi' => 'satu']);
});

//Route::view('/contact', 'contact', ['name' => 'belajar laravel', 'sesi' => 'satu']);

Route::view('/template', 'template');

Route::get('tabeldata', function(){
    $data = ['meja', 'kursi', 'pensil', 'buku', 'pintu'];
    return view('table',compact('data'));
});


Route::get('/product/{id}', function($id){
    return 'ini adalah product dengan id '.$id;
});

Route::get('/newproduct/{id}', function($id){
    return view('product.productdetail', ['id' => $id]);
});

Route::prefix('admin')->group(function(){
    Route::get('/profil-admin', function(){
        return 'profil admin';
    });
    
    Route::get('/user-admin', function(){
        return 'user admin';
    });
});
