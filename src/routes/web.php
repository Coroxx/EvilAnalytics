<?php

Route::group(['namespace' => 'coroxx\evilanalytics\Http\Controllers'], function () {
        Route::get('analytics/{lang}', 'AnalyticsController@index')->name('analytics');
        Route::get('analytics', 'AnalyticsController@indexLang')->name('analytics.index');
});
