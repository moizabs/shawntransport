 @extends('frontend.layouts.app')

@section('content')
    <section class="banner relative" style="display: flex;max-height:30rem;min-height:30rem; background-size: cover;justify-content: center;align-items: center;text-wrap-mode: nowrap;
        background: url('webImages/banners/2.jpg')no-repeat center center;">
        <ul class="list">
            <li>
                <div class="banner__Txt">
                    <h1>About Shawn Transport</h1>

                </div>
            </li>
        </ul>
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
        <section class="section3 grid grid-col90 OurTeam3">
            <div class="block__inner">
                <div class="headingCenter">
                    <h2>Our Services</h2>
                    <p>Stop wasting time and money for unknown companies that doesn’t get results. Happiness guaranteed!
                    </p>
                    <br>
                </div>
                <div class="media">
                    <div class="media__img">
                        <img src="{{ asset('webImages/services/car.jpeg') }}" alt="">
                    </div>
                    <div class="media__body">
                        <h2>Car Transport Service</h2>
                        <p>Enjoy easeful and relaxed long-distance car shipping with our custom transport solutions.
                            Open, enclosed, and fast shipping. Shawn Transport’s dominance values quality,
                            affordability, and safety. Get an online quote and the comfort of knowing your vehicle is
                            safe, no matter the season or wherever you are going.</p>
                        <a href="{{ route('car.shipping.service') }}" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>
                <div class="media">
                    <div class="media__img">
                        <img src="{{ asset('webImages/services/moto.jpeg') }}" alt="">
                    </div>
                    <div class="media__body">
                        <h2>Motorcycle Shipping</h2>
                        <p>Motorcycle shipping with Shawn Transport is an easy and timely experience. Updated technology
                            and a team of expert carriers at your service. Select open or enclosed with live tracking.
                            Instant shipping price calculation, using your bike details on the internet. Need help? Our
                            helpful freight brokers are there for your queries all the time.</p>
                        <a href="{{ route('motorcycle.shipping.service') }}" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>
                <div class="media">
                    <div class="media__img">
                        <img src="{{ asset('webImages/services/atv.jpg') }}" alt="">
                    </div>
                    <div class="media__body">
                        <h2>ATV/UTV Transport</h2>
                        <p>Safely transport your ATV/UTV with specially designed trailers and professional maneuvering.
                            We ship at a flat rate, without hiccups with 100% nationwide reviews. Wash your ATV, check
                            for scratches, and report mechanical condition before shipping to make it safe to transport.
                            Shawn Transport is here for you to have an on-time, safe delivery.</p>
                        <a href="{{ route('atv.utv') }}" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>
                <div class="media">
                    <div class="media__img">
                        <img src="{{ asset('webImages/services/Transporting-Heavy-Equipment.jpg') }}" alt="">
                    </div>
                    <div class="media__body">
                        <h2>Construction Equipment</h2>
                        <p>Transport construction machinery with professional trailers and experienced operators. Good
                            weight and dimensions decide your best shipping company. We have the best technology for
                            reliable and affordable transportation. Get the best price and a top-notch service where you
                            can be sure your equipment will arrive safely and on time. Shawn Transport is your spot!</p>
                        <a href="{{ route('construction.equipment.transport.shipping') }}" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>
                <div class="media">
                    <div class="media__img">
                        <img src="{{ asset('webImages/services/farm-transportation.png') }}" alt="">
                    </div>
                    <div class="media__body">
                        <h2>Farm Transport</h2>
                        <p>Need farm equipment transport for oversized heavy machines? Shawn Transport got you covered
                            at highly competitive rates. Our expert drivers get your cargo delivered safely and on time.
                            Verify your equipment with precise details. You can get a quote via the web, and our agents
                            will take care of the whole process.</p>
                        <a href="{{ route('farm.transport.services') }}" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>
                <div class="media">
                    <div class="media__img">
                        <img src="{{ asset('webImages/services/excavator-shipping-1.jpg') }}" alt="">
                    </div>
                    <div class="media__body">
                        <h2>Excavator Shipping</h2>
                        <p>The on-road journeys of these excavators require expert handling. Open carrier transport is
                            trustworthy, with no problem dealing with large sizes and weights. Our 24/7 active agents
                            can also get you cost estimates. Look to Shawn Transport for personalized and efficient
                            service with competitive rates. Contact us anytime for shipping consulting assistance or
                            quotes.</p>
                        <a href="{{ route('excavator.shipping.services') }}" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>
                <div class="media">
                    <div class="media__img">
                        <img src="{{ asset('webImages/services/Commercial.jpg') }}" alt="">
                    </div>
                    <div class="media__body">
                        <h2>Commercial Truck Transport</h2>
                        <p>No doubt our commercial truck transport is quick, safe, and trusted throughout the US. Get
                            instant quotes using our shipping calculator. We've partnered with trusted carriers for
                            lightning and stress-free delivery. Costs depend on the distance, weight, and shipping
                            season. Let Shawn Transport offer you the best offers in each freight season.</p>
                        <a href="{{ route('commercial.truck.transport') }}" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>
                <div class="media">
                    <div class="media__img">
                        <img src="{{ asset('webImages/services/Equipment-Hauling-scaled.jpeg') }}" alt="">
                    </div>
                    <div class="media__body">
                        <h2>Heavy Equipment Transport</h2>
                        <p>Transport your heavy equipment safely through specialized carriers like flatbeds. Cheap rates
                            and expert assistance await you. Accurate automated support brings you accurate quotes. Our
                            qualified staff guarantees your on-time, shipment, and high-tech security anywhere in the
                            nation.
                            Let us handle your shipping needs with professional care.</p>
                        <a href="{{ route('heavy.equipment.shipping.services') }}" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section5 grid grid_2">
            <div class="section5__left">
                <img src="{{ asset('webImages/1.jpg') }}" alt="">
            </div>
            <div class="section5__right">
                <h3>Wanna Get Up-To-Date with Us?</h3>
                <p>Subscribe Shawn Transport to receive worthy notifications and give us feedback to help usenhance our
                    services more.</p>
                <form action="#" method="post">
                    <div class="call-newsletter">
                        <i class="fa fas fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="Your Email" required="">
                        <button type="submit">SUBSCRIBE</button>
                    </div>
                </form>
            </div>
        </section>
        <section class="section4 section2 grid grid-col90" id="about">
            <div class="block__inner">
                <div class="">
                    <h2 style="margin-bottom: 0;">Why Trust Shawn Transport?</h2>
                    <p>We are unique in our professionalism, commitment, and quality transport services, fulfilling all
                        your requirements.</p>
                    <br>
                </div>
                <ul class="list services grid grid_4">
                    <li class="services__item">
                        <h3>Our Values</h3>
                        <p>We are a licensed auto transport company with high moral values and have attained customer
                            satisfaction through their remarks on esteemed platforms.</p>
                    </li>
                    <li class="services__item">
                        <h3>Scope of Services</h3>
                        <p>Range of vehicles, we ship, is not limited to just conventional cars and motorbikes.</p>
                    </li>
                    <li class="services__item">
                        <h3>Safety Is Our Priority</h3>
                        <p>No matter which mode of transportation you use, shawntransport assures its customers,
                            utmostsecurity to their assets.</p>
                    </li>
                    <li class="services__item">
                        <h3>Skilful & Devoted Staff</h3>
                        <p>Our team is loaded with highly experienced professionals of both customer dealing andvehicle
                            handling.</p>
                    </li>
                </ul>
            </div>
        </section>
    </main>
@endsection