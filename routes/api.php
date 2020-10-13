<?php

use Illuminate\Support\Facades\Route;

Route::get('/{resource}/{resourceId}/text-items/{field}', 'Suciuss\TypeAheadEmiterField\Http\Controllers\TextItemsController@index');
