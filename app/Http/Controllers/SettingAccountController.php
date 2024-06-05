<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingAccountController extends Controller
{
    
    public function index()
    {
        return view('pages.users.settingaccount.index');
    }
}
