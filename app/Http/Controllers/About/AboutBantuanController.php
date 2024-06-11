<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutBantuanController extends Controller
{
    public function index()
    {
        return view('pages.guests.about.aboutPusatbantuan.index');
    }
}
