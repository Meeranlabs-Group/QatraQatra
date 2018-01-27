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

Route::get('/','PropertyController@mainPage');


//Route::get('/','BlogController@check');





/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/adminpage',function(){
    return view('Admin.adminpage');
});


Route::get('/adminpage','AdminController@mainpage');


Route::get('/pendingRent','AdminController@pendingRent');
Route::get('/pendingSale','AdminController@pendingSale');


Route::get('/oldRent','AdminController@oldRent');
Route::get('/oldSale','AdminController@oldSale');




/*
|--------------------------------------------------------------------------
| User Blog Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/myarticles','BlogController@showAll');
Route::get('/approved','BlogController@approvedArticles');
Route::get('/disapproved','BlogController@disapprovedArticles');

Route::get('/addarticle', function () {
    return view('user.blog.addarticle');
});

Route::get('/editarticle/{id}','BlogController@editArticle');

Route::post('/updatearticle','BlogController@updateArticle');

Route::post('/savearticle','BlogController@saveArticle');




/*
|--------------------------------------------------------------------------
| User Profile Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/profile','ProfileController@profile');
Route::post('/profile','ProfileController@updateprofile');  //profile update

Route::post('/updatepassword','ProfileController@updatepassword');  //profile update


Route::get('/userrent','ProfileController@RentProperties');  //profile update
Route::get('/usersale','ProfileController@SaleProperties');
Route::get('/deleted','ProfileController@deletedData');//profile update
Route::get('/updatePropertyStatus/{id}','ProfileController@updatePropertyStatus');//profile update


/*
|--------------------------------------------------------------------------
| Property Routes
|--------------------------------------------------------------------------
|
|
*/
//
Route::post('/updateproperty','PropertyController@updateproperty');  //profile update

Route::get('/propertydetail/{slug}','PropertyController@propertydetail');
Route::get('/addproperty', 'PropertyController@addproperty');
Route::get('/getsocieties/{id}', 'PropertyController@getsocieties');
Route::get('/getphases/{id}', 'PropertyController@getphases');
Route::get('/getblocks/{id}', 'PropertyController@getblocks');
Route::get('/get_blocks/{id}/{x}', 'PropertyController@get_blocks');

Route::post('/submit', 'PropertyController@store');

Route::get('/myproperties','PropertyController@myproperties');

Route::get('/editproperty/{id}','PropertyController@editproperty');

Route::get('/deleteproperty/{id}','PropertyController@deleteproperty');

Route::post('/search', 'PropertyController@search');
Route::post('/search1', 'PropertyController@search1');


Route::get('/Housesview', function (){return View::make('features.house_feature');});
Route::get('/Flatesview', function () {return View::make('features.flat_feature');});
Route::get('/Upper-Portionsview', function () {return View::make('features.portion&farm_feature');});
Route::get('/Lower-Portionsview', function () {return View::make('features.portion&farm_feature');});
Route::get('/Farms-Houseview', function () {return View::make('features.portion&farm_feature');});
Route::get('/Residential-Plotsview', function () {return View::make('features.plot_feature');});
Route::get('/Commercial-Plotsview', function () {return View::make('features.plot_feature');});
Route::get('/Agricultural-Landview', function () {return View::make('features.land_feature');});
Route::get('/Industrial-Landview', function () {return View::make('features.land_feature');});
Route::get('/Officesview', function () {return View::make('features.office_feature');});
Route::get('/Shopsview', function () {return View::make('features.shop_feature');});
Route::get('/Warehousesview', function () {return View::make('features.warehouse_feature');});
Route::get('/Factoriesview', function () {return View::make('features.factory_feature');});
Route::get('/Buildingsview', function () {return View::make('features.building_feature');});
Route::get('/Otherview', function () {return View::make('features.other_feature');});

/*
|--------------------------------------------------------------------------
| Mian Pages Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/contact-us', function () {
    return view('contact-us');
});


Route::get('/about-us','AdminController@aboutus');


Route::get('/dha-file-rates', function () {
    return view('dhafile');
});

Route::get('/plot-for-sale-in-dha-lahore','PropertyController@show_all_plots');

Route::get('/properties','PropertyController@show_all');


//Route::get('/properties/{city}','PropertyController@show_all');


Route::get('/maps', function () {

    return view('map');

});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/MarketAnalysis', 'BlogController@allBlogs');
Route::get('/MarketDetail/{id}', 'BlogController@blogDetail');





/*
|--------------------------------------------------------------------------
| Listing Index Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/houses/{cityname}/{cityid}', 'ListingController@Show_Societies');
Route::get('/houses/{cityname}/{societyname}/{cityid}/{societyid}', 'ListingController@Show_Phases');
Route::get('/houses/{cityname}/{societyname}/{phasename}/{cityid}/{societyid}/{phaseid}', 'ListingController@Show_Block');
Route::get('/houses/{cityname}/{societyname}/{phasename}/{blockname}/{cityid}/{societyid}/{phaseid}/{blockid}', 'ListingController@Show_Properties');




?>