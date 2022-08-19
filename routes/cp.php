<?php

Route::group(['prefix' => 'memberbox'], function () {
    Route::get('', 'CP\MembersController@index')->name('memberbox.index');
    Route::get('create', 'CP\MembersController@create')->name('memberbox.create');
    Route::post('store', 'CP\MembersController@store')->name('memberbox.store');
    //Cambio Conecta Ver Usario
    Route::get('{user}', '\App\Http\Controllers\MembersController@edit')->name('edit');

    //Cambio Conecta Actualizar Usuario
    Route::patch('{user}', '\App\Http\Controllers\MembersController@update')->name('memberbox.update');

    Route::delete('destroy', 'CP\MembersController@destroy')->name('memberbox.destroy');
    Route::get('export/{type}', 'CP\MembersController@export')->name('memberbox.export');
});
