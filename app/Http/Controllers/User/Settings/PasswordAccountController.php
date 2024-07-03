<?php

namespace App\Http\Controllers\User\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasswordAccountController extends Controller
{
    public function index() {
        return view('pages.users.settingaccount.ubahpw');
    }
}
