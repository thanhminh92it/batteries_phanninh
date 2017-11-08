<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Backend\Http\Controllers'], function()
{
    Route::get('/', 'BackendController@index');
});
