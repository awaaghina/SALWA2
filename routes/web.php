<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {

    $nama = "salwa";
    $jenis_kelamin = "perempuan";
    $pendidikan_terakhir = "SMK";
    $pekerjaan = "belum bekerja";

    return view('data_diri', compact('nama','jenis_kelamin','pendidikan_terakhir','pekerjaan'));
});

Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('/biodata1/{nama}/{jenis_kelamin}/{tanggal_lahir}/{asal_sekolah}/{hobi}/{cita_cita}/{alamat}', function (Request $request,$nama,$jenis_kelamin,$tanggal_lahir,$asal_sekolah,$hobi,$cita_cita,$alamat) {

    $nama2 = $nama ;
    $jenis_kelamin2 = $jenis_kelamin;
    $tanggal_lahir2 = $tanggal_lahir;
    $asal_sekolah2 = $asal_sekolah;
    $hobi2 = $hobi;
    $cita_cita2 = $cita_cita;
    $alamat2 = $alamat;

    return view('biodata1', compact('nama2','jenis_kelamin2','tanggal_lahir2','asal_sekolah2','hobi2','cita_cita2','alamat2'));
});

