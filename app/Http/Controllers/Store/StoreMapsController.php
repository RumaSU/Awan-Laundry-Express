<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreMapsController extends Controller
{
    public function index()
    {
        return view('pages.stores.maps.index');
    }
}
