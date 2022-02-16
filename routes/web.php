<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

//Route::group(['prefix' => 'project1'] , function () {
Route::get ('/', function()
{
	echo 'loc: ' . LaravelLocalization::setLocale();
	return LaravelLocalization::setLocale();
});
Route::get('/posts' , [PostController::class , 'index']);
Route::get('/about', function() {
	return view('about');
});


Route::get('/contact', function() {
	$m = 'jappy';
 return View('contact',compact('m'));
});


//Route::get('/', function () {
  //  return response("Hello EVERY ONE", 200)->header('Content-Type', 'text/html')->withcookie('soso','Virat Gandhi');
//});

//Route::resource('my','MyController');

//Route::resource('photo', ['uses' => 'PhotoController'::class , 'as' => 'aamal']);


Route::get('/user/{id}', function ($id) {
    return 'UserController '.$id;
})->name('ll');

Route::match(['get','post'],'test/{id}',function($id){return $id;});

Route::get('/test', function() {
	echo Request::path();
})->name('fani');


Route::get('/test1', function(Request $req1) {
	echo $req1->path();
});


//Route::get('asm/',['uses' => 'tripController@getTt' , 'as' => 'aamal']);


Route::get('/nnn' , 'tripController@getXx');

Route::get('testRedirect' , function() {
	return redirect()->action('tripController@getXx');	
});

//});

/*Route::get('/usercontroller/path',[
   'middleware' => 'First',
   'uses' => 'UserController@showPath'
]);*/