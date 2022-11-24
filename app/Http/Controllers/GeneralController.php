<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NotificationModel;

class GeneralController extends Controller
{
    public function notif(Request $request){
        $data['data'] = NotificationModel::select('*')->get();
        return view('general.notify-list',$data);
    }

    public function chat(Request $request){
        return view('general.chat');
    }
}
