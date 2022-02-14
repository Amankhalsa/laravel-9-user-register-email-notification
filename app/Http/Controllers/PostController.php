<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //


  
    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();

        Contact::create($input);

        //  Send mail to admin
        \Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'subject' => $input['subject'],
            'form_message' => $input['message'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('amansin31@gmail.com', 'Admin')->subject($request->get('subject'));
        });

        return redirect()->route('welcome','#contact')->with(['success' => 'Contact Form Submit Successfully']);
    }
}
