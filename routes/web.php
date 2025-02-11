<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.home');
// });



Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/car', [FrontendController::class, 'car'])->name('car');
Route::get('/atv-utv', [FrontendController::class, 'atvUtv'])->name('atv.utv');
Route::get('/auctions-car-transport', [FrontendController::class, 'auctionsCarTransport'])->name('auctions.car.transport');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/car-shipping-service', [FrontendController::class, 'carShippingService'])->name('car.shipping.service');
Route::get('/commercial-truck-transport', [FrontendController::class, 'commercialTruckTransport'])->name('commercial.truck.transport');
Route::get('/construction-equipment-transport-shipping', [FrontendController::class, 'constructionEquipmentTransportShipping'])->name('construction.equipment.transport.shipping');
Route::get('/excavator-shipping-services', [FrontendController::class, 'excavatorShippingServices'])->name('excavator.shipping.services');
Route::get('/farm-transport-services', [FrontendController::class, 'farmTransportServices'])->name('farm.transport.services');
Route::get('/heavy-equipment-shipping-services', [FrontendController::class, 'heavyEquipmentShippingServices'])->name('heavy.equipment.shipping.services');
Route::get('/heavy', [FrontendController::class, 'heavy'])->name('heavy');
Route::get('/motorcycle-shipping-service', [FrontendController::class, 'motorcycleShippingService'])->name('motorcycle.shipping.service');
Route::get('/motorcycle', [FrontendController::class, 'motorcycle'])->name('motorcycle');
Route::get('/pricing', [FrontendController::class, 'pricing'])->name('pricing');
Route::get('/roro-shipping-international', [FrontendController::class, 'roroShippingInternational'])->name('roro.shipping.international');
Route::get('/services', [FrontendController::class, 'services'])->name('services');


Route::post('/submit/quote', [QuoteController::class, 'store'])->name('submit.quote');
Route::get('/get-models', [MainController::class, 'getmodel'])->name('get.models');
// get models on basis of year n make
Route::post('/get-zipcodes', [MainController::class, 'get_zip'])->name('get.zipcodes');