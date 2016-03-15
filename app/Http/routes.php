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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('start');
});

Route::get('/start', function () {
    return view('start');
});

Route::get('/index', 'IndexController@showWelcome');
Route::get('/about', 'AboutController@showWelcome');
Route::get('/about/{theSubject}', 'AboutController@showSubject');
Route::get('/project', 'ProjectController@showWelcome');
Route::get('/timeline', 'TimelineController@showWelcome');
Route::get('/profile_account', 'ProfileAccountController@showWelcome');
Route::get('/profile_help', 'ProfileHelpController@showWelcome');
Route::get('/profile', 'ProfileController@showWelcome');


/*
Route::get('about/directions', array('as' => 'directions', function()
{
    $theUrl = URL::route('directions');
    return "DIRECTIONS go on this URL: $theUrl";
}));
*/
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
