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
use App\Models\User\User_Detail;
use App\Models\User\User_Address;
use App\Models\Store\Store;
use App\Models\Store\StoreAddress;
use App\Models\Store\StorePermitt;

class UserController extends Controller
{
    /**
     * Login
     */
    
    public function loginView() {
        return view('login.login');
    }
    public function login(Request $request) {
        $dataReq = $request->all();
        $rulesReq = [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8'
        ];
        $messagesReq = [
            'email.required' => 'Email\'s required.',
            'email.max' => 'Max 255 Character.',
            'password.required' => 'Password required.',
            'password.min' => 'Min 8 Character.'
        ];
        $validator = Validator::make($dataReq, $rulesReq, $messagesReq);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            // Jika login berhasil, simpan data pengguna dalam sesi
            // $user = Auth::user();
            // session(['user' => $user]);
            
            $request->session()->regenerate();

            return redirect('/user/homepage')->with('success', 'Login berhasil');
        }

        return back()->with('errorLogin', 'Incorrect email or password, try again!')->withInput();
    }
    
    
    /**
     * Register
     */
    
    public function registerView() {
        return view('login.register');
    }
    public function register(Request $request) {
        $dataReq = $request->all();
        $rulesReq = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'telp' => 'required|digits_between:8,15|max:15',
            'password' => 'required|string|min:8',
            'password_confirmation' => 'required|string|same:password'
        ];
        $messagesReq = [
            'name.required' => 'Nama\'s required.',
            'name.max' => 'Max 255 Character.',
            'email.required' => 'Email\'s required.',
            'email.max' => 'Max 255 Character.',
            'email.unique' => 'Email\'s registered.',
            'telp.required' => 'No Telpon required.',
            'telp.digits_between' => 'No Telpon invalid number.',
            'telp.max' => 'Max 15 Character.',
            'password.required' => 'Password required.',
            'password.min' => 'Min 8 Character.',
            'password_confirmation.required' => 'Password required.',
            'password_confirmation.same' => 'Password does not match.',
        ];
        $validator = Validator::make($dataReq, $rulesReq, $messagesReq);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $uuidUser = Uuid::uuid4();
        $existingUser = User::where('idUser', $uuidUser)->first();
        echo $existingUser;
        if (!$existingUser) {
            $user = User::create([
                'idUser' => $uuidUser,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            if ($user) {
                $userDetail = User_Detail::create([
                    'idUser' => $uuidUser,
                    'name' => $request->name,
                    'telp' => $request->telp,
                ]);
                
                
                if ($userDetail) {
                    Session::flash('success', 'Registrasi berhasil!');
                    
                    $credentials = [
                        'email' => $request->email,
                        'password' => $request->password,
                    ];
                    
                    if (Auth::attempt($credentials)) {
                        // Jika login berhasil, simpan data pengguna dalam sesi
                        $request->session()->regenerate();
                        // $user = Auth::user();
                        // session(['user' => $user]);
            
                        // return redirect('/')->with('success', 'Login berhasil');
                        return redirect()->intended('/');
                    }
                    
                    $user->delete();
                    return redirect()->back()->with('somethingErr', 'Something error happen');
                }
                return redirect()->back()->with('somethingErr', 'Something error happen');
            }
            
            $user->delete();
            return redirect()->back()->with('somethingErr', 'Something error happen');
        }
        return redirect()->back()->with('somethingErr', 'Something error happen');
    }
    
    /**
     * Logout
     */
    public function logout()
    {
        Auth::logout();

        session()->invalidate();
        session()->regenerateToken();

        return redirect('/');
    }
    
    
    /**
     * Create Store
     */

    public function createStore(Request $request) {
        $idUser = Auth::user()->idUser;
        $emailStore = Auth::user()->email;
        $nameStore = Auth::user()->UserDetail->name . ' Laundry';
        $idStore = '';
        
        $isIdUnique = false;
        while(!$isIdUnique) {
            $idStore = Uuid::uuid6();
            if (!(Store::where('idStore', '=', $idStore)->first())) {
                $isIdUnique = true;
            }
        }
        
        $createStore = Store::create([
            'idStore' => $idStore,
            'name' => $nameStore,
            'email' => $emailStore
        ]);
        
        if ($createStore) {
            $storePermitt = StorePermitt::create([
                'idUser' => $idUser,
                'idStore' => $idStore,
                'permitt_access' => 'Owner',
                'active' => true,
            ]);
            
            if ($storePermitt) {
                return redirect()->route('store\myStore');
            }
            
            $createStore->delete();
        }
        
        return redirect()->back()->with('errorCreate', 'Error when create store');
    }
}
