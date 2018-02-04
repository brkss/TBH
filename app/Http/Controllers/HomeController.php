<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Message ;
use App\User ;
use Auth ;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
            $messages = DB::table('messages')->where('user_id','=',Auth::user()->id)->orderBy('created_at', 'desc')->get();
            $num = DB::table('messages')->count();
        return view('messages', compact('messages','num'));
    }


    public function deletemsg(Message $message) {
            $message->delete();
            return back();

    }

    public function profilesitting(){
        return view('profilesitting');
    }

    public function savesitting(User $user,Request $request){
        $user->update($request->all()) ;
            return back();
    }



    public function like(Request $request){
       // $like_s = $request->like_s ;
        $message_id = $request->message_id ;
        $likeup = DB::table('messages')->where('id','=',$message_id)->first();
            
            if($likeup->like == 0){
                DB::table('messages')
                ->where('id','=',$message_id)
                ->update(['like'=> 1]);
                $is_like = 1 ;
            }
            elseif($likeup->like == 1 ) {
                DB::table('messages')
                ->where('id','=',$message_id)
                ->update(['like'=> 0]);
                $is_like = 0 ;
            }
            $resp = array(
                'is_like' => $is_like
            );
            return response()->json($resp , 200) ;

            
    }


}
