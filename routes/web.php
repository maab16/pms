<?php

use App\Role;
use App\User;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/price', "PlanController@index")->name('price');
Route::get('/cart', "CartController@index")->name('cart');

/*
 * @dashboard
 */

Route::get('/users','UserController@index')->name('users');
Route::get('/profile','UserController@profile')->name('profile');
Route::get('/accountSettings','UserController@accountSettings')->name('accountSettings');
Route::post('/updateProfile',"UserController@updateProfile")->name('updateProfile');
Route::get('/profile/{id}','AdminController@viewProfile')->name('viewProfile');

/*
 * Ajax Request
 */
Route::post('/addCart',"CartController@setCartItem");
Route::post('/removeCart',"CartController@removeCartItem");
// User
Route::post('/createUser',"AdminController@createUser");
Route::post('/updateUser',"UserController@updateUser");
Route::post('/deleteUser',"AdminController@deleteUser");


/*
 * Authentication
 */

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','AdminController@index')->name('dashboard');

// User Verify Account
Route::get('verify/{email}/{verify_token}','Auth\RegisterController@verifyRegistrationEmail')->name('verifyEmail');

Route::get('/notifications/{user}',function(User $user){
	return  [
			'readNotifications' => $user->notifications,
			'unreadNotifications' => $user->unreadNotifications,
		];
});

Route::get('/mark_notification_as_read/{user}',function(User $user){
	$user->unreadNotifications->markAsRead();
	return  [
			'readNotifications' => $user->notifications,
			'unreadNotifications' => [],
		];
});