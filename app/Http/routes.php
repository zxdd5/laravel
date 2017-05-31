<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'StaticPagesController@home');
Route::get('/tt', function () {
    return 'Hello World';
});

Route::get('/test', array('as' => 'welcome', function() 
	{      
		return "Hello World"; 
	}));
Route::get('user/{id}',array('as' => 'welcomee', function ($id) {
    return 'User '.$id;
}));
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'posts '.$postId.'comments '.$commentId;
});
Route::get('user1/profile', ['as' => 'profile', function () {
    //return 'User1 ';
    return $url = route('welcomee',12);

}]);

Route::auth();

Route::get('/home', 'HomeController@index');



Route::get('/help', 'StaticPagesController@help');
Route::get('/about', 'StaticPagesController@about');