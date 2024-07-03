<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Store\Store;
use App\Models\Store\StoreAddress;
use App\Models\Store\StorePermitt;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class storeServicesController extends Controller
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
        
        $serviceKilos = Services\Kilos::where('idStore', '=', $dataStoreActive->idStore)->first();
        $serviceUnits = Services\Units::where('idStore', '=', $dataStoreActive->idStore)->first();
        $serviceMeters = Services\Meters::where('idStore', '=', $dataStoreActive->idStore)->get();
        $serviceShipping = Services\Shipping::where('idStore', '=', $dataStoreActive->idStore)->first();
        return view('pages.stores.services.index', compact('dataStoreActive', 'dataStore', 'serviceKilos', 'serviceUnits', 'serviceMeters', 'serviceShipping'));
    }

    public function saveServiceKilos(Request $request) {
        $idUser = Auth::user()->idUser;
        $idStoreActive = StorePermitt::where('idUser', '=', $idUser)->where('active', '=', true)->select('idStore')->first()->idStore;
        
        $dataReq = $request->all();
        $rulesReq = [
            'inpServiceStorePriceKilos' => 'required|string|max:255',
            'actvThsKilosServc' => 'sometimes|boolean',
        ];
        $messagesReq = [
            'inpServiceStorePriceKilos.required' => 'Price\'s required.',
            'inpServiceStorePriceKilos.max' => 'Max 255 Character.',
            'actvThsKilosServc.accepted' => 'The service must be set as active or not.',
        ];
        $validator = Validator::make($dataReq, $rulesReq, $messagesReq);
        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }
        
        $priceService = (float)preg_replace('/[^0-9.]/', '', $request->inpServiceStorePriceKilos);
        $priceServiceFormatted = number_format($priceService, 2, '.', '');
        
        $kilosRecord = Services\Kilos::where('idStore', '=', $idStoreActive)->first();
        $kilosSave = null;
        
        if($kilosRecord) {
            $prevPrice = $kilosRecord->price;
            $prevActive = $kilosRecord->active;
            if ($prevPrice == $priceServiceFormatted && (bool)$prevActive === (bool)$request->actvThsKilosServc) {
                return response()->json(['status' => 'success', 'message' => 'Nothing have to change.']);
            }
            
            $kilosSave = Services\Kilos::where('idStore', '=', $idStoreActive)->update([
                'price' => $priceServiceFormatted,
                'active' => $request->has('actvThsKilosServc') ? $request->actvThsKilosServc : false,
            ]);
        } else {
            $uuidService = Uuid::uuid6();
            $kilosSave = Services\Kilos::create([
                'idKilos' => $uuidService,
                'idStore' => $idStoreActive,
                'price' => $priceServiceFormatted,
                'active' => $request->has('actvThsKilosServc') ? $request->actvThsKilosServc : false,
            ]);
        }
        
        if ($kilosSave) {
            return response()->json(['status' => 'success', 'message' => 'Price saved successfully.', 'activeServc' => $request->actvThsKilosServc ? true : false]);
        }
        
        return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
    }
}
