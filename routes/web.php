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

Route::get('/', 'PagesController@welcome');

Route::get('home', function(){
    return view('home');
});

Route::get('lihat_data_mahasiswa2', 'MahasiswaController@lihat_data_mahasiswa2');

Route::get('data_mahasiswa', 'MahasiswaController@data_mahasiswa');

Route::get('lihat_data_mahasiswa', 'MahasiswaController@lihat_data_mahasiswa');

Route::get('input_mahasiswa', 'MahasiswaController@input_mahasiswa');

// Route::post('mahasiswa', 'MahasiswaController@store');

Route::get('login', 'MahasiswaController@login');

Route::get('berhasil', 'MahasiswaController@berhasil');

Route::get('simpan_data', function(){
    DB::table('mahasiswa')->insert([
        [
            'nim' => '1001',
            'nama' => 'Agus Yulianto',
            'tanggal_lahir' => '2000-09-07',
            'jenis_kelamin' => 'L'
        ],
        [
            'nim' => '1002',
            'nama' => 'Citra Kusumawati',
            'tanggal_lahir' => '2000-01-07',
            'jenis_kelamin' => 'P'
        ],
        [
            'nim' => '1003',
            'nama' => 'Firda Ajeng',
            'tanggal_lahir' => '2000-11-09',
            'jenis_kelamin' => 'P'
        ],
    ]);
});

Route::get('mahasiswa/cari', 'MahasiswaController@cari');

Route::resource('mahasiswa', 'MahasiswaController');

Route::get('coba_collection', 'MahasiswaController@cobaCollection');

Route::get('collection_first', 'MahasiswaController@collection_first');

Route::get('collection_last', 'MahasiswaController@collection_last');

Route::get('collection_count', 'MahasiswaController@collection_count');

Route::get('collection_take', 'MahasiswaController@collection_take');

Route::get('collection_pluck', 'MahasiswaController@collection_pluck');

Route::get('collection_where', 'MahasiswaController@collection_where');

Route::get('collection_wherein', 'MahasiswaController@collection_wherein');

Route::get('collection_toarray', 'MahasiswaController@collection_toarray');

Route::get('collection_tojson', 'MahasiswaController@collection_tojson');

Route::get('date_mutator', 'MahasiswaController@date_mutator');