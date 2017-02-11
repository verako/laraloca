<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home/','HomeController@index')->middleware('locale');//явно указываем middleware
Route::post('language',array(
	'before'=>'csrf',//проверяем,чтобы небыло перекрестных ссылок
	'as'=>'language-chooser',
	'uses'=>'LanguageController@chooser'//контроллер,который обрабатывае

	))->middleware('locale');
Route::resource('picture','PictureController');
