<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\VehicleName;
use App\Models\ZipCode;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Country;
use Illuminate\Support\Facades\Route;

class TrackOrderController extends Controller
{
    public function trackOrder(Request $request)
    {
        $id = $request->order_num;
        $apiUrl = 'https://washington.shawntransport.com/api/tracking-order';
    
        try {
            $response = Http::post($apiUrl, ['id' => $id]);
    
            // Check if the API request was successful
            if (!$response->successful()) {
                Log::error('API Request Failed', ['status' => $response->status(), 'body' => $response->body()]);
                return response()->json(['status_code' => $response->status(), 'message' => 'Request failed'], 500);
            }
    
            $responseData = $response->json();
            // dd($responseData['status_code'], $response->json(), $responseData);
    
            if ($responseData['status_code'] == 200) {
                if (!empty($request->modal)) {
                    return view('partials.orderTrackingTableModal', compact('responseData'));
                }
                return view('frontend.partials.orderTrackingTable', compact('responseData'));
            } 
    
            return $responseData;
        } catch (\Exception $e) {
            Log::error('Track Order Exception', ['error' => $e->getMessage()]);
            return response()->json(['status_code' => 500, 'message' => 'Internal Server Error'], 500);
        }
    }
}
