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
/*....frontEnd....*/

Route::get('/','NewsportalController@index')->name('/');
Route::get('/technology','NewsportalController@technology')->name('technology');
Route::get('/menu/{id}/{name}','NewsportalController@menucat')->name('category_');
Route::get('/details/{slug}','NewsportalController@details')->name('details');
Route::get('/Bangladesh/{id}','NewsportalController@bangladesh')->name('bangladesh');
Route::get('/travel','NewsportalController@travel')->name('travel');
Route::get('/food','NewsportalController@food')->name('food');
Route::get('/architecture','NewsportalController@architecture')->name('architecture');
Route::get('/contact','NewsportalController@contact')->name('contact');
Route::get('/search','NewsportalController@search')->name('search');
//Route::get('/Search','NewsportalController@searchdata')->name('Search');
Route::get('/404','NewsportalController@error')->name('404');
Route::post('/Subscribe','NewsportalController@subscribe')->name('subscribe');

Auth::routes();
// Login Routes
Route::get('/login', 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('/login/submit', 'Backend\Auth\LoginController@login')->name('admin.login.submit');

// Logout Routes
Route::post('/logout/submit', 'Backend\Auth\LoginController@logout')->name('admin.logout.submit');

// Forget Password Routes
Route::get('/password/reset', 'Backend\Auth\ForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/password/reset/submit', 'Backend\Auth\ForgetPasswordController@reset')->name('admin.password.update');

//....facebook_login

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Backend\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Backend\Auth\LoginController::class, 'handleFacebookCallback']);

Route::get('login/google', [App\Http\Controllers\Backend\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Backend\Auth\LoginController::class, 'handleGoogleCallback']);


Route::get('/home', 'HomeController@index')->name('home');

//....Users....
Route::get('/users','UsersController@users')->name('users');
Route::post('/add-users','UsersController@addusers')->name('add-users');
Route::get('/manage-users','UsersController@manageusers')->name('manage-users');
Route::get('/edit-users/{id}','UsersController@editusers')->name('edit-users');
Route::post('/update-users','UsersController@updateusers')->name('update-users');
Route::get('/delete-users/{id}','UsersController@deleteusers')->name('delete-users');

//end Users....

//admins.....

Route::get('/admins','AdminController@admins')->name('admins');
Route::post('/add-admins','AdminController@addadmins')->name('add-admins');
Route::get('/manage-admins','AdminController@manageadmins')->name('manage-admins');
Route::get('/edit-admins/{id}','AdminController@editadmins')->name('edit-admins');
Route::post('/update-admins','AdminController@updateadmins')->name('update-admins');
Route::get('/delete-admins/{id}','AdminController@deleteadmins')->name('delete-admins');

//end admins....

//.....role and permission

Route::get('/roles','RolesController@roles')->name('roles');
Route::get('/manage-roles','RolesController@manageroles')->name('manage-roles');
Route::post('/add-roles','RolesController@addroles')->name('add-roles');
Route::get('/edit-roles/{id}','RolesController@editroles');
Route::post('/update-roles','RolesController@updateroles')->name('update-roles');
Route::get('/delete-roles/{id}','RolesController@deleteroles')->name('delete-roles');

//.....end role and permission...

//....categoryyy....

Route::get('/category', 'CategoryController@category')->name('category');
Route::get('/publication-category/{id}', 'CategoryController@publicationcategory')->name('publication-category');
Route::get('/unpublication-category/{id}', 'CategoryController@unpublicationcategory')->name('unpublication-category');
Route::get('/edit-category/{id}', 'CategoryController@editcategory')->name('edit-category');
Route::get('/delete-category/{id}', 'CategoryController@deletecategory')->name('delete-category');
Route::post('/add-category', 'CategoryController@addcategory')->name('add-category');
Route::post('/update-category', 'CategoryController@updatecategory')->name('update-category');

//...end category....
//....subcat....
Route::get('/subcategory', 'SubcategoryController@subcategory')->name('subcategory');
Route::get('/publication-subcategory/{id}', 'SubcategoryController@publicationsubcategory')->name('publication-subcategory');
Route::get('/unpublication-subcategory/{id}', 'SubcategoryController@unpublicationsubcategory')->name('unpublication-subcategory');
Route::get('/edit-subcategory/{id}', 'SubcategoryController@editsubcategory')->name('edit-subcategory');
Route::get('/delete-subcategory/{id}', 'SubcategoryController@deletesubcategory')->name('delete-subcategory');
Route::post('/add-subcat', 'SubcategoryController@addsubcat')->name('add-subcat');
Route::post('/update-subcat', 'SubcategoryController@updatesubcat')->name('update-subcat');

//....endsubcat...

//....post...
Route::get('/post', 'PostController@post')->name('post');
Route::post('/add-post', 'PostController@addpost')->name('add-post');
Route::get('/manage-post', 'PostController@managepost')->name('manage-post');
Route::get('/view-post/{id}', 'postController@viewpost')->name('view-post');
Route::get('/publication-post/{id}', 'postController@publicationpost')->name('publication-post');
Route::get('/unpublication-post/{id}', 'postController@unpublicationpost')->name('unpublication-post');
Route::get('/edit-post/{id}', 'postController@editpost')->name('edit-post');
Route::post('/update-post', 'postController@updatepost')->name('update.post');
Route::get('/delete-post/{id}', 'postController@deletepost')->name('delete-post');

Route::get('/select-sub-category/{id}', 'PostController@selectsubcategory')->name('select-sub-category');

//.....end post...

//...post notification...
Route::get('/post-notification', 'PostNotifyController@postnotification')->name('post-notification');
Route::post('/add-post-notificaiton', 'PostNotifyController@addpostnotificaiton')->name('add-post-notificaiton');
//...approve...

Route::get('approve','postController@approve')->name('approve');
Route::get('approve-post/{id}','postController@approvepost')->name('approve-post');

Route::get('/logo', 'LogoController@logo')->name('logo');
Route::post('/add-logo', 'LogoController@addlogo')->name('add-logo');
Route::get('/manage-logo', 'LogoController@managelogo')->name('manage-logo');
Route::get('/publication-logo/{id}', 'LogoController@publicationlogo')->name('publication-logo');
Route::get('/unpublication-logo/{id}', 'LogoController@unpublicationlogo')->name('unpublication-logo');
Route::get('/edit-logo/{id}', 'LogoController@editlogo')->name('edit-logo');
Route::post('/update-logo', 'LogoController@updatelogo')->name('update.logo');
Route::get('/delete-logo/{id}', 'LogoController@deletelogo')->name('delete-logo');

//....ads..
Route::get('/ads', 'AdsController@ads')->name('ads');
Route::post('/add-ads', 'AdsController@addads')->name('add-ads');
Route::get('/manage-ads', 'AdsController@manageads')->name('manage-ads');
Route::get('/edit-ads/{id}', 'AdsController@editads')->name('edit-ads');
Route::get('/publication-ads/{id}', 'AdsController@publicationads')->name('publication-ads');
Route::get('/unpublication-ads/{id}', 'AdsController@unpublicationads')->name('unpublication-ads');
Route::post('/update-ads', 'AdsController@updateads')->name('update-ads');
Route::get('/delete-ads/{id}', 'AdsController@deleteads')->name('delete-ads');
Route::get('/select-ads/{id}', 'AdsController@selectads')->name('select-ads');
Route::get('/select-ads2/{id}', 'AdsController@selectads2')->name('select-ads2');
Route::get('/select-ads3/{id}', 'AdsController@selectads3')->name('select-ads3');
Route::get('/select-ads4/{id}', 'AdsController@selectads4')->name('select-ads4');
//...end abs...

Route::get('/trending-news', 'trendingnewsController@trendingnews')->name('trending-news');
Route::get('/publication-trending-news/{id}', 'trendingnewsController@publicationtrendingnews')->name('publication-trending-news');
Route::get('/unpublication-trending-news/{id}', 'trendingnewsController@unpublicationtrendingnews')->name('unpublication-trending-news');
Route::get('/edit-trending-news/{id}', 'trendingnewsController@edittrendingnews')->name('edit-trending-news');
Route::get('/delete-trending-news/{id}', 'trendingnewsController@deletetrendingnews')->name('delete-trending-news');
Route::post('/add-trending-news', 'trendingnewsController@addtrendingnews')->name('add-trending-news');
Route::post('/update-trending-news', 'trendingnewsController@updatetrendingnews')->name('update-trending-news');


