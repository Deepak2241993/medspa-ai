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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth Related Route

Route::get('/','AuthController@index');
Route::get('/logout','AuthController@logout');
Route::post('/autlogin','AuthController@login');
Route::get('/register','AuthController@register');
Route::post('/register','AuthController@registersubmit');
Route::get('/forget','AuthController@forget');
Route::get('/resetpassword','AuthController@password_update');


Route::middleware(['login'])->group(function () {


Route::get('/dashboard','DashboardController@index');

// Modality Route 
Route::get('add_equipment','ModalityController@index');
Route::post('platforms','ModalityController@platforms');
Route::post('handpieces','ModalityController@handpieces');
Route::post('modality','ModalityController@modality');
Route::post('addmodality','ModalityController@submitmodality');
Route::get('modalitylist','ModalityController@modalitylist');
Route::get('equip_delete/{eqip_id}','ModalityController@equip_delete');

// Modality Added Route End

// Patient Module Route
Route::get('patient','PatientController@index');
Route::post('sendpatientinfo','PatientController@patientinfo');
Route::view('timeline','procedure_iq.timeline');



Route::view('provider','procedure_iq.provider_form');
Route::view('client_query','procedure_iq.client_query_list');
Route::view('recommondation','procedure_iq.recommondation');

});


