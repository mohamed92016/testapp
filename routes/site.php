<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\TestsController;
use App\Http\Controllers\Dashboard\QuestionsController;
use App\Http\Controllers\Dashboard\AnswersController;


Route::group(['namespace'=>'Site','middleware'=>'auth:web','prefix'=>'user'],function(){

    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('logout',[LoginController::class, 'logout'])->name('admin.logout');


                       /////////////// Profile Routes //////////////////

    

                      /////////////// Tests Routes //////////////////   

    
        
    

                      /////////////// Questions Routes //////////////////   

    
                        /////////////// Answers Routes //////////////////   

   


});


Route::group(['namespace'=>'Site','middleware'=>'guest:web' ,'prefix'=>'user'],function(){

    Route::get('login',[LoginController::class, 'login'])->name('admin.login');
    Route::post('login',[LoginController::class, 'postLogin'])->name('admin.post.login');

});

