<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use PDF;
class MessageController extends Controller
{
    public function message(){
        $messages = Message::all();
        return view('message',['messages' => $messages]);
    }
    public function add(){
        return view('addmessage');
    }
    public function create(Request $request){
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
        return redirect('/message');
    }
    public function edit($id){
        $message = Message::find($id);
        return view('editmessage',['message'=>$message]);
    }
    public function update($id, Request $request){
        $message = Message::find($id);
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
           
        $message->save();
        return redirect('/message');
    }
        public function delete($id){
        $message = Message::find($id);
        $message->delete();
        return redirect('/message');
    }
    public function cetak_pdf(){
        $message = Message::all();
        $pdf = PDF::loadview('messages_pdf',['message'=>$message]);
        return $pdf->stream();
    }
}