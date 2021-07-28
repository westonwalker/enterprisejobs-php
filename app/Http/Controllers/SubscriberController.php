<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

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
        
        return redirect(route('home'))->with('success','You are subscribed 😄');
    }
}
