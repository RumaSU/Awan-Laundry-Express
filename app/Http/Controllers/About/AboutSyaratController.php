<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutSyaratController extends Controller
{
    public function index()
    {
        return view('pages.guests.about.aboutSyarat.index');
    }
}
