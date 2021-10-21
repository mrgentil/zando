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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/phone/{phone}/add-to-cart', 'CartController@add_to_cart')->name('phone.add-to.cart');
Route::delete('/phone/{category}/remove-to-cart', 'CartController@remove_to_cart')->name('phone.remove-to.cart');
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout/store', 'CheckoutController@store')->name('checkout.store');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/phone/category/{category}', 'PhoneController@index')->name('phone.index');
Route::get('/phone/{slug}', 'PhoneController@show')->name('phone.show');
Route::get('/my-account', 'AccountController@index')->name('account.index');
/*Route::get('/my-account/library', 'AccountController@library')->name('account.library');*/
Route::get('/my-account/show/{category}', 'AccountController@read')->name('account.phone.read');
Route::get('/my-account/my-phone', 'AccountController@my_phones')->name('account.my_phones');
/*Route::get('/my-account/favorites', 'AccountController@favorites')->name('account.favorites');*/
Route::get('/my-account/phone/create', 'AccountController@add_phone')->name('account.add_phone');
Route::get('/my-account/phone/{category}/edit', 'AccountController@edit')->name('account.phone.edit');
Route::post('/my-account/phone/store', 'AccountController@store')->name('account.phone.store');
Route::put('/my-account/phone/update/{category}', 'AccountController@update')->name('account.phone.update');
Route::put('/my-account/my-account/update', 'AccountController@update_profile')->name('account.update');

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', 'Dashboard\HomeController')->name('dashboard.home');

    Route::get('/phones', 'Dashboard\PhoneController@index')->name('dashboard.phone.index');
    Route::get('/phones/create', 'Dashboard\PhoneController@create')->name('dashboard.phone.create');
    Route::post('/phones/create', 'Dashboard\PhoneController@store');

    //Route::get('/phones/{id}/show', 'Dashboard\PhoneController@show')->name('dashboard.phone.show');
    Route::get('/phones/edit/{id}', 'Dashboard\PhoneController@edit')->name('dashboard.phone.edit');
    Route::put('/phones/{phone}/update', 'Dashboard\PhoneController@update')->name('dashboard.phone.update');
    Route::get('/phones/{phone}/destroy', 'Dashboard\PhoneController@destroy')->name('dashboard.phone.destroy');


    Route::get('/profile/edit/{id}', 'Dashboard\ProfileController@edit')->name('dashboard.profile.edit');
    Route::put('/profile/update', 'Dashboard\ProfileController@update')->name('dashboard.profile.update');
});

Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/blog/{id}/{slug}', 'BlogController@show')->name('blog.show');
Route::get('/buy-or-sell', 'BuyController')->name('buy');
Route::get('/faq', 'FaqController')->name('faq');
Route::get('/about-us', 'AboutController')->name('about');


Route::get('/buy-or-sell', 'BuyController')->name('buy');
Route::get('/search', 'SearchController')->name('search');

Route::get('/contact-us', 'ContactController')->name('contact');
Route::post('/contact-us', 'ContactController@store');

Route::get('/repair', 'RepairController@index')->name('repair.index');
Route::post('/repair', 'RepairController@store');

Route::get('/become-partner', 'PartnerController@index')->name('partner.index');
Route::post('/become-partner', 'PartnerController@store');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
