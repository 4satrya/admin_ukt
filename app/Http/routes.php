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

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});

//Route ajax tabel master
Route::get('datamaster/tbjalurmasuk', 'JalurMasukController@getJalurMasuk');
Route::get('datamaster/tbkelompokukt', 'KelompokUktController@getKelompokUkt');
Route::get('datamaster/tbfakultas', 'FakultasController@getFakultas');
Route::get('datamaster/tbjurusan', 'JurusanController@getJurusan');
Route::get('datamaster/tbkonsentrasi', 'KonsentrasiController@getKonsentrasi');
Route::get('datamaster/tbprofileukt', 'ProfileUktController@getProfileUkt');
Route::get('datamaster/tbgrouppertanyaan', 'GroupPertanyaanController@getGroupPertanyaan');
Route::get('datamaster/tbpertanyaan', 'PertanyaanController@getPertanyaan');
Route::get('datamaster/tbbobot', 'BobotController@getBobot');

//Route ajax tabel setting
Route::get('setting/tbperiode', 'PeriodeController@getPeriode');
Route::get('setting/tbprofilegroup/{id_profile}', 'ProfileGroupController@getProfileGroup');
Route::get('setting/tbproditawar', 'ProdiTawarController@getProdiTawar');
Route::get('setting/tbnominal', 'PersentaseUktController@getPersentaseUkt');
Route::get('setting/tbisigroup', 'IsiGroupPertanyaanController@getIsiGroup');
Route::get('setting/tbisigroup/{id_profile}/{id_group}', 'IsiGroupPertanyaanController@getIsiGroupDet');
Route::get('setting/tbbobotpertanyaan/{id_jurusan}/', 'BobotPertanyaanController@getBobotPertanyaan');

//Route ajax tabel
Route::get('tblihatukt', 'LihatUktController@getDataUkt');
Route::get('tblihatukt/{id_periode}/{id_fakultas}/{id_jurusan}', 'LihatUktController@getDataUktDetail');
Route::get('tblihatisiukt', 'LihatIsiUktController@getDataIsiUkt');

//Route datamaster
Route::resource('datamaster/jalurmasuk', 'JalurMasukController');
Route::resource('datamaster/kelompokukt', 'KelompokUktController');
Route::get('datamaster/fakultas', 'FakultasController@index');
Route::get('datamaster/jurusan', 'JurusanController@index');
Route::get('datamaster/konsentrasi', 'KonsentrasiController@index');
Route::resource('datamaster/profileukt', 'ProfileUktController');
Route::resource('datamaster/grouppertanyaan', 'GroupPertanyaanController');
Route::resource('datamaster/pertanyaan', 'PertanyaanController');
Route::resource('datamaster/bobot', 'BobotController');

//Route setting
Route::resource('setting/periode', 'PeriodeController');
Route::resource('setting/profilegroup', 'ProfileGroupController');
Route::resource('setting/proditawar', 'ProdiTawarController');
Route::resource('setting/persentaseukt', 'PersentaseUktController');
Route::resource('setting/isigrouppertanyaan', 'IsiGroupPertanyaanController');
Route::resource('setting/bobotpertanyaan', 'BobotPertanyaanController');

//Route Lihat UKT
Route::resource('lihatukt','LihatUktController');
Route::resource('lihatisiukt','LihatIsiUktController');

//
Route::get('proses','ProsesHitungController@ambilDataAwal');
Route::get('proseselectre','ProsesHitungElectreController@proses');

//Proses
Route::get('proses/fcm','ProsesHitungController@viewfcm');

//Route Dropdown
Route::get('setting/selectprofile/{id_profile}','IsiGroupPertanyaanController@getGroupPertanyaanList');
Route::get('selectjurusan/{id_fakultas}/{id_periode}','LihatUktController@getJurusanList');



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
});
