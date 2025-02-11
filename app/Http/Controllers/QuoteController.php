<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ZipCode;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Hamcrest\Core\IsNot;

class QuoteController extends Controller
{
    use ImageUploadTrait;

    public function store(Request $request)
    {
        // dd($request->toArray());
        $data = $request->all();
        if (isset($data['year']) && is_array($data['year'])) {
            $heading = $this->generateHeading($data);

            foreach ($data['year'] as $index => $count) {
                $vehicle_opt = implode('*^', array_fill(0, count($data['year']), $data['vehicle_opt']));
                $vehicles[] = [
                    'year' => $data['year'][$index],
                    'make' => $data['make'][$index],
                    'model' => $data['model'][$index],
                    'vehicle_opt' => $vehicle_opt
                ];
            }
        } else {
            $heading = '';
        }
        $name = $request->input('name', null);
        $email = $request->input('email', null);
        $phone = $request->input('phone', null);

        $vehicles = [];
        $vehicle_opt = '';

        $year = isset($data['year']) && is_array($data['year'])
            ? $this->generateStringFromArray($data['year'])
            : $request->input('year', null);

        $make = isset($data['make']) && is_array($data['make'])
            ? $this->generateStringFromArray($data['make'])
            : $request->input('make', null);

        $model = isset($data['model']) && is_array($data['model'])
            ? $this->generateStringFromArray($data['model'])
            : $request->input('model', null);

        $condition = isset($data['condition']) && is_array($data['condition'])
            ? $this->generateStringFromArray($data['condition'])
            : $request->input('condition', null);

        $length_ft = isset($data['length_ft']) && is_array($data['length_ft'])
            ? $this->generateStringFromArray($data['length_ft'])
            : $request->input('length_ft', null);

        $length_in = isset($data['length_in']) && is_array($data['length_in'])
            ? $this->generateStringFromArray($data['length_in'])
            : $request->input('length_in', null);

        $width_ft = isset($data['width_ft']) && is_array($data['width_ft'])
            ? $this->generateStringFromArray($data['width_ft'])
            : $request->input('width_ft', null);

        $width_in = isset($data['width_in']) && is_array($data['width_in'])
            ? $this->generateStringFromArray($data['width_in'])
            : $request->input('width_in', null);

        $height_ft = isset($data['height_ft']) && is_array($data['height_ft'])
            ? $this->generateStringFromArray($data['height_ft'])
            : $request->input('height_ft', null);

        $height_in = isset($data['height_in']) && is_array($data['height_in'])
            ? $this->generateStringFromArray($data['height_in'])
            : $request->input('height_in', null);

        $weight = isset($data['weight']) && is_array($data['weight'])
            ? $this->generateStringFromArray($data['weight'])
            : $request->input('weight', null);

        $load_method = isset($data['load_method']) && is_array($data['load_method'])
            ? $this->generateStringFromArray($data['load_method'])
            : $request->input('load_method', null);

        $unload_method = isset($data['unload_method']) && is_array($data['unload_method'])
            ? $this->generateStringFromArray($data['unload_method'])
            : $request->input('unload_method', null);

        $rv_type = isset($data['rv_type']) && is_array($data['rv_type'])
            ? $this->generateStringFromArray($data['rv_type'])
            : $request->input('rv_type', null);

        $category = isset($data['category']) && is_array($data['category'])
            ? $this->generateStringFromArray($data['category'])
            : $request->input('category', null);

        $subcategory = isset($data['subcategory']) && is_array($data['subcategory'])
            ? $this->generateStringFromArray($data['subcategory'])
            : $request->input('subcategory', null);

        // $transport = isset($data['trailer_type']) && is_array($data['trailer_type'])
        //     ? $this->generateStringFromArray($data['trailer_type'])
        //     : $request->input('trailer_type', null);
        // $year = $data['year'][0];
        // $make = $data['make'][0];
        // $model = $data['model'][0];
        $originData = $request->input('From_ZipCode') ?? $request->input('origin');
        $destinationData = $request->input('To_ZipCode') ?? $request->input('destination');
        // $originData = $request->input('From_ZipCode', null);
        // $originData = $request->input('origin', null);
        // $destinationData = $request->input('To_ZipCode', null);
        // $destinationData = $request->input('destination', null);
        $additional = $request->input('add_info', null);
        $transport = $request->input('trailer_type');
        $type = $request->input('trailer_type');
        $shippingdate = $request->input('dates', null);
        $link = $request->input('link', null);
        $modification = $request->input('modification', null);
        $modify_info = $request->input('modify_info', null);
        // $category = $request->input('category', null);
        $boat_on_trailer = $request->input('boat_on_trailer', null);
        // $length_ft = $request->input('length_ft', null);
        // $length_in = $request->input('length_in', null);
        // $width_ft = $request->input('width_ft', null);
        // $width_in = $request->input('width_in', null);
        // $height_ft = $request->input('height_ft', null);
        // // $height_in = $request->input('height_in', null);
        // $weight = $request->input('weight', null);
        // $subcategory = $request->input('subcategory', null);
        $load_type = $request->input('load_type', null);
        // $load_method = $request->input('load_method', null);
        // $unload_method = $request->input('unload_method', null);
        $available_at_auction = $request->input('available_at_auction', null);
        $commodity_detail = $request->input('commodity_detail', null);
        $handling_unit = $request->input('handling_unit', null);
        $commodity_unit = $request->input('commodity_unit', null);
        if ($request->has('trailer_specification') && is_array($request->trailer_specification)) {
            $trailer_specification = implode(',', $request->trailer_specification);
        } else {
            $trailer_specification = $request->input('trailer_specification', null);
        }
        if ($request->has('equipment_type') && is_array($request->equipment_type)) {
            $equipment_type = implode(',', $request->equipment_type);
        } else {
            $equipment_type = $request->input('equipment_type', null);
        }
        $stackable = $request->input('stackable', 0);
        $hazardous = $request->input('hazardous', 0);
        $pick_up_services = $request->input('pick_up_services', null);
        $deliver_services = $request->input('deliver_services', null);
        $ex_pickup_date = $request->input('ex_pickup_date', null);
        $ex_pickup_time = $request->input('ex_pickup_time', null);
        $ex_delivery_date = $request->input('ex_delivery_date', null);
        $ex_delivery_time = $request->input('ex_delivery_time', null);
        $protect_from_freezing = $request->input('protect_from_freezing', 0);
        $sort_segregate = $request->input('sort_segregate', 0);
        $blind_shipment = $request->input('blind_shipment', 0);
        $vehicle_opt = $vehicle_opt;
        $frieght_class = $request->input('frieght_class', null);
        // $rv_type = $request->input('rv_type', null);
        $roro = $request->input('roro', null);
        $heavy_type = $request->input('heavy_type', null);
        $car_type = $request->input('car_type', 1);
        $need_permit = $request->input('need_permit', 0);
        $ip = $request->ip();
        $source = 'ShipA1';
        $price_giver_allow = 1;

        $originValues = explode(',', $originData);
        $origin_zip = isset($originValues[2]) ? trim($originValues[2]) : null;
        $origin_city = isset($originValues[0]) ? trim($originValues[0]) : null;
        $origin_state = isset($originValues[1]) ? trim($originValues[1]) : null;

        if ($roro == null) {
            $destinationValues = explode(',', $destinationData);
            $destination_zip = isset($destinationValues[2]) ? trim($destinationValues[2]) : null;
            $destination_city = isset($destinationValues[0]) ? trim($destinationValues[0]) : null;
            $destination_state = isset($destinationValues[1]) ? trim($destinationValues[1]) : null;
        } else {
            $destination_zip = $request->input('From_ZipCode', null);
            $destination_city = $request->input('To_City', null);
            $destination_state = $request->input('To_Country', null);
        }

        $client = new Client();
        try {
            $response = $client->get("http://ipinfo.io/{$ip}/json");
            $ip_details = json_decode($response->getBody());
            $ipcity = $ip_details ? $ip_details->city : null;
            $ipregion = $ip_details ? $ip_details->region : null;
            $ipcountry = $ip_details ? $ip_details->country : null;
            $iploc = $ip_details ? $ip_details->loc : null;
            $ippostal = $ip_details ? $ip_details->postal : null;
        } catch (\Exception $e) {
            $ipcity = null;
            $ipregion = null;
            $ipcountry = null;
            $iploc = null;
            $ippostal = null;
        }

        if (is_null($roro)) {
            $delivery_latitude = $originData;
            $delivery_longitude = $destinationData;

            $distance = $this->getDistance($origin_zip, $destination_zip);
        } else {
            $destinationData = $request->To_Country . ',' . $request->To_City . ',' . $request->To_ZipCode;
        }

        $post_array = [
            'appkey' => '0EO9KCH9NNI46HH60WOL5OW4TE0GCD6Y',
            'domain' => 'https://shawntransport.com',
            'product_url' => 'https://shipa1.com',
            'oname' => $name,
            'oemail' => $email,
            'ophone' => $phone,
            'ymk' => $heading,
            'vehicles' => $vehicles,
            'condition' => $condition,
            'originzsc' => $originData,
            'destinationzsc' => $destinationData,
            'add_info' => $additional,
            'transport' => $transport,
            'shippingdate' => $shippingdate,
            'car_type' => $car_type,
            'paneltype' => 2,
            'cname' => $name,
            'cemail' => $email,
            'main_ph' => $phone,
            'ip' => $ip,
            'ipcity' => $ipcity,
            'ipregion' => $ipregion,
            'ipcountry' => $ipcountry,
            'iploc' => $iploc,
            'ippostal' => $ippostal,
            'link' => $link,
            'modification' => $modification,
            'modify_info' => $modify_info,
            'category' => $category,
            'boat_on_trailer' => $boat_on_trailer,
            'length_ft' => $length_ft,
            'length_in' => $length_in,
            'width_ft' => $width_ft,
            'width_in' => $width_in,
            'height_ft' => $height_ft,
            'height_in' => $height_in,
            'weight' => $weight,
            'subcategory' => $subcategory,
            'load_type' => $load_type,
            'load_method' => $load_method,
            'unload_method' => $unload_method,
            'available_at_auction' => $available_at_auction,
            'commodity_detail' => $commodity_detail,
            'handling_unit' => $handling_unit,
            'commodity_unit' => $commodity_unit,
            'trailer_specification' => $trailer_specification,
            'equipment_type' => $equipment_type,
            'stackable' => $stackable,
            'hazardous' => $hazardous,
            'pick_up_services' => $pick_up_services,
            'deliver_services' => $deliver_services,
            'ex_pickup_date' => $ex_pickup_date,
            'ex_pickup_time' => $ex_pickup_time,
            'ex_delivery_date' => $ex_delivery_date,
            'ex_delivery_time' => $ex_delivery_time,
            'protect_from_freezing' => $protect_from_freezing,
            'sort_segregate' => $sort_segregate,
            'blind_shipment' => $blind_shipment,
            'vehicle_opt' => $vehicle_opt,
            'originzip' => $origin_zip,
            'originstate' => $origin_state,
            'origincity' => $origin_city,
            'destinationzip' => $destination_zip,
            'destinationstate' => $destination_state,
            'destinationcity' => $destination_city,
            'year' => $year,
            'make' => $make,
            'model' => $model,
            'frieght_class' => $frieght_class,
            'rv_type' => $rv_type,
            'type' => $type,
            'source' => 'Shawn Transport',
            'roro' => $roro,
            'heavy_type' => $heavy_type,
            'price_giver_allow' => $price_giver_allow,
            'need_permit' => $need_permit,
        ];

        if ($request->hasFile('image')) {
            $uploadedImages = $request->file('image');
            $imageUrls = [];

            foreach ($uploadedImages as $image) {
                $imagePath = $this->uploadImage('quoteForm', $image);
                $imageUrl = 'https://shipa1.com/public/' . $imagePath;
                $imageUrls[] = $imageUrl;
            }

            $post_array['image'] = implode('*^', $imageUrls);
        }

        // dd($post_array, $request->toArray());

        // $data = PortDetail::with(['portToPort' => function ($q) use ($delivery_latitude, $delivery_longitude) {
        //     $q->where('delivery_latitude', $delivery_latitude)
        //       ->where('delivery_longitude', $delivery_longitude);
        // }])
        // ->where('country', 'United States')
        // ->where('delivery_address', 'Grimaldi Group Shipping Line')
        // ->where('latitude', '28.9541')
        // ->where('longitude', '-95.3597')
        // ->first();

        // $price = isset($data->portToPort[0]->price) ? $data->portToPort[0]->price : 0;

        // dd($data->toArray(), $price);

        try {
            $response = Http::post('https://washington.shawntransport.com/api/v2/website-quote', $post_array)->json();
            // dd($response);
            if (isset($response['status_code']) && $response['status_code'] == 201) {
                return view('frontend.pages.thank-you');
            } else {
                return back()->with('error', 'An error occurred while creating the quote. Please try again later.');
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
            // \Log::error($e->getMessage());

            return back()->with('error', 'An error occurred while creating the quote. Please try again later.');
        }
    }

    private function generateHeading($data)
    {
        $heading = '';
        foreach ($data['year'] as $index => $count) {
            if (isset($data['year'][$index]) && isset($data['make'][$index]) && isset($data['model'][$index])) {
                $heading .= $data['year'][$index] . ' ' . $data['make'][$index] . ' ' . $data['model'][$index] . '*^';
            }
        }
        return rtrim($heading, '*^');
    }

    private function generateStringFromArray($array)
    {
        return count($array) > 1 ? implode('*^', $array) : $array[0];
    }

    public static function getDistance($OriginZipCode, $DestinationZipCode): float
    {
        $From = ZipCode::where('zipcode', $OriginZipCode)
            ->whereNotNull('latitude')
            ->first();

        $To = ZipCode::where('zipcode', $DestinationZipCode)
            ->whereNotNull('latitude')
            ->first();

        $latitudeFrom = $From->latitude;
        $longitudeFrom = $From->longitude;
        $latitudeTo = $To->latitude;
        $longitudeTo = $To->longitude;

        $long1 = deg2rad($longitudeFrom);
        $long2 = deg2rad($longitudeTo);
        $lat1 = deg2rad($latitudeFrom);
        $lat2 = deg2rad($latitudeTo);

        $dlong = $long2 - $long1;
        $dlati = $lat2 - $lat1;

        $val =
            (sin($dlati / 2) ** 2) +
            cos($lat1) * cos($lat2) * (sin($dlong / 2) ** 2);

        $res = 2 * asin(sqrt($val));

        $radius = 3958.756;
        return $res * $radius;
    }
}
