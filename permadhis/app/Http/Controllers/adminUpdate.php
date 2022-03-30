<?php

namespace App\Http\Controllers;

use App\Models\events;
use Illuminate\Http\Request;

class adminUpdate extends Controller
{
    protected function index($id){
        $event = $this->showEvent($id);
        return view('adminUpdate')->with('data',$event);
    }
    private function showEvent($id){
        $eventObj = new events();
        return $events = $eventObj->get()->where('id',$id);
    }
}
