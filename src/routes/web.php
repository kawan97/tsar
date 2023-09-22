<?php

Route::group(['namespace' => 'Dzhwarkawan\Tsar\Http\Controllers'], function () {
    Route::get('tsar/{id}', 'TsarController@index')->name('tsar');
    Route::get('tsar-test/', 'TsarController@test')->name('test');

});
