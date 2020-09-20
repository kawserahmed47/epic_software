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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/',[frontendController::class, 'index']);
//Route::get('photo',[frontendController::class,'photo'])->name('photo');


Route::get('/','FrontController@index')->name('index');
Route::get('/report/{company_id}','ReportController@report')->name('report');
Route::get('/createReport','ReportController@createReport')->name('createReport');
Route::post('/insertReport','ReportController@insertReport')->name('insertReport');


Route::get('/photo/{company_id}','PhotoController@index')->name('photo');
Route::post('/insertPhoto','PhotoController@insertPhoto')->name('insertPhoto');
Route::get('/deletePhoto/{id}','PhotoController@deletePhoto')->name('deletePhoto');
Route::get('/corrective','CorrectiveController@index')->name('corrective');
Route::get('/result/{company_id}','ResultController@index')->name('result');
Route::get('/secutity','SelectController@security')->name('secutity');

Route::get('/types/{slug}/{company_id}','TypeController@types')->name('types');
Route::post('/insertAssessment','AssessmentController@insertAssessment')->name('insertAssessment');

Route::get('dashboard', 'BackController@view')->name('dashboard');

