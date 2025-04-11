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

    public function atvutv()
    {
        return view('frontend.pages.atvutv-quote');
    }
    public function farm()
    {
        return view('frontend.pages.farm');
    }
    public function excavator()
    {
        return view('frontend.pages.excavator');
    }
    public function commercial()
    {
        return view('frontend.pages.commercial');
    }
    public function construction()
    {
        return view('frontend.pages.construction');
    }
    public function atvUtvSer()
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
    public function aboutUs()
    {
        return view('frontend.pages.aboutUs');
    }
    
    public function contactUs()
    {
        return view('frontend.pages.contactUs');
    }

    public function carShippingService()
    {
        return view('frontend.pages.car-shipping-service');
    }
        public function quoteIndex()
    {
        return view('frontend.pages.quote-index');
    }

    public function commercialTruckTransport()
    {
        return view('frontend.pages.commercial-truck-transport');
    }
        public function trackOrder()
    {
        return view('frontend.pages.trackorder');
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
    
    public function termsCondition()
    {
        return view('frontend.pages.term-condition');
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

    public function privacyPolicy()
    {
        return view('frontend.pages.privacy-policy');
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