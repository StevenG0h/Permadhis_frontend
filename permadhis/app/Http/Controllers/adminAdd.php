<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\events;

class adminAdd extends Controller
{
    protected function index(){
        return view('adminAdd');
    }
    protected function addProcess(Request $request){
        $admin = new events;
        $title = $request->input('title');
        $desc = $request->input('desc');
        $ig = $request->input('ig');
        $logo = $request->file('logo');
        $images = $request->file('image');
        $title_db = $admin::where('title',$title)->first('title');
        if ($title != $title_db['title']) {
            if (!empty($title)) {
                if (!empty($desc)) {
                    if(!empty($ig)){
                        $admin->title = $title;
                        $admin->description = $desc;
                        $admin->instagram = $ig;
                        $admin->save();
                        $logo->storeAs($title.'/logo/', $logo->getClientOriginalName());
                        foreach ($images as $image) {
                            $image->storeAs($title.'/images/', $image->getClientOriginalName());
                        }
                        return redirect('adminHome');
                    }
                }
            }
        }else{
            return back();
        }
    }
}