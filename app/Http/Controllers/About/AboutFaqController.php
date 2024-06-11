<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutFaqController extends Controller
{
    public function index()
    {
        return view('pages.guests.about.aboutFAQ.index');
    }
}
