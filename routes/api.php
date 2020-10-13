<?php

use Illuminate\Support\Facades\Route;

Route::get('/{resource}/{resourceId}/text-items/{field}', 'SuciuS\TextAutoComplete\Http\Controllers\TextItemsController@index');
