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
    
    public function saveServiceUnits(Request $request) {
        $idUser = Auth::user()->idUser;
        $idStoreActive = StorePermitt::where('idUser', '=', $idUser)->where('active', '=', true)->select('idStore')->first()->idStore;
        
        $dataReq = $request->all();
        $rulesReq = [
            'listUnitService' => 'required|array',
        ];
        $messagesReq = [
            'listUnitService.required' => 'List unit\'s service must be required.',
            'listUnitService.array' => 'List unit service must be an array.',
        ];
        $validator = Validator::make($dataReq, $rulesReq, $messagesReq);
        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }
        
        $eMessage = [];
        $listUnitService = $request->listUnitService;
        $uuidUnitActive = Services\Units::where('idStore', '=', $idStoreActive)->select('idUnit')->get()->idUnit;
        if ($uuidUnitActive->isNotEmpty()) {
            $newUuidUnit = [];
            foreach ($listUnitService as $unit) {
                if (isset($unit['uuidUnit'])) {
                    $newUuidUnit[] = $unit['uuidUnit'];
                }
            }
            
            foreach ($uuidUnitActive as $k => $uuidUnit) {
                if (!(in_array($uuidUnit, $newUuidUnit))) {
                    Services\Units::where('idUnit', '=', $uuidUnit)->delete();
                }
            }
        }
        
        foreach ($listUnitService as $k => $unitS) {
            $statusUnit = $unitS['statusUnit'];
            $nameUnit = $unitS['nameUnit'];
            $priceUnit = $unitS['priceUnit'];
            
            if (isset($unitS['uuidUnit'])) {
                $uuidUnit = $unitS['uuidUnit'];
                if (Services\Units::where('idUnit','=', $uuidUnit)->exists()) {
                    Services\Units::where('idUnit','=', $uuidUnit)->update([
                        'unit_name' => $nameUnit,
                        'price' => $priceUnit,
                        'active' => $statusUnit,
                    ]);
                }
            } else {
                $isIdUnique = false;
                $uuidNewUnit = '';
                while ($isIdUnique) {
                    $uuidNewUnit = Uuid::uuid6();
                    if (!(Services\Units::where('idUnit','=', $uuidNewUnit)->exists())) {
                        $isIdUnique = true;
                    }
                }
                Services\Units::create([
                    'idUnit' => $uuidNewUnit,
                    'idStore' => $idStoreActive,
                    'unit_name' => $nameUnit,
                    'price' => $priceUnit,
                    'active' => $statusUnit,
                ]);
            }
        }
    }
}
