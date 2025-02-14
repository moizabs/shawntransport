@extends('frontend.layouts.app')

@section('content')
    <main class="main">
        <div class="quotemain grid grid-col60 vertical__padding">
            <div class="block__inner">
                <h2>Instant Heavy Equipment Shipping Quote!</h2>
                <div class="quotemain__box">
                    <h3>Get Car Quotes <span>- simple, fast &amp; easy!</span></h3>
                    <div class="for-car" id="forCAR">
                        <form action="{{ route('submit.quote') }}">
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
                                <!-- <div class="input_box">
                                        <label class="test">Phone#</label>
                                        <div class="input_">
                                            <input class="effect-8"  id="phone" type="text" name="phone" maxlength="14"
                                                mask="(999) 999-9999" placeholder="xxx-xxx-xxxx" required=""
                                                aria-required="true">
                                            <span class="focus-border">
                                                <i></i>
                                            </span>
                                        </div>
                                        <script>
                                            $(document).ready(function() {
                                                $("#phone").hover(function(e) {
                                                    $.each($("#phone[type='text']"), function(i, v) {
                                                        $(this).inputmask({
                                                            "mask": $(this).attr("mask")
                                                        })
                                                    });

                                                });
                                            })
                                        </script>
                                        <small class="errName"
                                            style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                    </div>
                                    <div class="input_box">
                                        <label>Email</label>
                                        <div class="input_">
                                            <input class="effect-8"  id="email" type="text" name="email" required=""
                                                aria-required="true">
                                            <span class="focus-border">
                                                <i></i>
                                            </span>
                                        </div>
                                        <small class="errName"
                                            style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                    </div> -->
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
                                <div class="input_box " style="    grid-column: 2 span;">
                                    <label>Year, Make & Model</label>
                                    <div class="input_">
                                        <input class="effect-8" required type="text" name="destination"
                                            autocomplete="off" placeholder="Enter Equipment Year, Make & Model"
                                            required="" aria-required="true">
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                                <div class="input_box">
                                    <label>Trailer Type</label>
                                    <div class="input_">
                                        <select class="effect-8" id="year" required="" aria-required="true">
                                            <option value="0" selected="" disabled="" data-select2-id="2">
                                                Select</option>
                                            <option value="Step_Deck" data-select2-id="8">Step Deck</option>
                                            <option value="RGN" data-select2-id="9">RGN</option>
                                            <option value="Flatbed" data-select2-id="10">Flatbed</option>
                                            <option value="Landoll" data-select2-id="11">Landoll</option>
                                            <option value="Hotshot" data-select2-id="12">Hotshot</option>
                                        </select>
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                            </div>
                            <div class="grid grid_3">
                                <div class="input_box ">
                                    <label>Length</label>
                                    <div class="input_">
                                        <input class="effect-8" type="text" name="lengthft[]" id="length"
                                            mask="999ft. 99in" required="" aria-required="true">
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                                <div class="input_box ">
                                    <label>Width</label>
                                    <div class="input_">
                                        <input class="effect-8" mask="999ft. 99in" id="width" type="text"
                                            name="widthft[]" required="" aria-required="true">
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                                <div class="input_box ">
                                    <label>Height</label>
                                    <div class="input_">
                                        <input class="effect-8" mask="999ft. 99in" id="height" type="text"
                                            name="heightft[]" required="" aria-required="true">
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                                <div class="input_box ">
                                    <label>Weight</label>
                                    <div class="input_">
                                        <input class="effect-8" id="weight" type="text" name="weight[]"
                                            required="" aria-required="true">
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                                <div class="input_box">
                                    <label>Load Method</label>
                                    <div class="input_">
                                        <select class="effect-8" data-placeholder="Load Method"
                                            data-minimum-results-for-search="5" name="load[]" id="load_method"
                                            required="" aria-required="true" data-select2-id="load_method"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="0" selected="" disabled="" data-select2-id="4">
                                                Select</option>
                                            <option data-select2-id="14">loading_dock</option>
                                            <option data-select2-id="15">crane</option>
                                            <option data-select2-id="16">forklift</option>
                                            <option data-select2-id="17">drive_roll</option>
                                        </select>
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                                <div class="input_box">
                                    <label>Unload Method</label>
                                    <div class="input_">
                                        <select class="effect-8" data-placeholder="Unload Method"
                                            data-minimum-results-for-search="5" name="unload[]" id="unload_method"
                                            required="" aria-required="true" data-select2-id="unload_method"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="0" selected="" disabled="" data-select2-id="6">
                                                Select</option>
                                            <option data-select2-id="21">loading_dock</option>
                                            <option data-select2-id="22">crane</option>
                                            <option data-select2-id="23">forklift</option>
                                            <option data-select2-id="24">drive_roll</option>
                                        </select>
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" id="addVehicle" style="border-radius:.2rem;"
                                value="1">Add Equipment
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
                                <div class="col-sm-12 mb-mb-10">
                                    <div class="g-recaptcha" id="feedback-recaptcha"
                                        data-sitekey="6LeP8KUkAAAAAKR-KmOe7vESgh--xv5Iz9CaypCq">
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div id="addMoreVeh"></div>
                            <button class="btn w-100 btn-primary" id="calculatePriceBttn" style="border-radius: .3rem;"
                                type="submit">Calculate Price
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
