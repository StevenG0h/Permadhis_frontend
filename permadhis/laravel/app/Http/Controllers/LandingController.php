<?php

namespace App\Http\Controllers;

use App\Models\events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class LandingController extends Controller
{
    protected function index(){
        $events = $this->showEvents();
        $i = 0;
        foreach ($events as $event) {
            $image[$i] = $this->getImage($event['title']."/images");
            $logo[$i] = $this->getImage($event['title']."/logo"); 
            $event['image'] = $image[$i];
            $event['logo'] = $logo[$i];
            $i++;
        }
        return view('Landing')->with(['data'=>$events]);   
    }
    private function showEvents(){
        $eventObj = new events();
        return $events = $eventObj->get();
    }
    private function getImage($path){
        return $image = Storage::disk('image')->allFiles($path);
    }
}
