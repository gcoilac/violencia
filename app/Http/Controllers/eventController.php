<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\event;

class eventController extends Controller
{
    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'fecha_init' => 'required',
                'fecha_end' => 'required',
                'location' => 'required',
                'description' => 'required'
            ]
        );

        $event = new event();

        $event->name = $request->name;
        $event->fecha_init = $request->fecha_init;
        $event->fecha_end = $request->fecha_end;
        $event->location = $request->location;
        $event->description = $request->description;

        $event->save();

        return redirect()->route('events.show', $event);
    }

    public function show(event $event)
    {
        return view('events.show', compact('event'));
    }

    public function edit(event $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, event $event)
    {
        $event->name = $request->name;
        $event->fecha_init = $request->fecha_init;
        $event->fecha_end = $request->fecha_end;
        $event->location = $request->location;
        $event->description = $request->description;

        return $event;
        // $event->save();

        // return redirect()->route('events.show', $event);
    }
}
