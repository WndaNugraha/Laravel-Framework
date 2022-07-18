<?php

use Illuminate\Support\Facades\Route;
use App\Http\ControllerS\pengenalancontroller;
use App\Http\ControllerS\latihancontroller;
use App\Http\ControllerS\staffbranchcontroller;
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

Route::get('/', function () {
    return view('welcome');
});

//route basic
Route::get('/walcome', function(){
    echo'<center><u>Hello Semuanya, Apa kabar?<br>';
    echo'Pada kali ini kita sedang belajar route basic</u></center>';
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/pages1', function () {
    return view('pages1/index');
});
Route::get('/pages2', function () {
    return view('pages2/index',[
        "nama" => "Wanda nugraha",
        "umur" => "17"
    ]);

});
Route::get('/pages3', function () {
    return view('pages3/index');
});

route::get('/biodata/{nama}/{umur}/{alamat}/{jk}/{hobby}',function ($nama,$umur,$alamat,$hobby,$jk){
    return view('pages1.biodata',compact('nama','umur','alamat','jk','hobby'));
});

route::get('/pesanan/{material1?}/{material2?}',function ($material1="Tidak ada",$material2="Tidak Ada"){
    return view('pages1/pesanan',compact('material1','material2'));

});

route::get('/pengenalan',[App\Http\ControllerS\pengenalancontroller::class,'pengenalan']);

route::get('/intro/{nama}/{alamat}/{umur}',[pengenalancontroller::class,'intro']);

route::get('/siswa',[pengenalancontroller::class,'siswa']);

route::get('/saya',[latihancontroller::class,'saya']);

route::get('/mahasiswa',[latihancontroller::class,'dosen']);

route::get('/tv',[latihancontroller::class,'tv']);

route::get('/belanja',[latihancontroller::class,'belanja']);

route::get('/tugas',[staffbranchcontroller::class,'branch']);