<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WidgetCollection;
use App\Http\Resources\WidgetResource;
use App\Models\Widget;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WidgetController extends Controller
{
    /**
     * Display a collection of the resources.
     */
    public function index()
    {
        $widgets = Widget::all();
        return new WidgetCollection($widgets);
    }

    /**
     * Display the specified resource.
     */
    public function show(Widget $widget)
    {
        return new WidgetResource($widget);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $widget = Widget::create([
            'name' => $request->post('name'),
            'description' => $request->post('description'),
        ]);

        return new WidgetResource($widget);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Widget $widget)
    {
        $widget->update([
            'name' => $request->post('name'),
            'description' => $request->post('description'),
        ]);
        return new WidgetResource($widget);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Widget $widget)
    {
        $widget->delete();
        return response()->noContent(Response::HTTP_NO_CONTENT);
    }
}
