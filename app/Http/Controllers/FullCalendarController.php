<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Dflydev\DotAccessData\Data;

class FullCalendarController extends Controller
{
    public function index(Request $request)
    {
        $data = Event::where('user_id', $request->user()->id)
            ->whereDate('start', '>=', $request->start)
            ->whereDate('start', '<=', $request->end)
            // ->get(['id', 'title', 'body', 'start', 'end']);
            ->get(['id', 'user_id', 'start', 'meal', 'item', 'cost', 'traffic', 'other', 'total', 'memo']);
        return response()->json($data);
    }

    public function action(Request $request)
    {
        if ($request->type == 'add') {
            logger($request);
            $event = new Event($request->all());
            $event->user_id = $request->user()->id;
            $event->save();

            return response()->json($event);
        }

        if ($request->type == 'update') {
            $event = Event::find($request->id);
            logger($request);
            $event->fill($request->all());
            $event->save();

            return response()->json($event);
        }

        if ($request->type == 'delete') {
            $event = Event::find($request->id);
            $event->delete();

            return response()->json($event);
        }
    }
}
