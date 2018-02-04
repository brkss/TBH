<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Message ;

class PublicController extends Controller
{
    //

    public function sendmessage($username) {
        $user = DB::table('users')->where('username','=',$username)->get() ;
            return view('sendmessage',compact('user')) ;
    }

    public function postmessage(Request $request,$id){
        $message = new Message ; 
        $message->messages = $request->text ;
        $message->user_id = $id ;
        $message->save();
            return back() ;
    }
}
