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

Auth::routes();

Route::get('/home', 'HomeController@index');
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
