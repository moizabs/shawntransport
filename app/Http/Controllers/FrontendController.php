<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function car()
    {
        return view('frontend.pages.car');
    }

    public function atvUtv()
    {
        return view('frontend.pages.atv-utv-transport');
    }

    public function auctionsCarTransport()
    {
        return view('frontend.pages.auctions-car-transport');
    }

    public function blog()
    {
        return view('frontend.pages.blog');
    }

    public function carShippingService()
    {
        return view('frontend.pages.car-shipping-service');
    }

    public function commercialTruckTransport()
    {
        return view('frontend.pages.commercial-truck-transport');
    }

    public function constructionEquipmentTransportShipping()
    {
        return view('frontend.pages.construction-equipment-transport-shipping');
    }

    public function excavatorShippingServices()
    {
        return view('frontend.pages.excavator-shipping-services');
    }

    public function farmTransportServices()
    {
        return view('frontend.pages.farm-transport-services');
    }

    public function heavyEquipmentShippingServices()
    {
        return view('frontend.pages.heavy-equipment-shipping-services');
    }

    public function heavy()
    {
        return view('frontend.pages.heavy');
    }

    public function motorcycleShippingService()
    {
        return view('frontend.pages.motorcycle-shipping-service');
    }

    public function motorcycle()
    {
        return view('frontend.pages.motorcycle');
    }

    public function pricing()
    {
        return view('frontend.pages.pricing');
    }

    public function roroShippingInternational()
    {
        return view('frontend.pages.roro-shipping-international');
    }

    public function services()
    {
        return view('frontend.pages.services');
    }
}
