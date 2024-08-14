<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Alert;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function rsvpPage()
    {
        return view('rsvp');
    }

}
