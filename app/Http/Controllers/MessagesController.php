<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMessageRequest;
use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //
    public function show(Message $message){

        return view('messages.show',['message'=>$message]);

        // Ir a buscar el Message por ID

        //Una view de un message
    }

    public function create(CreateMessageRequest $request){

        $message = Message::create([
            'content' => $request->input('message'),
            'image' => 'https://picsum.photos/420/320?image='.mt_rand(0,1000)
        ]);

        return redirect('messages/'.$message->id);
    }
}
