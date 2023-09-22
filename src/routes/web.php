<?php

Route::group(['namespace' => 'Dzhwarkawan\Tzar\Http\Controllers'], function () {
    Route::get('tzar/{id}', 'TzarController@index')->name('tzar');
    Route::get('tzar-test/', 'TzarController@test')->name('test');

});
