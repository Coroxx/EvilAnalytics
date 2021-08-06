<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AnalyticMiddleware;
use GuzzleHttp\Middleware;

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
Route::get('/analytics', 'AnalyticsController@index')->name('analytics');


Route::middleware([AnalyticMiddleware::class])->group(function () {
    
    // Your routes here //
    
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
});
