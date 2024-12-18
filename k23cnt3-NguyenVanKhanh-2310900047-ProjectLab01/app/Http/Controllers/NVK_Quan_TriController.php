<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NVK_Quan_TriController extends Controller
{
    //GET: login (authentication)
    public function nvkLogin(){
        return view('NvkLogin.nvk-login');
    }
    public function nvkLoginSubmit(Request $request){
        return view('NvkLogin.nvk-login');
    }
}
