@extends('frontend.layouts.app')

@section('content')
    <section class="banner relative"
        style="background: url('{{ asset('webImages/banners/2.jpg') }}'); background-size: cover;">
        <ul class="list">
            <li class="flex_ flex_space" style="align-items: flex-start;">
                <div class="banner__Txt">
                    <h2>
                        Shawn Transport - Your Trusted &amp; Safest Auto Transportation
                    </h2>
                    <p>Welcome to Shawn Transport, the all-in-one spot of affordable, reliable, and safe transport
                        services.
                        Speedy shipping at hand!</p>

                </div>
                <div class="banner__right">
                    <div class="quotemain__box">
                        <h3>Get Car Quotes <span>- simple, fast &amp; easy!</span></h3>
                        <div class="for-car" id="forCAR">
                            <form action="{{ route('submit.quote') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="vehicle_opt" value="vehicle" hidden>
                                <input type="hidden" name="car_type" value="1" hidden>
                                <div class="grid grid_3">
                                    <div class="input_box">
                                        <label>Full Name</label>
                                        <div class="input_">
                                            <input class="effect-8" requ="" id="name" type="text"
                                                name="name" required="" aria-required="true">
                                            <span class="focus-border">
                                                <i></i>
                                            </span>
                                        </div>
                                        <small class="errName"
                                            style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                    </div>
                                    <div class="input_box">
                                        <label>Phone#</label>
                                        <div class="input_">
                                            <input class="effect-8 phone-num" requ="" id="phone" type="tel"
                                                name="phone" maxlength="14" mask="(999) 999-9999"
                                                placeholder="xxx-xxx-xxxx" required="" aria-required="true">
                                            <span class="focus-border">
                                                <i></i>
                                            </span>
                                        </div>
                                        <small class="errPhone"
                                            style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                    </div>
                                    <div class="input_box">
                                        <label>Email</label>
                                        <div class="input_">
                                            <input class="effect-8" id="email" type="email" name="email"
                                                required="" aria-required="true">
                                            <span class="focus-border">
                                                <i></i>
                                            </span>
                                        </div>
                                        <small class="errEmail"
                                            style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                    </div>

                                    <!-- <script>
                                        document.getElementById('email').addEventListener('blur', function() {
                                            const emailInput = this.value;
                                            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; // Basic email pattern
                                            const errorMessageElement = document.querySelector('.errEmail');

                                            if (!emailPattern.test(emailInput)) {
                                                errorMessageElement.textContent = "Please enter a valid email address.";
                                                $("#calculatePriceBttn").attr('disabled', true);
                                            } else {
                                                $("#calculatePriceBttn").attr('disabled', false);
                                                errorMessageElement.textContent = ""; // Clear error if valid
                                            }
                                        });

                                        document.getElementById('email').addEventListener('keydown', function(event) {
                                            if (event.key === 'Enter') {
                                                this.blur(); // Trigger blur on Enter key press
                                            }
                                        });
                                    </script> -->
                                </div>
                                <hr>
                                <div class="">
                                    {{-- <script type="text/javascript"
                                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDS8r7ZgkAHXuIJKgaYhhF4WccgswI-1F8&amp;v=3.exp&amp;libraries=places">
                                    </script>

                                    <script type="text/javascript">
                                        function initialize() {
                                            var input = document.getElementById("pick_up");
                                            var input2 = document.getElementById("pick_up_off");
                                            var autocomplete = new google.maps.places.Autocomplete(input);
                                            var autocomplete2 = new google.maps.places.Autocomplete(input2);
                                            autocomplete.addListener("place_changed", function() {
                                                var place = autocomplete.getPlace();

                                            });
                                            autocomplete2.addListener("place_changed", function() {
                                                var place = autocomplete.getPlace();

                                            });
                                        }
                                        google.maps.event.addDomListener(window, "load", initialize);
                                    </script> --}}
                                    <div class="input_box">
                                        <label>Pickup Location</label>
                                        {{-- <div class="input_">
                                            <input class="effect-8" requ="" type="text" id="pick_up"
                                                name="origin" autocomplete="off" placeholder="Ex: 90005 Or Los Angeles"
                                                required="" aria-required="true">
                                            <span class="focus-border">
                                                <i></i>
                                            </span>
                                        </div> --}}
                                        <div class="input-form">
                                            <label class="d-block"> Pickup Location:</label>
                                            <input type="text" class="effect-8" id="pickup-location" name="origin"
                                                placeholder="Ex: 90005 Or Los Angeles" required="" />
                                            <small id="errOLoc" class="err-loc"></small>
                                            <ul class="suggestions suggestionsTwo"></ul>
                                        </div>
                                        <small class="errName"
                                            style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                    </div>
                                </div>
                                <div class="input_box">
                                    <label>Delivery Location</label>
                                    {{-- <div class="input_">
                                        <input class="effect-8 pac-target-input" required="" type="text"
                                            id="pick_up_off" name="destination" autocomplete="off"
                                            placeholder="Ex: 90005 Or Los Angeles" aria-required="true">
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div> --}}
                                    <div class="input-form">
                                        <label class="d-block"> Delivery Location:</label>
                                        <input type="text" class="effect-8" id="delivery-location" name="destination"
                                            placeholder="Ex: 90005 Or Los Angeles" required="" />
                                        <small id="errDLoc" class="err-loc"></small>
                                        <ul class="suggestions suggestionsTwo"></ul>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                                <div class="">
                                    <b>Vehicle Information</b>
                                    <br>
                                </div>
                                <div class="grid grid_3">
                                    <div class="input_box">
                                        <label>Year</label>
                                        <div class="input_">
                                            <select class="effect-8 vehicle-year" required="" name="year[]"
                                                id="year" aria-required="true">
                                                <option value="" selected="" disabled="">Year</option>
                                            </select>

                                            <script>
                                                const currentYear = new Date().getFullYear();
                                                const startYear = 1936;
                                                const yearSelect = document.getElementById('year');

                                                for (let year = currentYear; year >= startYear; year--) {
                                                    const option = document.createElement('option');
                                                    option.value = year;
                                                    option.textContent = year;
                                                    yearSelect.appendChild(option);
                                                }
                                            </script>
                                            <span class="focus-border">
                                                <i></i>
                                            </span>
                                        </div>
                                        <small class="errName"
                                            style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                    </div>
                                    <div class="input_box">
                                        <label>Make</label>
                                        <div class="input_">
                                            <select class="effect-8 vehicle-make" requ="" name="make[]"
                                                data-placeholder="Make" aria-hidden="true">
                                                <option value="0" selected="" disabled=""
                                                    data-select2-id="4">
                                                    Make</option>
                                                <option value="Acura">Acura</option>
                                                <option value="Alfa Romeo">Alfa Romeo</option>
                                                <option value="Aptera">Aptera</option>
                                                <option value="Aston Martin">Aston Martin</option>
                                                <option value="Audi">Audi</option>
                                                <option value="Austin">Austin</option>
                                                <option value="Bentley">Bentley</option>
                                                <option value="BMW">BMW</option>
                                                <option value="Bugatti">Bugatti</option>
                                                <option value="Buick">Buick</option>
                                                <option value="Cadillac">Cadillac</option>
                                                <option value="Chevrolet">Chevrolet</option>
                                                <option value="Chrysler">Chrysler</option>
                                                <option value="Citroën">Citroën</option>
                                                <option value="Corbin">Corbin</option>
                                                <option value="Daewoo">Daewoo</option>
                                                <option value="Daihatsu">Daihatsu</option>
                                                <option value="Defender">Defender</option>
                                                <option value="Dodge">Dodge</option>
                                                <option value="Eagle">Eagle</option>
                                                <option value="Fairthorpe">Fairthorpe</option>
                                                <option value="Ferrari">Ferrari</option>
                                                <option value="FIAT">FIAT</option>
                                                <option value="Foose">Foose</option>
                                                <option value="Ford">Ford</option>
                                                <option value="Geo">Geo</option>
                                                <option value="GMC">GMC</option>
                                                <option value="Hillman">Hillman</option>
                                                <option value="Holden">Holden</option>
                                                <option value="Honda">Honda</option>
                                                <option value="HUMMER">HUMMER</option>
                                                <option value="Hyundai">Hyundai</option>
                                                <option value="Infiniti">Infiniti</option>
                                                <option value="Isuzu">Isuzu</option>
                                                <option value="Jaguar">Jaguar</option>
                                                <option value="Jeep">Jeep</option>
                                                <option value="Jensen">Jensen</option>
                                                <option value="Kia">Kia</option>
                                                <option value="Lamborghini">Lamborghini</option>
                                                <option value="Lamborghini,Coupé">Lamborghini,Coupé</option>
                                                <option value="Land Rover">Land Rover</option>
                                                <option value="Lexus">Lexus</option>
                                                <option value="Lincoln">Lincoln</option>
                                                <option value="Lotus">Lotus</option>
                                                <option value="Lotus Cars">Lotus Cars</option>
                                                <option value="Maserati">Maserati</option>
                                                <option value="Maybach">Maybach</option>
                                                <option value="Mazda">Mazda</option>
                                                <option value="McLaren">McLaren</option>
                                                <option value="Mercedes-Benz">Mercedes-Benz</option>
                                                <option value="Mercury">Mercury</option>
                                                <option value="Merkur">Merkur</option>
                                                <option value="MG">MG</option>
                                                <option value="MINI">MINI</option>
                                                <option value="Mitsubishi">Mitsubishi</option>
                                                <option value="Morgan">Morgan</option>
                                                <option value="Nissan">Nissan</option>
                                                <option value="Oldsmobile">Oldsmobile</option>
                                                <option value="Panoz">Panoz</option>
                                                <option value="Peugeot">Peugeot</option>
                                                <option value="Plymouth">Plymouth</option>
                                                <option value="Pontiac">Pontiac</option>
                                                <option value="Porsche">Porsche</option>
                                                <option value="Ram">Ram</option>
                                                <option value="Rambler">Rambler</option>
                                                <option value="Renault">Renault</option>
                                                <option value="Rolls-Royce">Rolls-Royce</option>
                                                <option value="Saab">Saab</option>
                                                <option value="Saturn">Saturn</option>
                                                <option value="Scion">Scion</option>
                                                <option value="Shelby">Shelby</option>
                                                <option value="Smart">Smart</option>
                                                <option value="Spyker">Spyker</option>
                                                <option value="Spyker Cars">Spyker Cars</option>
                                                <option value="Studebaker">Studebaker</option>
                                                <option value="Subaru">Subaru</option>
                                                <option value="Suzuki">Suzuki</option>
                                                <option value="Tesla">Tesla</option>
                                                <option value="Toyota">Toyota</option>
                                                <option value="Volkswagen">Volkswagen</option>
                                                <option value="Volvo">Volvo</option>
                                            </select>
                                            <span class="focus-border">
                                                <i></i>
                                            </span>
                                        </div>
                                        <small class="errName"
                                            style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                    </div>
                                    <div class="input_box vehicle-model-div">
                                        <label>Model</label>
                                        <div class="input_">
                                            <select class="effect-8" name="model[]" requ=""
                                                data-placeholder="Model" aria-hidden="true"></select>
                                            <span class="focus-border">
                                                <i></i>
                                            </span>
                                        </div>
                                        <small class="errName"
                                            style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row" style="margin-top:8px; margin-bottom: 8px;">
                                    <div class="col-md-6 pd-lr-5 mb-mb-10">
                                        <div class="form-wrap form-wrap-validation">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" checked="" name="trailer_type"
                                                    class="checkbox-custom" value="1" id="carrier-type"
                                                    data-parsley-multiple="carrier-type"><span
                                                    class="checkbox-custom-dummy"></span>
                                                <span id="carrierType">Open</span> Carrier
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pd-lr-5 mb-mb-10">
                                        <div class="form-wrap form-wrap-validation">
                                            <label class="checkbox-inline">
                                                <input type="hidden" name="condition[]" value="1">
                                                <input type="checkbox" checked="" name="condition[]"
                                                    id="vehicle-condition" class="checkbox-custom" value="1"
                                                    data-parsley-multiple="veh-condition0"><span
                                                    class="checkbox-custom-dummy"></span>
                                                <span id="vcond">Running</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary" id="addVehicle"
                                    style="border-radius:.2rem;" value="1">Add Vehicle
                                </button>
                                <div class="row">
                                    <div id="addMoreVeh"></div>
                                    {{-- <div class="col-sm-12 mb-mb-10">
                                        <div class="g-recaptcha" id="feedback-recaptcha"
                                            data-sitekey="6LeP8KUkAAAAAKR-KmOe7vESgh--xv5Iz9CaypCq">
                                        </div>
                                    </div> --}}
                                </div>
                                <hr>

                                <button class="btn w-100 btn-primary" id="calculatePriceBttn"
                                    style="border-radius: .3rem;" type="submit">Calculate Price
                                </button>
                            </form>
                        </div>
                    </div>
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
                            <a href="car.html" class="btn btn-primary">GET QUOTE</a>
                        </li>
                        <li class="services__item">
                            <img src="{{ asset('webImages/motorcycle.png') }}" alt="">
                            <h3>MOTORCYCLE</h3>
                            <p>Mopeds, ATV, Power Sports etc.</p>
                            <a href="motorcycle.html" class="btn btn-primary">GET QUOTE</a>
                        </li>
                    </ul>
                    <ul class="list services grid grid_3">
                        <li class="services__item">
                            <img src="{{ asset('webImages/heavy.png') }}" alt="">
                            <h3>HEAVY EQUIP.</h3>
                            <p>Trucks, Bulldozers, Mixer etc.</p>
                            <a href="heavy.html" class="btn btn-primary">GET QUOTE</a>
                        </li>
                        <li class="services__item">
                            <img src="{{ asset('webImages/roro.png') }}" alt="">
                            <h3>RORO</h3>
                            <p>Cars, Trucks, trailers etc.</p>
                            <a href="heavy.html" class="btn btn-primary">GET QUOTE</a>
                        </li>
                        <li class="services__item">
                            <img src="{{ asset('webImages/atv.png') }}" alt="">
                            <h3>ATV/UTV</h3>
                            <p>Sport, Quads, Military etc.</p>
                            <a href="heavy.html" class="btn btn-primary">GET QUOTE</a>

                        </li>
                    </ul>
                    <ul class="list services grid grid_4">
                        <li class="services__item">
                            <img src="{{ asset('webImages/construction.png') }}" alt="">
                            <h3>CONSTRUCTION</h3>
                            <p>Cranes, Drills, Grinders etc.</p>
                            <a href="heavy.html" class="btn btn-primary">GET QUOTE</a>
                        </li>
                        <li class="services__item">
                            <img src="{{ asset('webImages/farm.png') }}" alt="">
                            <h3>FARM</h3>
                            <p>Tractor, Planter, Baler etc.</p>
                            <a href="heavy.html" class="btn btn-primary">GET QUOTE</a>
                        </li>
                        <li class="services__item">
                            <img src="{{ asset('webImages/excavator.png') }}" alt="">
                            <h3>EXCAVATOR</h3>
                            <p>Digger, Driller, Miners etc.</p>
                            <a href="heavy.html" class="btn btn-primary">GET QUOTE</a>
                        </li>
                        <li class="services__item">
                            <img src="{{ asset('webImages/truck.png') }}" alt="">
                            <h3>TRUCKS</h3>
                            <p>Commercial, Dump Trucks etc.</p>
                            <a href="heavy.html" class="btn btn-primary">GET QUOTE</a>
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
                        <a href="car-shipping-service.html" class="btn btn-primary">READ MORE</a>
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
                        <a href="motorcycle-shipping-service.html" class="btn btn-primary">READ MORE</a>
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
                        <a href="atv-utv-transport.html" class="btn btn-primary">READ MORE</a>
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
                        <a href="construction-equipment-transport-shipping.html" class="btn btn-primary">READ MORE</a>
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
                        <a href="farm-transport-services.html" class="btn btn-primary">READ MORE</a>
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
                        <a href="excavator-shipping-services.html" class="btn btn-primary">READ MORE</a>
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
                        <a href="commercial-truck-transport.html" class="btn btn-primary">READ MORE</a>
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
                        <a href="heavy-equipment-shipping-services.html" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>
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
    </main>
@endsection
