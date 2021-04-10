<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
// Route::get('/agent', 'HomeController@agent')->name('agent');
// Route::get('/services', 'HomeController@services')->name('services');
Route::get('/contact','HomeController@contact')->name('contact');
Route::post('/contact_add','HomeController@contact_add')->name('contact_add');
Route::get('/properties','HomeController@properties')->name('properties');
 Route::get('/login','HomeController@login')->name('login');

Route::get('/search_property', 'HomeController@searchpropertie')->name('searchpropertie');
Route::get('/searchforcityproperty/{key}', 'HomeController@searchforcityproperty')->name('searchforcityproperty');

//propertiedetail
Route::get('/propertiedetail/{key}','HomeController@propertiedetail')->name('propertiedetail');


//Route::get('/add_city', 'HomeController@add_city')->name('add_city');

//insert
Route::get('insert','Registration@insertform');
Route::get('create','Registration@insert');
Route::post('create1','Registration@create');


//login

Route::post('login1','UserLogin@login_v');

//

//panel for admin host and use
Route::get('/hostpanel', 'Dashboard@hostpanel')->middleware('property');
Route::get('/customerpanel', 'Dashboard@customerpanel')->middleware('user');
Route::get('/adminpanel', 'Dashboard@adminpanel')->middleware('admin');

Route::get('/logout', 'Dashboard@logout');

//addcountry
Route::post('/add_country', 'AddCountry@add_country')->middleware('admin');
Route::post('/deleteCountry', 'AddCountry@deleteCountry')->middleware('admin');
Route::post('/updatecountry', 'AddCountry@updatecountry')->middleware('admin');
Route::get('/country', 'AddCountry@index')->middleware('admin');

//addstate
Route::get('/state', 'AddState@index')->middleware('admin');
Route::post('/add_state', 'AddState@add_state')->middleware('admin');
Route::post('/deleteState', 'AddState@deleteState')->middleware('admin');
Route::post('/updatestate', 'AddState@updatestate')->middleware('admin');

//add_city
Route::get('/citya', 'AddCity@index')->middleware('admin');
Route::post('/add_city', 'AddCity@add_city')->middleware('admin');
Route::post('/get-states-by-country', 'AddCity@get_states_by_country')->middleware('admin');
Route::post('/updateimageform','AddCity@updateimageform')->middleware('admin');
Route::post('/updatecity','AddCity@updatecity')->middleware('admin');
Route::post('/deleteCityid', 'AddCity@deleteCityid')->middleware('admin');

//add_aminities
Route::get('/aminities', 'AddAminities@index')->middleware('admin');
Route::post('/add_aminities', 'AddAminities@add_aminities')->middleware('admin');
Route::post('/updateaminities', 'AddAminities@updateaminities')->middleware('admin');
Route::post('/deleteAminitiesid','AddAminities@deleteAminitiesid')->middleware('admin');

//propertie_type
Route::get('/propertie_type','AddPropertieTtype@index')->middleware('admin');
Route::post('/add_property_type','AddPropertieTtype@add_property_type')->middleware('admin');
Route::post('/updatepropertytype','AddPropertieTtype@updatepropertytype')->middleware('admin');
Route::post('/deletepropertytype','AddPropertieTtype@deletepropertytype')->middleware('admin');

//profile of admin
Route::get('/adminprofile','AdminPorfile@index')->middleware('admin');
Route::post('/update_profile','AdminPorfile@update_profile')->middleware('admin');
Route::post('/update_password','AdminPorfile@update_password')->middleware('admin');
Route::get('/allcustomer','AdminPorfile@allcustomer')->middleware('admin');
Route::get('/allhost','AdminPorfile@allhost')->middleware('admin');
//show_contactus us show
Route::get('/show_contactus', 'AdminPorfile@show_contactus')->middleware('admin');

//all property show in admin
Route::get('/allpropertie','AllPropertyShowAdmin@index')->middleware('admin');
Route::post('/quick_property_admin', 'AllPropertyShowAdmin@quick_property_admin')->middleware('admin');
Route::post('/quick_amenities_admin', 'AllPropertyShowAdmin@quick_amenities_admin')->middleware('admin');
Route::post('/quick_property_image_admin', 'AllPropertyShowAdmin@quick_property_image_admin')->middleware('admin');



//profile of Host
Route::get('/hostprofile','HostPorfile@index')->middleware('property');
Route::post('/update_host_profile','HostPorfile@update_host_profile')->middleware('property');
Route::post('/update_host_password','HostPorfile@update_host_password')->middleware('property');

//add propertty
Route::get('/propertyadd', 'AddProperty@index')->middleware('property');
Route::post('/add_property', 'AddProperty@add_property')->middleware('property');
Route::post('/quick_property', 'AddProperty@quick_property')->middleware('property');
Route::post('/quick_amenities', 'AddProperty@quick_amenities')->middleware('property');
Route::post('/quick_property_image', 'AddProperty@quick_property_image')->middleware('property');
Route::post('/updateproperty', 'AddProperty@updateproperty')->middleware('property');
Route::post('/image_delete', 'AddProperty@image_delete')->middleware('property');
Route::post('/deleteproperty', 'AddProperty@deleteproperty')->middleware('property');
Route::post('/add_property_image', 'AddProperty@add_property_image')->middleware('property');
Route::post('/update_delete_aminities', 'AddProperty@update_delete_aminities')->middleware('property');


//country_state_city_all user
Route::post('/country_all_user', 'HomeController@country_all_user');
Route::post('/state_all_user', 'HomeController@state_all_user');

//profile for customer
Route::get('/userprofile','UserProfile@index')->middleware('user');
Route::post('/update_user_profile','UserProfile@update_user_profile')->middleware('user');
Route::post('/update_user_password','UserProfile@update_user_password')->middleware('user');

//checkpropertybooking
Route::post('/checkpropertybooking','PropertyBooking@checkpropertybooking');
Route::post('/reservepropertie','PropertyBooking@reservepropertie');
Route::get('/customerbooking', 'PropertyBooking@customerbooking')->middleware('user');
Route::post('/canclebooking','PropertyBooking@canclebooking')->middleware('user');
Route::get('/customercanclebooking', 'PropertyBooking@customercanclebooking')->middleware('user');

//property delar show booking
Route::get('/bookingdisplay', 'HostPorfile@bookingdisplay')->middleware('property');
Route::get('/hostcanclebooking', 'HostPorfile@hostcanclebooking')->middleware('property');

//all booking and cancle booking in show admin
Route::get('/allbooking', 'AdminPorfile@allbooking')->name('allbooking')->middleware('admin');
Route::get('/allcanclebooking', 'AdminPorfile@allcanclebooking')->middleware('admin');


// forget_password
Route::get('/forget_password','ForgetPassword@forget_password');
Route::post('/forget_pass','ForgetPassword@forget_pass');