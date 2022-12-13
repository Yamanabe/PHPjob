<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function add()
    {
        return view('tweet.create');
    }
}
