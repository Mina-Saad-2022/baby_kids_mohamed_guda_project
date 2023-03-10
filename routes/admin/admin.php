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


Route::group(['prefix'=>'Admin'], function(){
    // to open home page
    Route::get('HomePage',[home_controller::class,'home_page'])->name('home_page');

Route::group(['prefix'=>'User'],function(){
    // to open Create users page
    Route::get('Create',[home_controller::class,'create_users'])->name('open_create_user');

    // to open table users page
    Route::get('All',[action_user::class, 'all_create'])->name('table_users');


    /* to delete user form table */
    Route::delete('delete',[action_user::class,'delete_user'])->name('delete');

/* to open edit user page */
    Route::get('/page_edit/{id}',[action_user::class,'edit_page'])->name('edit_user');

Route::put('/edit.done',[action_user::class,'done_edit'])->name('done_edit');

    /* to edit user data */
//    Route::get('edit',[action_user::class,'edit_user']);


    Route::post('/photo',[action_user::class,'photo_user'])->name('photo_user');
});

});

Route::post('create.user',[action_user::class,'create_new_user'])->name('add_user');

/* to open home page direct*/
Route::redirect('/', 'Admin/HomePage');
