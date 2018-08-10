<?php
//abort(503);


Route::get('/ThisIsSecureForLoginToDashboard', function () {
    return view('auth.admin_login');
});

Route::get('/ThisIsSecureRegForLogin', 'LoginController@check' );

Route::post('/regForm', 'LoginController@regForm' );

Route::get('/regForm', 'LoginController@check' );

Route::get('/', 'PublicHomeController@index');

Route::get('/details/{id}/{mmenu}/{link}', 'DetailsController@show');
Route::get('/details/{id}/{mmenu}', 'DetailsController@errorDetail');
Route::get('/details/{id}', 'DetailsController@errorDetails');
Route::get('/details', 'DetailsController@errorDet');


Route::get('/MNews/{id}/{mmenu}', 'DetailsController@menuShow');
Route::get('/MNews/{id}', 'DetailsController@errorid');
Route::get('/MNews/', 'DetailsController@errormenu');



Route::get('/search', 'SearchController@Search');

Route::any('/Search', 'SearchController@Search');

Auth::routes();

Route::get('/admin/dashboard', 'DashboardController@getAdminPanel');

/*Users*/
Route::resource('Users', 'CreateUserController');


/*Main Menu*/
Route::post('/Time/{id}', 'TimeController@update');
Route::resource('Time', 'TimeController');


/*Main Menu*/
Route::post('/MainMenu/{id}', 'MainMenuController@update');
Route::resource('MainMenu', 'MainMenuController');


/*Sub Menu*/
Route::post('/SubMenu/{id}', 'SubMenuController@update');
Route::resource('SubMenu', 'SubMenuController');


/*Heading*/
Route::post('/Heading/{id}', 'HeadingController@update');
Route::resource('Heading', 'HeadingController');


/*Publish News*/
Route::any('/SearchNews', 'NewsController@SearchNews');


Route::post('/News/{id}', 'NewsController@update');
Route::get('/Next', 'NewsController@next');
Route::resource('News', 'NewsController');

Route::get('/DSlide/{id}', 'NewsController@DeleteSlide');
Route::get('/DHome/{id}', 'NewsController@DeleteHome');
Route::get('/DPopu/{id}', 'NewsController@DeletePopu');



Route::get('/showinmyloginform', 'HomeController@index')->name('home');
