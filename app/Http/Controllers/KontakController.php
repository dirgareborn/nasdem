<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class KontakController extends Controller
    {
        public function kontak(){
            return view('web.kontak');
    }

    public function kontakPost(Request $request){
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
                    $message->from('dirga@amaze.co.id');
                    $message->to('dirga@amaze.co.id', 'Dirga Amaze')
                    ->subject('Your Website Contact Form');
    });

    return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');

    }
}
