<?php

namespace App\Http\Controllers;

use App\Models\events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class adminDelete extends Controller
{
    public function index($id){
        $event = new events;
        $event = $event::find($id);
        $title = $event->title;
        Storage::deleteDirectory($title);
        $event->delete();
        return back();
    }
}
