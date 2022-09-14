<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
    public function updateUserPassword(Request $request){
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
                    ? new JsonResponse([], 201)
                    : redirect($this->redirectPath());
    }
    protected function validator(array $data){
        return Validator::make($data,[
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cnpassword' => ['required', 'string', 'min:8', 'confirmed']
        ]);
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
