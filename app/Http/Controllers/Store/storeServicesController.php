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
        $serviceUnits = Services\Units::where('idStore', '=', $dataStoreActive->idStore)->get();
        $serviceMeters = Services\Meters::where('idStore', '=', $dataStoreActive->idStore)->first();
        $serviceShipping = Services\Shipping::where('idStore', '=', $dataStoreActive->idStore)->first();
        return view('pages.stores.services.index', compact('dataStoreActive', 'dataStore', 'serviceKilos', 'serviceUnits', 'serviceMeters', 'serviceShipping'));
    }
    public function showServiceUnits() {
        $idUser = Auth::user()->idUser;
        $dataStoreActive = StorePermitt::where('store_permitt.idUser', '=', $idUser)
            ->where('store_permitt.active', '=', true)
            ->join('stores', 'stores.idStore', '=', 'store_permitt.idStore')
            ->select('stores.*')
            ->first();
        $serviceUnits = Services\Units::where('idStore', '=', $dataStoreActive->idStore)->get();
        return view('pages.stores.services.servcUnit', compact('serviceUnits'));
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
        
        // $eMessage = [];
        // $delMessage = [];
        $listUnitService = $request->listUnitService;
        
        if (!empty($listUnitService)) {
            // Hapus unit yang tidak ada dalam daftar baru
            $uuidUnitSaved = Services\Units::where('idStore', '=', $idStoreActive)->select('idUnit')->get();
            if ($uuidUnitSaved->isNotEmpty()) {
                $newUuidUnit = [];
                foreach ($listUnitService as $unit) {
                    if (isset($unit['uuidUnit'])) {
                        $newUuidUnit[] = $unit['uuidUnit'];
                    }
                }
                
                foreach ($uuidUnitSaved as $k => $idItem) {
                    $uuidUnit = $idItem->idUnit;
                    if (!(in_array($uuidUnit, $newUuidUnit))) {
                        $unitDel = Services\Units::where('idUnit', '=', $uuidUnit)->select('unit_name')->first()->unit_name;
                        // $delMessage[] = ['message' => $unitDel . ' successfully deleted'];
                        
                        Services\Units::where('idUnit', '=', $uuidUnit)->delete();
                    }
                    echo $uuidUnit;
                }
            }
            
            // Update atau buat unit baru
            $updateUnit = [];
            $newUnit = [];
            foreach ($listUnitService as $k => $unit) {
                if (isset($unit['uuidUnit'])){
                    $updateUnit[] = $unit;
                } else {
                    $newUnit[] = $unit;
                }
            }
            
            if (isset($updateUnit)) {
                foreach ($updateUnit as $k => $unitS) {
                    $statusUnit = $unitS['statusUnit'];
                    $nameUnit = $unitS['nameUnit'];
                    $priceUnit = $unitS['priceUnit'];
                    
                    $priceService = (float)preg_replace('/[^0-9.]/', '', $priceUnit);
                    
                    $uuidUnit = $unitS['uuidUnit'];
                    if (Services\Units::where('idUnit','=', $uuidUnit)->exists()) {
                        $prevUnit = Services\Units::where('idUnit','=', $uuidUnit)->first();
                        if ($prevUnit->unit_name != $nameUnit || $prevUnit->price != $priceService || $prevUnit->active != $statusUnit) {
                            Services\Units::where('idUnit','=', $uuidUnit)->update([
                                'unit_name' => $nameUnit,
                                'price' => $priceService,
                                'active' => $statusUnit,
                            ]);
                            // $eMessage[] = ['message' => $nameUnit . ' successfully updated'];
                        }
                    }
                }
            } 
            if (isset($newUnit)) {
                foreach ($newUnit as $k => $unitS) {
                    $statusUnit = $unitS['statusUnit'];
                    $nameUnit = $unitS['nameUnit'];
                    $priceUnit = $unitS['priceUnit'];
                    
                    $priceService = (float)preg_replace('/[^0-9.]/', '', $priceUnit);
                    
                    $uuidNewUnit = '';
                    $isIdUnique = false;
                    while (!$isIdUnique) {
                        $uuidNewUnit = Uuid::uuid6();
                        if (!(Services\Units::where('idUnit','=', $uuidNewUnit)->exists())) {
                            $isIdUnique = true;
                        }
                    }
                    Services\Units::create([
                        'idUnit' => $uuidNewUnit,
                        'idStore' => $idStoreActive,
                        'unit_name' => $nameUnit,
                        'price' => $priceService,
                        'active' => $statusUnit,
                    ]);
                    // $eMessage[] = ['message' => $nameUnit . ' successfully created'];
                }
            }
            // if (!empty($delMessage)) {
            //     $eMessage = array_merge($eMessage, $delMessage);
            // }
            
            return response()->json(['status' => 'success', 'message' => 'Successfully processed all service units'], 200);
        }
        return response()->json(['status' => 'error', 'message' => 'No service units provided.'], 400);
    }
    public function deleteServiceUnits(Request $request) {
        $idUser = Auth::user()->idUser;
        $eMessage = '';
        $idStoreActive = StorePermitt::where('idUser', '=', $idUser)->where('active', '=', true)->select('idStore')->first()->idStore;
        if (Services\Units::where('idStore', '=', $idStoreActive)->exists()) {
            Services\Units::where('idStore', '=', $idStoreActive)->delete();
            $eMessage = ['message' => 'successfully deleted all units service'];
        }
        
        return response()->json(['status' => 'success', 'message' => $eMessage], 200);
    }
    
    
    public function saveServiceMeters(Request $request) {
        $idUser = Auth::user()->idUser;
        $idStoreActive = StorePermitt::where('idUser', '=', $idUser)->where('active', '=', true)->select('idStore')->first()->idStore;
        
        $dataReq = $request->all();
        $rulesReq = [
            'inpServiceStorePriceMeters' => 'required|string|max:255',
            'actvThsMetersServc' => 'sometimes|boolean',
        ];
        $messagesReq = [
            'inpServiceStorePriceMeters.required' => 'Price\'s required.',
            'inpServiceStorePriceMeters.max' => 'Max 255 Character.',
            'actvThsMetersServc.accepted' => 'The service must be set as active or not.',
        ];
        $validator = Validator::make($dataReq, $rulesReq, $messagesReq);
        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }
        
        $priceService = (float)preg_replace('/[^0-9.]/', '', $request->inpServiceStorePriceMeters);
        
        $kilosRecord = Services\Meters::where('idStore', '=', $idStoreActive)->first();
        $kilosSave = null;
        
        if($kilosRecord) {
            $prevPrice = $kilosRecord->price;
            $prevActive = $kilosRecord->active;
            if ($prevPrice == $priceService && $prevActive == $request->actvThsMetersServc) {
                return response()->json(['status' => 'success', 'message' => 'Nothing have to change.']);
            }
            
            $kilosSave = Services\Meters::where('idStore', '=', $idStoreActive)->update([
                'price' => $priceService,
                'active' => $request->actvThsMetersServc,
            ]);
        } else {
            $uuidService = Uuid::uuid6();
            $kilosSave = Services\Meters::create([
                'idMeters' => $uuidService,
                'idStore' => $idStoreActive,
                'price' => $priceService,
                'active' => $request->actvThsMetersServc,
            ]);
        }
        
        if ($kilosSave) {
            return response()->json(['status' => 'success', 'message' => 'Price saved successfully.', 'activeServc' => $request->actvThsMetersServc ? true : false]);
        }
        
        return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
    }
    
    public function saveServiceShipping(Request $request) {
        $idUser = Auth::user()->idUser;
        $idStoreActive = StorePermitt::where('idUser', '=', $idUser)->where('active', '=', true)->select('idStore')->first()->idStore;
        
        $dataReq = $request->all();
        $rulesReq = [
            'inpServiceStorePriceShipping' => 'required|string|max:255',
            'actvThsShippingServc' => 'sometimes|boolean',
        ];
        $messagesReq = [
            'inpServiceStorePriceShipping.required' => 'Price\'s required.',
            'inpServiceStorePriceShipping.max' => 'Max 255 Character.',
            'actvThsShippingServc.accepted' => 'The service must be set as active or not.',
        ];
        $validator = Validator::make($dataReq, $rulesReq, $messagesReq);
        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }
        
        $priceService = (float)preg_replace('/[^0-9.]/', '', $request->inpServiceStorePriceShipping);
        
        $kilosRecord = Services\Shipping::where('idStore', '=', $idStoreActive)->first();
        $kilosSave = null;
        
        if($kilosRecord) {
            $prevPrice = $kilosRecord->price;
            $prevActive = $kilosRecord->active;
            if ($prevPrice == $priceService && $prevActive == $request->actvThsShippingServc) {
                return response()->json(['status' => 'success', 'message' => 'Nothing have to change.']);
            }
            
            $kilosSave = Services\Shipping::where('idStore', '=', $idStoreActive)->update([
                'price' => $priceService,
                'active' => $request->actvThsShippingServc,
            ]);
        } else {
            $uuidService = Uuid::uuid6();
            $kilosSave = Services\Shipping::create([
                'idShipping' => $uuidService,
                'idStore' => $idStoreActive,
                'price' => $priceService,
                'active' => $request->actvThsShippingServc,
            ]);
        }
        
        if ($kilosSave) {
            return response()->json(['status' => 'success', 'message' => 'Price saved successfully.', 'activeServc' => $request->actvThsShippingServc ? true : false]);
        }
        
        return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
    }
}
