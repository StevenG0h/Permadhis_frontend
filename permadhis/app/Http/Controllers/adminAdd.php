<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\events;

use function PHPUnit\Framework\isNull;

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
<<<<<<< HEAD
        if($title_db == null){
            $title_db['title'] = '';
=======
        if(isNull($title_db)){
            $title_db['title'] = 'null';
>>>>>>> 980cc363eb9f728ba62dc00c74f02773196be6fc
        }
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
                        return redirect('/admin');
                    }
                }
            }
        }else{
            return back();
        }
    }
}