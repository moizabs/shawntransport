@extends('frontend.layouts.app')

@section('content')
    <main class="main">
        <div class="quotemain grid grid-col60 vertical__padding">
            <div class="block__inner">
                <h2>Instant Motorcycle Shipping Quote!</h2>
                <div class="quotemain__box">
                    <h3>Get Car Quotes <span>- simple, fast &amp; easy!</span></h3>
                    <div class="for-car" id="forCAR">
                        <form action="{{ route('submit.quote') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="vehicle_opt" value="vehicle" hidden>
                            <input type="hidden" name="car_type" value="1" hidden>
                            <div class="grid grid_3">
                                <div class="input_box">
                                    <label class="test">Full Name</label>
                                    <div class="input_">
                                        <input class="test effect-8 requriedfield" id="name" type="text"
                                            name="name" required="" aria-required="true">
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                                <div class="input_box">
                                    <label>Phone#</label>
                                    <div class="input_">
                                        <input class="effect-8 phone-num" requ="" id="phone" type="tel"
                                            name="phone" maxlength="14" mask="(999) 999-9999" placeholder="xxx-xxx-xxxx"
                                            required="" aria-required="true">
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errPhone" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                                <div class="input_box">
                                    <label>Email</label>
                                    <div class="input_">
                                        <input class="effect-8" id="email" type="email" name="email" required=""
                                            aria-required="true">
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errEmail" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                            </div>
                            <hr />
                            <div class="">
                                <div class="input_box">
                                    <div class="input-form">
                                        <label class="d-block"> Pickup Location:</label>
                                        <input type="text" class="effect-8" id="pickup-location" name="origin"
                                            placeholder="Ex: 90005 Or Los Angeles" required="" />
                                        <small id="errOLoc" class="err-loc"></small>
                                        <ul class="suggestions suggestionsTwo"></ul>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                            </div>
                            <div class="input_box">
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
                                        <select class="effect-8" requ data-placeholder="Make" aria-hidden="true">
                                            <option value="0" selected="" disabled="" data-select2-id="4">
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
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                                <div class="input_box">
                                    <label>Modal</label>
                                    <div class="input_">
                                        <input type="text" class="effect-8" value="" name="model[]">
                                        {{-- <select class="effect-8" requ data-placeholder="Modal"
                                            aria-hidden="true"></select> --}}
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" id="addVehicle" style="border-radius:.2rem;"
                                value="1">Add Vehicle
                            </button>
                            <div class="clearfix"></div>

                            <hr />
                            <div class="row" style="margin-top:8px; margin-bottom: 8px;">
                                <div class="col-md-6 pd-lr-5 mb-mb-10">
                                    <div class="form-wrap form-wrap-validation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" checked="" name="carrier-type"
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
                                            <input type="hidden" name="veh-condition[0]" value="1">
                                            <input type="checkbox" checked="" name="veh-condition[0]"
                                                id="vehicle-condition" class="checkbox-custom" value="1"
                                                data-parsley-multiple="veh-condition0"><span
                                                class="checkbox-custom-dummy"></span>
                                            <span id="vcond">Running</span>
                                        </label>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-12 mb-mb-10">
                                    <div class="g-recaptcha" id="feedback-recaptcha"
                                        data-sitekey="6LeP8KUkAAAAAKR-KmOe7vESgh--xv5Iz9CaypCq">
                                    </div>
                                </div> --}}
                            </div>
                            <hr />
                            <div id="addMoreVeh"></div>
                            <button class="btn w-100 btn-primary" id="calculatePriceBttn" style="border-radius: .3rem;"
                                type="button">Calculate Price
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
