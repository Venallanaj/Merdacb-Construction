<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
   
  
    public function contact(){
        return view('contact');
    }

    public function contactPost(Request $request){
        $this->validate($request, [
                        'name' => 'required',
                        'email' => 'required|email',
                        'comment' => 'required'
                ]);

        Mail::send('email', [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'comment' => $request->get('comment') ],
                function ($message) {
                        $message->from('info@merdacab.com');
                        $message->to('info@merdacab.com', 'Your Name')
                                ->subject('Your Website Contact Form');
        });

     return \Redirect::back()->with('success', 'Thanks for contacting me, I will get back to you soon!');
    //  return view('contact');

    }

   
}