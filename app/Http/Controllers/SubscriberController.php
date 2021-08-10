<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewSubscriberEmail;

class SubscriberController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedAttr = request()->validate([
            'email' => 'required|unique:subscribers',
        ]);
        $subscriber = new Subscriber(request(['email']));
        $subscriber->save();
        
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new NewSubscriberEmail($subscriber));
        
        return redirect(route('home'))->with('success','You are subscribed 😄');
    }
}