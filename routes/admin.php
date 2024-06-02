<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\TestsController;
use App\Http\Controllers\Dashboard\QuestionsController;
use App\Http\Controllers\Dashboard\AnswersController;


Route::group(['namespace'=>'Dashboard','middleware'=>'auth:admin','prefix'=>'admin'],function(){

    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('logout',[LoginController::class, 'logout'])->name('admin.logout');


                       /////////////// Profile Routes //////////////////

    Route::group(['prefix'=>'profile'], function(){
        Route::get('edit', [ProfileController::class, 'editProfile'])->name('edit.profile');
        Route::put('update', [ProfileController::class, 'updateProfile'])->name('update.profile');
    });

                      /////////////// Tests Routes //////////////////   

    Route::group(['prefix'=>'tests'], function(){
        Route::get('/', [TestsController::class, 'index'])->name('admin.tests');
        Route::get('create', [TestsController::class, 'create'])->name('admin.tests.create');
        Route::post('store', [TestsController::class, 'store'])->name('admin.tests.store');
        Route::get('edit/{id}', [TestsController::class, 'edit'])->name('admin.tests.edit');
        Route::post('update/{id}', [TestsController::class, 'update'])->name('admin.tests.update');
        Route::get('delete/{id}', [TestsController::class, 'destroy'])->name('admin.tests.delete');
        Route::get('show/{id}', [TestsController::class, 'show'])->name('admin.tests.show');
        
    });

                      /////////////// Questions Routes //////////////////   

    Route::group(['prefix'=>'questions'], function(){
        Route::get('/', [QuestionsController::class, 'index'])->name('admin.questions');
        Route::get('create/{id}', [QuestionsController::class, 'create'])->name('admin.questions.create');
        Route::post('store/{id}', [QuestionsController::class, 'store'])->name('admin.questions.store');
        Route::get('edit/{id}', [QuestionsController::class, 'edit'])->name('admin.questions.edit');
        Route::post('update/{id}', [QuestionsController::class, 'update'])->name('admin.questions.update');
        Route::get('delete/{id}', [QuestionsController::class, 'destroy'])->name('admin.questions.delete');
        
    });

                        /////////////// Answers Routes //////////////////   

    Route::group(['prefix'=>'answers'], function(){
        Route::get('/', [AnswersController::class, 'index'])->name('admin.answers');
        Route::get('create', [AnswersController::class, 'create'])->name('admin.answers.create');
        Route::post('store', [AnswersController::class, 'store'])->name('admin.answers.store');
        Route::get('edit/{id}', [AnswersController::class, 'edit'])->name('admin.answers.edit');
        Route::post('update/{id}', [AnswersController::class, 'update'])->name('admin.answers.update');
        Route::get('delete/{id}', [AnswersController::class, 'destroy'])->name('admin.answers.delete');
        
    });


});


Route::group(['namespace'=>'Dashboard','middleware'=>'guest:admin' ,'prefix'=>'admin'],function(){

    Route::get('login',[LoginController::class, 'login'])->name('admin.login');
    Route::post('login',[LoginController::class, 'postLogin'])->name('admin.post.login');

});

