<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* File default moved into middleware bracket

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    
Route::get('/', function () {
    if(Auth::user()){
        if(Auth::user()->hak_akses=="admin"){
            return view('home');
        }if(Auth::user()->hak_akses=="user"){
            return view('user');
        }
        else{
            return view('index');
        }
    }
    else{
    return view('login');}
});
    
Route::get('/halo', function()
{
    return "Halo, bro";
});

Route::get('/halo-juga', 'SiteController@haloJuga');

Route::post('prosestambah','Crudcontroller@tambahdata');

Route::get('read', function() {
    return view('read');
});

Route::get('read', 'Crudcontroller@lihatdata');

Route::get('hapus/{id}','Crudcontroller@hapusdata');

Route::get('formedit/{id}','Crudcontroller@editdata');

Route::post('prosesedit', 'Crudcontroller@proseseditdata');

Route::get('login', function(){
    if(Auth::user()){
        if(Auth::user()->hak_akses=="admin"){
            return view('home');
        }if(Auth::user()->hak_akses=="user"){
            return view('user');
        }
        else{
            return view('index');
        }
    }
    else{
    return view('login');}
});

Route::get('register', function(){
    if(Auth::user()){
        if(Auth::user()->hak_akses=="admin"){
            return view('home');
        }else{
            return view('user');
        }
    }
    else{
    return view('register');}
});

Route::post('tambahlogin','Crudcontroller@tambahlogin');
        
Route::post('login','Crudcontroller@login');

Route::get('user', function(){
    if(Auth::user()){
        if(Auth::user()->hak_akses=="admin"){
            return view('home');
        }else{
            return view('user');
        }
    }
    else{
    return view('login');}
});
    
Route::get('admin', function(){
    if(Auth::user()){
        if(Auth::user()->hak_akses=="admin"){
            return view('admin');
        }else{
            return view('user');
        }
    }
    else{
    return view('login');}
});
    
Route::get('logout','Crudcontroller@logout');


Route::post('prosesregis','Crudcontroller@registrasi');
    
    
Route::get('index', function() {
    return view('index');
});
    

Route::get('registrasi', function() {
    return view('login.registrasi');
});
    

Route::get('posttest', 'Crudcontroller@posttestlap');

    

    
    
    
    
    
Route::get('updateinfo', function() {
    return view('login.updateinfo');
});

Route::get('updatepeserta','Crudcontroller@updatepeserta');





});