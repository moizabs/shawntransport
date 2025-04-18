<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TrackOrderController;

Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/car', [FrontendController::class, 'car'])->name('car');
Route::get('/atv-utv', [FrontendController::class, 'atvUtv'])->name('atvutv-quote');
Route::get('/atv-utv-transport-services', [FrontendController::class, 'atvUtvSer'])->name('atv.utv');
Route::get('/auctions-car-transport', [FrontendController::class, 'auctionsCarTransport'])->name('auctions.car.transport');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('contactUs');
Route::get('/order-tracking', [FrontendController::class, 'trackOrder'])->name('track.order');
Route::get('/car-shipping-service', [FrontendController::class, 'carShippingService'])->name('car.shipping.service');
Route::get('/commercial-truck-transport', [FrontendController::class, 'commercialTruckTransport'])->name('commercial.truck.transport');
Route::get('/terms-&-conditions', [FrontendController::class, 'termsCondition'])->name('frontend.pages.term-condition');
Route::get('/construction-equipment-transport-shipping', [FrontendController::class, 'constructionEquipmentTransportShipping'])->name('construction.equipment.transport.shipping');
Route::get('/excavator-shipping-services', [FrontendController::class, 'excavatorShippingServices'])->name('excavator.shipping.services');
Route::get('/farm-transport-services', [FrontendController::class, 'farmTransportServices'])->name('farm.transport.services');
Route::get('/get-quote', [FrontendController::class, 'quoteIndex'])->name('quote.index');
Route::get('/heavy-equipment-shipping-services', [FrontendController::class, 'heavyEquipmentShippingServices'])->name('heavy.equipment.shipping.services');
Route::get('/heavy', [FrontendController::class, 'heavy'])->name('heavy');
Route::get('/farm', [FrontendController::class, 'farm'])->name('farm');
Route::get('/excavator', [FrontendController::class, 'excavator'])->name('excavator');
Route::get('/commercial', [FrontendController::class, 'commercial'])->name('commercial');
Route::get('/construction', [FrontendController::class, 'construction'])->name('construction');
Route::get('/motorcycle-shipping-service', [FrontendController::class, 'motorcycleShippingService'])->name('motorcycle.shipping.service');
Route::get('/motorcycle', [FrontendController::class, 'motorcycle'])->name('motorcycle');
Route::get('/pricing', [FrontendController::class, 'pricing'])->name('pricing');
Route::get('/roro-shipping-international', [FrontendController::class, 'roroShippingInternational'])->name('roro.shipping.international');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::post('/submit/quote', [QuoteController::class, 'store'])->name('submit.quote');
Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('frontend.pages.privacy-policy');
Route::get('/get-models', [MainController::class, 'getmodel'])->name('get.models');
Route::post('/get-zipcodes', [MainController::class, 'get_zip'])->name('get.zipcodes');
Route::post('/track-order', [TrackOrderController::class, 'trackOrder'])->name('track.order.status');