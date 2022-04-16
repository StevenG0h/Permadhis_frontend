<?php

namespace App\Http\Controllers;

use App\Models\events;
use Illuminate\Http\Request;

class adminDelete extends Controller
{
    public function index(){
        echo 'hello';
    }
    public function permDelete(){
        return view('adminDelete');
    }
    public function archieve($id){
        $event = new events;
        $event::withTrashed()->where('id',$id);
    }
}
