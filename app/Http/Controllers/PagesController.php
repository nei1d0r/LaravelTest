<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $tasks = [
            'Go to the store',
            'Get milk',
            'Go to work'
        ];
        return view('welcome')->withTasks($tasks)->withFoo('bazbar');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
}
