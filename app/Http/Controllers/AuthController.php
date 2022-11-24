<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{

    public function index(Request $request){
        $data['title'] = 'Login';
        return view('index',$data);
    }

    public function login(Request $request)
    {
        Session::put('Users',$request->all());

        return redirect('/follow-up');
    }

    public function logout(){
        Session::flush();
        return redirect('/');
    }
}
