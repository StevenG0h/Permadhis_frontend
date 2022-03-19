<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class LandingController extends Controller
{
    protected function index(){
        return view('landing');
    }
}
