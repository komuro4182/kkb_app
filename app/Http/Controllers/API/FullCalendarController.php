<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class FullCalendarController extends Controller
{

    public function __construct()
    {
        return $this->authorizeResource(Post::class, 'calendar');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Event::where('user_id', $request->user()->id)
            // ->get(['id', 'title', 'body', 'start', 'end']);
            ->get(['id', 'user_id', 'start', 'meal', 'item', 'cost', 'traffic', 'other', 'total', 'memo']);
        return response()->json(["data" => $data]);
    }

   public function action(Request $request)
    {
    // return $request;
    // return response()->json($request);
        if ($request->type == 'add') {
            logger($request);
            $event = new Event($request->all());
            // $event = Event::find(1);
            //  return response()->json($event);
            // $event->user_id = $request->user()->id;
            $event->user_id = 1;
            $event->save();

            return response()->json($event);
        }

        // if ($request->type == 'update') {
        //     $event = Event::find($request->id);
        //     logger($request);
        //     $event->fill($request->all());
        //     $event->save();

        //     return response()->json($event);
        // }

        // if ($request->type == 'delete') {
        //     $event = Event::find($request->id);
        //     $event->delete();

        //     return response()->json($event);
        // }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
