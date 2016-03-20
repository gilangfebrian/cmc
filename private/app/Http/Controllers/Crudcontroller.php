<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\controller;
use Input;
use DB;
use Redirect;
use View;
use Auth;
use App\Http\Requests\validasilogin;
use App\Http\Requests\validasiregister;
use App\Http\Requests\validasitambah;
use App\Http\Requests\validasiregis;

class Crudcontroller extends Controller
{

public function tambahdata(validasitambah $data){
$nama=$data->nama;
$alamat=$data->alamat;
$kelas=$data->kelas;
    
    $data = array(
        'nama' => Input::get('nama'),
        'alamat' => Input::get('alamat'),
        'kelas' => Input::get('kelas'),
    );
    
    DB::table('trainee') ->insert($data);
    
    return Redirect::to('/read')->with('message','berhasil menambah data');
    
}
    
    public function lihatdata(){
        
        $data = DB::table('trainee')->get();
        
        return View::make('read')->with('trainee',$data);
    }
    
    public function hapusdata($id){
        
        DB::table('trainee')->where('id','=',$id)->delete();
        
        return Redirect::to('/read')->with('message','Berhasil menghapus data');
    }
    
    public function editdata($id){
        
        $data = DB::table('trainee')->where('id','=',$id)->first();
        
        return View::make('form_edit')->with('trainee',$data);
    }
    
    public function proseseditdata(){
        
        $data = array (
        
        'nama' => Input::get('nama'),
        'nip' => Input::get('nip'),
        'unit' => Input::get('unit')
        
        );
        
        DB::table('trainee')->where('id','=',Input::get('id'))->update($data);
        
        return Redirect::to('read')->with('message','Berhasil mengedit data');
    }
    
    public function tambahlogin(validasiregister $data){
    $username = $data->username;
    $password = bcrypt($data->password);
        
        $data = array(
        'username' => $username,
        'password' => $password,
        'hak_akses' => 'user'
        );
        
        DB::table('login')->insert($data);
        return Redirect::to('/login')->with('message','Berhasil Mendaftar');
    }
    
    public function login(validasilogin $validasi){
        
        if (Auth::attempt(['username' => Input::get('username'), 'password' => Input::get('password')]))
        {
            if(Auth::user()->hak_akses=="admin"){
                return Redirect::to('admin');
            }
            if(Auth::user()->hak_akses=="user"){
                return Redirect::to('user');
            }
            else{
                return Redirect::to('index');
            }
        }
        else{
            echo "gagal login";
        }
    }
    
    public function logout(){
        
        Auth::logout();
        return Redirect::to('login')->with('message', 'Berhasil logout !');
        
    }
    
    
    public function registrasi(validasiregis $data){
    $nama=$data->nama;
    $nip=$data->nip;
    $kel=$data->kel;
    $unit=$data->unit;
    $email=$data->email;
    $telp=$data->telp;
    $aplikasi=$data->aplikasi;
    $npwp=$data->npwp;
    $rek=$data->rek;
    $user=$data->nip;
    $pass=bcrypt($data->nip);
    
    $data = array(
        'nama' => Input::get('nama'),
        'nip' => Input::get('nip'),
        'kel' => Input::get('kel'),
        'unit' => Input::get('unit'),
        'email' => Input::get('email'),
        'telp' => Input::get('telp'),
        'aplikasi' => Input::get('aplikasi'),
        'npwp' => Input::get('npwp'),
        'rek' => Input::get('rek'),
    );
    
    DB::table('trainee') ->insert($data);
    
    $login = array(
        'username' => $user,
        'password' => $pass,
        'hak_akses' => 'user',
    );
    
    DB::table('login') ->insert($login);
        
    return Redirect::to('/registrasi')->with('message','Registrasi Berhasil');
    
}
    
    
    
    
    
    
    
    public function posttestlap(){
        
        $data = DB::table('questions')->orderByRaw('RAND()')->get();
        
        return View::make('user.posttest')->with('questions',$data);
    }
    
    
    
    
    
    
    
    
    
    public function updatepeserta(){
        
        $data = array (
        
        'nip' => Input::get('nip'),
        
        );
        
        DB::table('trainee')->where('nip','=',Input::get('nip'))->first();
        
        return View::make('login.update')->with('trainee',$data);
          
    }
    
    
    
        
    
}