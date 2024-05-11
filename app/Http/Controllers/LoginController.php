<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use  App\Models\User;
use App\Models\Alamat;
use App\Models\Produk;

class LoginController extends Controller
{
    public function loginIndex()
    {
        return view('login.login');
    }

    public function loginPost(Request $request)
    {

    }

}

