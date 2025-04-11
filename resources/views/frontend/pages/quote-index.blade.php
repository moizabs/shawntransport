@extends('frontend.layouts.app')
<style>
    .btn-primary {
    position: relative;
    border: 2px solid transparent;
    overflow: hidden;
    background: linear-gradient(270deg, #2bdadc, #0067f4); /* Static background */
    background-size: 200% 200%;
    transition: all 0.3s ease-in-out;
    }
    
    /* Moving Border (Only on Hover) */
    .btn-primary::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 2px solid transparent;
        box-sizing: border-box;
        opacity: 0; /* Hidden by default */
    }
    
    .btn-primary:hover::before {
        opacity: 1;
        animation: move-border 2s linear infinite;
    }
    
    @keyframes move-border {
        0% {
            clip-path: inset(0 100% 98% 0); /* Top border */
            border-color: #fff;
        }
        25% {
            clip-path: inset(0 0 0 98%); /* Right border */
            border-color: #fff;
        }
        50% {
            clip-path: inset(98% 0 0 0); /* Bottom border */
            border-color: #fff;
        }
        75% {
            clip-path: inset(0 98% 0 0); /* Left border */
            border-color: #fff;
        }
        100% {
            clip-path: inset(0 100% 98% 0); /* Back to top */
            border-color: #fff;
        }
    }
    
    /* Waving Background Effect (Only on Hover) */
    .btn-primary:hover {
        animation: wave-bg 2s infinite alternate ease-in-out;
    }
    
    @keyframes wave-bg {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }

</style>
@section('content')
<section class="banner relative" style="max-height:10rem; min-height:10rem; ">

</section>
<main class="main">
    <section class="section2 grid grid-col90 vertical__padding relative">
        <div class="block__inner">
            <div class="servicesm">
                <h2>Pick Your Transport Type</h2>
                <ul class="list services grid grid_3">
                    <li class="services__item">
                        <img src="{{ asset('webImages/car.png') }}" alt="">
                        <h3>CAR</h3>
                        <p>Sedan, SUV, Pickup etc.</p>
                        <a href="{{ route('car') }}" class="btn btn-primary">GET QUOTE</a>
                    </li>
                    <li class="services__item">
                        <img src="{{ asset('webImages/motorcycle.png') }}" alt="">
                        <h3>MOTORCYCLE</h3>
                        <p>Mopeds, ATV, Power Sports etc.</p>
                        <a href="{{ route('motorcycle') }}" class="btn btn-primary">GET QUOTE</a>
                    </li>
                </ul>
                <ul class="list services grid grid_3">
                    <li class="services__item">
                        <img src="{{ asset('webImages/heavy.png') }}" alt="">
                        <h3>HEAVY EQUIP.</h3>
                        <p>Trucks, Bulldozers, Mixer etc.</p>
                        <a href="{{ route('heavy') }}" class="btn btn-primary">GET QUOTE</a>
                    </li>
                    <li class="services__item">
                        <img src="{{ asset('webImages/roro.png') }}" alt="">
                        <h3>RORO</h3>
                        <p>Cars, Trucks, trailers etc.</p>
                        <a href="{{ route('roro.shipping.international') }}" class="btn btn-primary">GET QUOTE</a>
                    </li>
                    <li class="services__item">
                        <img src="{{ asset('webImages/atv.png') }}" alt="">
                        <h3>ATV/UTV</h3>
                        <p>Sport, Quads, Military etc.</p>
                        <a href="{{ route('atvutv-quote') }}" class="btn btn-primary">GET QUOTE</a>

                    </li>
                </ul>
                <ul class="list services grid grid_4">
                    <li class="services__item">
                        <img src="{{ asset('webImages/construction.png') }}" alt="">
                        <h3>CONSTRUCTION</h3>
                        <p>Cranes, Drills, Grinders etc.</p>
                        <a href="{{ route('construction') }}" class="btn btn-primary">GET QUOTE</a>
                    </li>
                    <li class="services__item">
                        <img src="{{ asset('webImages/farm.png') }}" alt="">
                        <h3>FARM</h3>
                        <p>Tractor, Planter, Baler etc.</p>
                        <a href="{{ route('farm') }}" class="btn btn-primary">GET QUOTE</a>
                    </li>
                    <li class="services__item">
                        <img src="{{ asset('webImages/excavator.png') }}" alt="">
                        <h3>EXCAVATOR</h3>
                        <p>Digger, Driller, Miners etc.</p>
                        <a href="{{ route('excavator') }}" class="btn btn-primary">GET QUOTE</a>
                    </li>
                    <li class="services__item">
                        <img src="{{ asset('webImages/truck.png') }}" alt="">
                        <h3>TRUCKS</h3>
                        <p>Commercial, Dump Trucks etc.</p>
                        <a href="{{ route('commercial') }}" class="btn btn-primary">GET QUOTE</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>
@endsection