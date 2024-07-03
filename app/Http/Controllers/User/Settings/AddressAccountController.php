<?php

namespace App\Http\Controllers\User\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User\User;
use App\Models\User\User_Detail as UserDetail;
use App\Models\User\User_Address as UserAddress;
use Ramsey\Uuid\Uuid;

class AddressAccountController extends Controller
{
    public function index() {
        $idUser = Auth::user()->idUser;
        $dataAddressChecked = UserAddress::where('idUser', '=', $idUser)->where('selected', '=', true)->first();
        $dataAddress = UserAddress::where('idUser', '=', $idUser)->where('selected', '=', false)->get();
        return view('pages.users.settingaccount.alamat', compact('dataAddress', 'dataAddressChecked'));
    }
    public function listAddress() {
        $idUser = Auth::user()->idUser;
        $dataAddress = UserAddress::where('idUser', '=', $idUser)->get();
        return view('pages.users.settingaccount.listAddress', compact('dataAddress'));
    }
    
    public function saveAddress(Request $request) {        
        $dataReq = $request->all();
        $rulesReq = [
            'idDataAddress' => 'nullable|string',
            'labelAddressUser' => 'required|string|max:255',
            'addsReceiverUser' => 'required|string|max:255',
            'addsReceiverTelpUser' => 'required|string|max:255',
            'addsStreetUser' => 'required|string|max:255',
            'addsVillUser' => 'nullable|string|max:255',
            'addsSubdistrUser' => 'required|string|max:255',
            'addsDistrUser' => 'required|string|max:255',
            'addsCityUser' => 'required|string|max:255',
            'addsCoordinatesUser' => 'nullable|string|max:312',
            'makeAddressUserPrimary' => 'sometimes|accepted'
        ];
        $messagesReq = [
            'idDataAddress.string' => 'The Address ID must be a valid string.',
            
            'labelAddressUser.required' => 'Address label is required.',
            'labelAddressUser.string' => 'Address label must be a valid string.',
            'labelAddressUser.max' => 'Address label cannot exceed 255 characters.',
            
            'addsReceiverUser.required' => 'Receiver name is required.',
            'addsReceiverUser.string' => 'Receiver name must be a valid string.',
            'addsReceiverUser.max' => 'Receiver name cannot exceed 255 characters.',
            
            'addsReceiverTelpUser.required' => 'Receiver telephone number is required.',
            'addsReceiverTelpUser.string' => 'Receiver telephone number must be a valid string.',
            'addsReceiverTelpUser.max' => 'Receiver telephone number cannot exceed 255 characters.',
            
            'addsStreetUser.required' => 'Street address is required.',
            'addsStreetUser.string' => 'Street address must be a valid string.',
            'addsStreetUser.max' => 'Street address cannot exceed 255 characters.',
            
            'addsVillUser.string' => 'Village address must be a valid string.',
            'addsVillUser.max' => 'Village address cannot exceed 255 characters.',
            
            'addsSubdistrUser.required' => 'Subdistrict is required.',
            'addsSubdistrUser.string' => 'Subdistrict must be a valid string.',
            'addsSubdistrUser.max' => 'Subdistrict cannot exceed 255 characters.',
            
            'addsDistrUser.required' => 'District is required.',
            'addsDistrUser.string' => 'District must be a valid string.',
            'addsDistrUser.max' => 'District cannot exceed 255 characters.',
            
            'addsCityUser.required' => 'City is required.',
            'addsCityUser.string' => 'City must be a valid string.',
            'addsCityUser.max' => 'City cannot exceed 255 characters.',
            
            'addsCoordinatesUser.string' => 'Coordinates must be a valid string.',
            'addsCoordinatesUser.max' => 'City cannot exceed 312 characters.',
            
            'makeAddressUserPrimary.accepted' => 'The address must be set as primary or not.',
        ];
        $validator = Validator::make($dataReq, $rulesReq, $messagesReq);
        
        
        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }
        
        if (isset($request->idDataAddress)) {
            $this->editAddress($dataReq);
            return response()->json(['status' => 'success', 'message' => 'Address updated successfully.', 'value' => $request->labelAddressUser]);
        } else {
            $this->newAddress($dataReq);
            return response()->json(['status' => 'success', 'message' => 'Address created successfully.', 'value' => $request->labelAddressUser]);
        }
    }
    
    function newAddress($data) {
        $idUser = Auth::user()->idUser;
        $idAddress = '';
        
        $isIdUnique = false;
        while(!$isIdUnique) {
            $idAddress = Uuid::uuid6();
            if (!(UserAddress::where('idAddress', '=', $idAddress)->exists())) {
                $isIdUnique = true;
            }
        }
        
        $isPrimary = array_key_exists('makeAddressUserPrimary', $data);
        
        if ($isPrimary) {
            UserAddress::where('idUser', '=', $idUser)->update([
                "selected" => false
            ]);
        }
        
        $newAddress = UserAddress::create([
            "idAddress" => $idAddress,
            "idUser" => $idUser,
            "labelAddress" => $data['labelAddressUser'],
            "receiver" => $data['addsReceiverUser'],
            "receiver_telp" => $data['addsReceiverTelpUser'],
            "ad_street" => $data['addsStreetUser'],
            "ad_vill" => $data['addsVillUser'],
            "ad_subdistrc" => $data['addsSubdistrUser'],
            "ad_distrc" => $data['addsDistrUser'],
            "ad_city" => $data['addsCityUser'],
            "ad_coordinates" => $data['addsCoordinatesUser'],
            "selected" => $isPrimary
        ]);
        
        if ($newAddress) {
            return response()->json(['status' => 'success', 'message' => 'Address created successfully.', 'value' => $data['labelAddressUser']]);
        }
        return response()->json(['status' => 'error', 'message' => 'Failed something error.'], 500);
    }
    
    function editAddress($data) {
        $idUser = Auth::user()->idUser;
        $idDataAddress = isset($data['idDataAddress']) ? $data['idDataAddress'] : null;
        
        $isPrimary = array_key_exists('makeAddressUserPrimary', $data);
        if ($isPrimary) {
            UserAddress::where('idUser', '=', $idUser)->update([
                "selected" => false
            ]);
        }
        
        $editAddress = UserAddress::where('idAddress', '=', $data['idDataAddress'])->update([
            "idAddress" => $idDataAddress,
            "idUser" => $idUser,
            "labelAddress" => $data['labelAddressUser'],
            "receiver" => $data['addsReceiverUser'],
            "receiver_telp" => $data['addsReceiverTelpUser'],
            "ad_street" => $data['addsStreetUser'],
            "ad_vill" => $data['addsVillUser'],
            "ad_subdistrc" => $data['addsSubdistrUser'],
            "ad_distrc" => $data['addsDistrUser'],
            "ad_city" => $data['addsCityUser'],
            "ad_coordinates" => $data['addsCoordinatesUser'],
            "selected" => $isPrimary
        ]);
        
        if ($editAddress) {
            return response()->json(['status' => 'success', 'message' => 'Address updated successfully.', 'value' => $data['labelAddressUser']]);
        }
        return response()->json(['status' => 'error', 'message' => 'Failed something error.'], 500);
    }
}
