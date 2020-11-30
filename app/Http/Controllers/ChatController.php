<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use app\User;
use App\Events\ChatEvent;

class ChatController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function chat()
    {
        return view('chat');
    }

    public function send(request $request)
    {
        //return $request->all();
        //$message="Hello";
        //return $request->message;
        $user=User::find(Auth::id());
        $this->saveToSession($request);
        event(new ChatEvent($request->message,$user));
        //event(new ChatEvent($request->message,$user));
    }

    // public function sendtest()
    // {
    //     $message="Hello";
    //     $user=User::find(Auth::id());
    //     event(new ChatEvent($message,$user));

    // }

    public function saveToSession (request $request){
        session()->put('chat',$request->chat);
    }
    public function getOldMessage(){
        return session('chat');
    }
    public function deleteSession(){
        session()->forget('chat');
    }
}
