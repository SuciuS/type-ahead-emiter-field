<?php

namespace Suciuss\TypeAheadEmiterField\Http\Controllers;

use Laravel\Nova\Http\Requests\NovaRequest;

class TextItemsController
{
    public function index(NovaRequest $request)
    {
        $field = $request->newResourceWith($request->findModelQuery()->first() ?? $request->model())
            ->availableFields($request)
            ->firstWhere('attribute', $request->field);

        return call_user_func($field->itemsCallback, $request->search);
    }
}
