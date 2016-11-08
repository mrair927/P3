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
## Generates routes for lipsum controller
Route::get('/lipsums', 'LipsumController@index')->name('lipsums.index');

# Show a form to create a new book
Route::get('/lipsums/create', 'LipsumController@create')->name('lipsums.create');
Route::post('/lipsums', 'LipsumController@show')->name('lipsums.show');



## Generates routes for users controller
Route::get('/users', 'UsersController@index')->name('users.index');
Route::post('/users', 'UsersController@show')->name('users.show');
