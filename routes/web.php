<?php
use App\Wali;
use App\Mahasiswa;
use App\Dosen;
use App\Jurusan;
use App\Mata_Kuliah;
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

Route::get('/soal1', function() {
	$dosen =Dosen::where('nama', '=', 'Iik Hikmat')->get(); 
		return view('soal',compact('dosen'));

	});

Route::get('/soal2', function() {
	$wali =Wali::with('mahasiswa')->get(); 
		return view('soal2',compact('wali'));
	});

Route::get('/soal3', function() {
	$mahasiswa =Mahasiswa::with('jurusan')->get(); 
		return view('soal3',compact('mahasiswa'));
	});

Route::get('bonus', function() {
	$mahasiswa =Mahasiswa::with('dosen','jurusan','wali','mata_kuliah')->get(); 
		return view('bonus',compact('mahasiswa'));
	});