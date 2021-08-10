<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dotnetjob;
use Auth;

class DotnetjobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request) 
    {
        $dotnetjob = new Dotnetjob(request(['title']));
        $dotnetjob->user_id = Auth::user()->id;
        $dotnetjob->title = request('title');
        $dotnetjob->company_name = request('company_name');
        $dotnetjob->company_type = request('company_type');
        $dotnetjob->location = request('location');
        $dotnetjob->url = request('url');
        $dotnetjob->tags = request('tags');
        
        if (request('background_color'))
            $dotnetjob->background_color = request('background_color');
        
        if (request('color'))
            $dotnetjob->color = request('color');

        $dotnetjob->expiration_date = date('Y-m-d', strtotime('+90 days'));
        $dotnetjob->save();

        \App\Jobs\SendJobPostedEmails::dispatch($dotnetjob);

        return redirect()->route('jobs.create')->with('success', 'Job Created!');
    }
}