<?php

namespace App\Http\Controllers;

use App\Models\events;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected function index(){
        $events = $this->showEvents();
        return view('adminHome')->with('data',$events);   
    }
    private function showEvents(){
        $eventObj = new events();
        return $events = $eventObj->get();
    }
}
