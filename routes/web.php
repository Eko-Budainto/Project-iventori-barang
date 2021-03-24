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

/* Route::get('/', function () {
    return view('welcome');
});
 */
route::get('/','PagesControl@home');
route::get('/me','PagesControl@me');

route::get('/databarang','DataBarang@index');

route::get('/detailbarang','DatabarangController@index');
route::post('/detailbarang/','DatabarangController@store');
route::get('/detailbarang/create','DatabarangController@create'); //*harus diatas route get detal barang {barangg}


route::get('/detailbarang/{baranng}','DatabarangController@show');





