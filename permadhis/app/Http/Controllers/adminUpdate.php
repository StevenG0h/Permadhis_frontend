<?php

namespace App\Http\Controllers;

use App\Models\events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\isNull;

class adminUpdate extends Controller
{
    protected function index($id){
        $event = $this->showEvent($id);
        $image = $this->getImage($event['title']."/images");
        $event['logo'] = $this->getImage($event['title']."/logo");
        $event['image'] = $image;
        return view('adminUpdate')->with(['event'=> $event]);
    }
    protected function updateEvent(Request $request, $id){
        $event = new events;
        $title = $request->input('title');
        $desc = $request->input('desc');
        $ig = $request->input('ig');
        $event = $event::find($id);
            if (!empty($title)) {
                if (!empty($desc)) {
                    if(!empty($ig)){
                        $oldTitle = $event->title;
                        $event->title = $title;
                        $event->description = $desc;
                        $event->instagram = $ig;
                        $event->save();
                        Storage::move($oldTitle,$title);
                        return redirect('/admin');
                    }
                }
            }else{
                return back();
            }
    }
    protected function updateImage(Request $request,$id){   
        for ($i=0; $i < count($request['image']); $i++) { 
            Storage::delete($request['image'][$i]);
        }
        return back();
    }
    protected function updateLogo(Request $request,$title){   
        Storage::delete($request['oldLogo']);
        $logo = $request->file('logo');
        $logo->storeAs($title.'/logo/', $logo->getClientOriginalName());
        return back();
    }
    protected function uploadImage(Request $request,$title){
        $images = $request->file('image');
        $imageInStorage = count($this->getImage($title."/images"));
        if ($imageInStorage != 5) {
            $imageLimit =  5 - $imageInStorage;
            if ($imageLimit > count($images)) {
                $imageLimit = $imageLimit - count($images);
            }
            for ($i=0; $i < $imageLimit; $i++) { 
                $images[$i]->storeAs($title.'/images/', $images[$i]->getClientOriginalName());
            }
        }else{
            return back();
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
