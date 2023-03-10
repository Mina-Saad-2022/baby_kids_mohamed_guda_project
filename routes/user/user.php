<?php

use App\Http\Controllers\Action_user\action_user;
use App\Http\Controllers\to_open_page\home_controller ;
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


//Route::group(['prefix'=>'user'], function(){
//    // to open home page
//    Route::get('Home',[home_controller::class,'home_page'])->name('home_page');
//
//    // to open Create users page
//    Route::get('Create',[home_controller::class,'create_users'])->name('open_create_user');
//
//    // to open table users page
//    Route::get('All',[action_user::class, 'all_create'])->name('table_users');
//
//
//    /* to delete user form table */
//    Route::delete('delete',[action_user::class,'delete_user'])->name('delete');
//
//});
//
//Route::post('create.user',[action_user::class,'create_new_user'])->name('add_user');
//
///* to open home page direct*/
//Route::redirect('/', 'user/Home');
