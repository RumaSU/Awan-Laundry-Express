<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;
use App\Models\User\User;
use App\Models\User\User_Detail as UserDetail;
use App\Models\User\User_Address as UserAdderss;
use App\Models\Store\Store;
use App\Models\Store\StoreAddress;
use App\Models\Store\StorePermitt;

class transactionController extends Controller
{
    public function index() {
        $idUser = Auth::user()->idUser;
        $addressActive = UserAdderss::where('idUser', '=', $idUser)->where('selected', '=', true)->first();
        $listAddress = UserAdderss::where('idUser', '=', $idUser)->where('selected', '=', false)->get();
        
        return view('pages.auth.transaction.index', compact('addressActive','listAddress'));
    }
}
