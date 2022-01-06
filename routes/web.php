<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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

Route::post('/save-screenshot', function (Request $request) {
    // decode your image first.
    $imagedata = base64_decode($_REQUEST['base64data']);
    // make random name
    $filename = md5(uniqid(rand(), true));
    //path where you want to upload image
    $file = $_SERVER['DOCUMENT_ROOT'] . ''.$filename.'.png';
    file_put_contents($file,$imagedata);
});

Route::view('/edit', 'app');
Route::view('/edit{path}', 'app');
Route::view('/', 'index');