<?php

namespace App\Http\Controllers;

use App\Models\events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class adminUpdate extends Controller
{
    protected function index($id){
        $event = $this->showEvent($id);
        $image = $this->getImage($event['title']);
        $event['image'] = $image;
        var_dump($image);
        return view('adminUpdate')->with(['event'=> $event]);
    }
    protected function updateProcess(){
        
    }
    protected function updateImage(Request $request,$id){   
        for ($i=0; $i < count($request['image']); $i++) { 
            Storage::delete($request['image'][$i]);
        }
        return back();
    }
    private function showEvent($id){
        $eventObj = new events();
        return $eventObj->get()->where('id',$id)->first();
    }
    private function getImage($path){
        return $image = Storage::allFiles($path);
    }
}
