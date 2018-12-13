<?php

namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\model\eventsModel;

class EventsController extends Controller
{

    public function showEvents(){
        $events = eventsModel::all();
        return response()->json($events);
    }
}

