<?php


use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::group([

],

    function() {

        Auth::routes(['verify' => true]);

        Route::get('/', [HomeController::class, 'index'])->name('main');

        require_once 'main/blog.php';

    });
