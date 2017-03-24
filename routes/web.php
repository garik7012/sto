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

Route::get('/', 'IndexController@index');
Route::get('/about', 'IndexController@about');
Route::get('/contacts', 'IndexController@contacts');
Route::get('/vacancies', 'IndexController@vacancies');

Route::get('/avto/o-kompanii', 'IndexController@rservice');

Route::get('/avto/{gotomain}', 'IndexController@rmain');

Route::get('/services', 'ServiceController@index');
Route::get('/service/search', 'ServiceController@search');
Route::get('/service/{link}', 'ServiceController@showPage');

Route::get('/online', 'IndexController@online');
Route::post('/online/add', 'OrderController@add');
Route::post('/online/callback', 'OrderController@callback');

Route::get('/test', 'IndexController@test');


Auth::routes();


/*
Actions Handled By Resource Controller
Verb    	URI         	Action	Route Name
GET	    /photos	            index	photos.index
GET	    /photos/create	    create	photos.create
POST	/photos	            store	photos.store
GET 	/photos/{photo}	    show	photos.show
GET	    /photos/{photo}/edit edit	photos.edit
PUT     /photos/{photo}	    update	photos.update
DELETE	/photos/{photo}	    destroy	photos.destroy
*/
Route::resource('news', 'NewsController');
Route::resource('offers', 'OfferController');