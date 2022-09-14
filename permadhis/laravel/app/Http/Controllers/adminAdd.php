<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\events;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;

use function PHPUnit\Framework\isNull;

class adminAdd extends Controller
{
    protected function index(){
        
        return view('adminAdd');
    }
    protected function addProcess(Request $request){
        $admin = new events;
        $validate = $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'ig' => 'required',
            'ig_username' => 'required',
        ]);
        
        $image = $request->file('image');
        
        $request->validate([
            'images.*'=>[
                'required',File::types(['jpg','jpeg','png','pdf'])->max(1024 * 300)
            ],
            'logo'=>[
                'required',File::types(['jpg','jpeg','png','pdf'])->max(1024 * 300)
            ],
        ]);
        $event = new events();
        $event::create([
            'title'=> $request->title,
            'description'=>$request->desc,
            'instagram_link'=>$request->ig,
            'instagram_username'=>$request->ig_username,
        ]);

        $request->file('logo')->storeAs($request->title.'/logo/', $request->file('logo')->getClientOriginalName(),'image');
        
        foreach ($request->file('image') as $image) {
            $image->storeAs($request->title.'/images/', $image->getClientOriginalName(),'image');
        }
        return redirect('admin');
    }
}