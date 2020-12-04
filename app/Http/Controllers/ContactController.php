<?php

namespace App\Http\Controllers;

use Illuminate\App\Http\Request;

use App\Http\Requests\contactRequest;

use App\Models\Message;

class ContactController extends Controller
{
    public function submit(contactRequest $request){
        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');
        $message->save();

        return redirect()->route('home')->with('success', 'Your message has been sent successfully!');
    }
}
