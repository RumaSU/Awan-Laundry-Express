<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Store\Store;
use App\Models\Store\StoreAddress;
use App\Models\Store\StorePermitt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class storeOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $idUser = Auth::user()->idUser;
        $dataStoreActive = StorePermitt::where('store_permitt.idUser', '=', $idUser)
            ->where('store_permitt.active', '=', true)
            ->join('stores', 'stores.idStore', '=', 'store_permitt.idStore')
            ->select('stores.*')
            ->first();
            
        $dataStore = StorePermitt::where('store_permitt.idUser', '=', $idUser)
            ->where('store_permitt.active', '=', false)
            ->join('stores', 'stores.idStore', '=', 'store_permitt.idStore')
            ->select('stores.*')
            ->get();
        return view('pages.stores.orders.index', compact('dataStoreActive', 'dataStore'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
