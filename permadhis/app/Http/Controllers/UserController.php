<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $auth = Auth::user();
        if($auth->status !=1){
            return redirect(route('adminHome'));
        }else{
            $user = $this->showUser();
            return view('user')->with(['data' =>$user]);
        }
    }
    private function showUser(){
        $user = new User;
        return $user->get();
    }
    public function updateUser(){
        $user = Auth::user();
        $name = $user->name;
        $email = $user->email;
        return view('auth/update')->with(['name'=>$name,'email'=>$email]);
    }
    public function updateUserProcess(Request $request){
        $id = Auth::id();
        $user = new User;
        $user = $user::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect(route('adminHome'));
    }
    private function showUserData($id){
        $user = new User;
        return $user->get()->where('id',$id);
    }
    public function deleteUser($id){
        $user = DB::table('users')->where('id',$id);
        $status = $user->value('status');
        if($status ==1){
            return redirect(route('showUser'));
        }
        $user = new User;
        $user::destroy($id);
        return redirect(route('showUser'));
    }
}
