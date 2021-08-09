<?php

use coroxx\evilanalytics\Http\Middleware\AnalyticMiddleware;

Route::group(['namespace' => 'coroxx\evilanalytics\Http\Controllers'], function () {
    Route::middleware([AnalyticMiddleware::class])->group(function () {
        Route::get('analytics/{lang}', 'AnalyticsController@index')->name('analytics');
        Route::get('analytics', 'AnalyticsController@indexLang')->name('analytics.index');
    });
});



// Route::get('evilanalytics', function () {
//     return 'evilanalytics';
// });