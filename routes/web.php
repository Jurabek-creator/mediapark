<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blade\UserController;
use App\Http\Controllers\Blade\RoleController;
use App\Http\Controllers\Blade\PermissionController;
use App\Http\Controllers\Blade\HomeController;
use App\Http\Controllers\Blade\ApiUserController;

/*
|--------------------------------------------------------------------------
| Blade (front-end) Routes
|--------------------------------------------------------------------------
|
| Here is we write all routes which are related to web pages
| like UserManagement interfaces, Diagrams and others
|
*/

// Default laravel auth routes
Auth::routes();


// Welcome page
Route::get('/', function (){
    return redirect()->route('home');
})->name('welcome');

// Web pages
Route::group(['middleware' => 'auth'],function (){

    // there should be graphics, diagrams about total conditions
    Route::get('/home', [HomeController::class,'index'])->name('home');

    //accounts
    Route::group(['prefix'=>'account', 'namespace'=>'\App\Http\Controllers\Pages'], function(){
        Route::get('/index', 'AccountController@index')->name('accountIndex');
        Route::get('/account/add', 'AccountController@add')->name('accountAdd');
        Route::post('/account/store', 'AccountController@store')->name('accountStore');
        Route::get('/show/{id}', 'AccountController@show')->name('accountShow');
        Route::get('/edit/{id}', 'AccountController@edit')->name('accountEdit');
        Route::post('/update/{id}', 'AccountController@update')->name('accountUpdate');
        Route::delete('/delete/{id}', 'AccountController@destroy')->name('accountDestroy');
    });

    //merchants
    Route::group(['prefix'=>'merchant', 'namespace'=>'\App\Http\Controllers\Pages'], function(){
        Route::get('/index', 'MerchantController@index')->name('merchantIndex');
        Route::get('/add', 'MerchantController@add')->name('merchantAdd');
        Route::post('/merchant/store', 'MerchantController@store')->name('merchantStore');
        Route::get('/show/{id}', 'AccountController@show')->name('accountShow');
        Route::get('/edit/{id}', 'AccountController@edit')->name('accountEdit');
        Route::post('/update/{id}', 'AccountController@update')->name('accountUpdate');
        Route::delete('/delete/{id}', 'AccountController@destroy')->name('accountDestroy');
    });

    // Users
    Route::get('/users',[UserController::class,'index'])->name('userIndex');
    Route::get('/user/add',[UserController::class,'add'])->name('userAdd');
    Route::post('/user/create',[UserController::class,'create'])->name('userCreate');
    Route::get('/user/{id}/edit',[UserController::class,'edit'])->name('userEdit');
    Route::post('/user/update/{id}',[UserController::class,'update'])->name('userUpdate');
    Route::delete('/user/delete/{id}',[UserController::class,'destroy'])->name('userDestroy');
    Route::get('/user/theme-set/{id}',[UserController::class,'setTheme'])->name('userSetTheme');

    // Permissions
    Route::get('/permissions',[PermissionController::class,'index'])->name('permissionIndex');
    Route::get('/permission/add',[PermissionController::class,'add'])->name('permissionAdd');
    Route::post('/permission/create',[PermissionController::class,'create'])->name('permissionCreate');
    Route::get('/permission/{id}/edit',[PermissionController::class,'edit'])->name('permissionEdit');
    Route::post('/permission/update/{id}',[PermissionController::class,'update'])->name('permissionUpdate');
    Route::delete('/permission/delete/{id}',[PermissionController::class,'destroy'])->name('permissionDestroy');

    // Roles
    Route::get('/roles',[RoleController::class,'index'])->name('roleIndex');
    Route::get('/role/add',[RoleController::class,'add'])->name('roleAdd');
    Route::post('/role/create',[RoleController::class,'create'])->name('roleCreate');
    Route::get('/role/{role_id}/edit',[RoleController::class,'edit'])->name('roleEdit');
    Route::post('/role/update/{role_id}',[RoleController::class,'update'])->name('roleUpdate');
    Route::delete('/role/delete/{id}',[RoleController::class,'destroy'])->name('roleDestroy');

    // ApiUsers
    Route::get('/api-users',[ApiUserController::class,'index'])->name('api-userIndex');
    Route::get('/api-user/add',[ApiUserController::class,'add'])->name('api-userAdd');
    Route::post('/api-user/create',[ApiUserController::class,'create'])->name('api-userCreate');
    Route::get('/api-user/show/{id}',[ApiUserController::class,'show'])->name('api-userShow');
    Route::get('/api-user/{id}/edit',[ApiUserController::class,'edit'])->name('api-userEdit');
    Route::post('/api-user/update/{id}',[ApiUserController::class,'update'])->name('api-userUpdate');
    Route::delete('/api-user/delete/{id}',[ApiUserController::class,'destroy'])->name('api-userDestroy');
    Route::delete('/api-user-token/delete/{id}',[ApiUserController::class,'destroyToken'])->name('api-tokenDestroy');
});

// Change language session condition
Route::get('/language/{lang}',function ($lang){
    $lang = strtolower($lang);
    if ($lang == 'ru' || $lang == 'uz')
    {
        session([
            'locale' => $lang
        ]);
    }
    return redirect()->back();
});

/*
|--------------------------------------------------------------------------
| This is the end of Blade (front-end) Routes
|-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\
*/
