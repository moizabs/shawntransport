@extends('frontend.layouts.app')
<style>
    .main {
        position: relative;
        background: url(../webImages/Shipping.jpg) no-repeat center center/cover;
        min-height: 100vh;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.6); /* Adjust transparency */
        z-index: 1;
    }

    .content {
        position: relative;
        z-index: 2; /* Ensures content stays above the overlay */
        padding: 20px;
    }

</style>
@section('content')
    <section class="banner relative" style="max-height:10rem; min-height:10rem; ">

    </section>
    <main class="main"><div class="overlay"></div>
        <div class="quotemain grid grid-col60 vertical__padding content">
            <div class="block__inner">
                <h1></h1>
                <h2>Instant Commercial Truck Quote!</h2>
                <div class="quotemain__box">
                    <h3>Get Commercial Quotes <span>- simple, fast &amp; easy!</span></h3>
                    <div class="for-car" id="forCAR">
                        <form action="{{ route('submit.quote') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="vehicle_opt" value="vehicle" hidden>
                            <input type="hidden" name="car_type" value="2" hidden>
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
                            <div class="grid grid_2">
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
                            </div>
                            <hr />
                            <div class="text-center">
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
                                        <input class="effect-8" type="text"
                                               name="make[]" required="" aria-required="true">
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                                <div class="input_box">
                                    <label>Model</label>
                                    <div class="input_">
                                        <input type="text" class="effect-8" value="" name="model[]">
                                        {{-- <select class="effect-8" requ data-placeholder="Model"
                                            aria-hidden="true"></select> --}}
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                            </div><hr />
                            <div class="grid grid_4">
                                <div class="input_box">
                                    <label>Length</label>
                                    <div class="input_">
                                        <input class="effect-8 lwh" type="text" name="length_ft[]" id="length" required>
                                        <span class="focus-border"><i></i></span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>

                                <div class="input_box">
                                    <label>Width</label>
                                    <div class="input_">
                                        <input class="effect-8 lwh" id="width" type="text" name="width_ft[]" required>
                                        <span class="focus-border"><i></i></span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>

                                <div class="input_box">
                                    <label>Height</label>
                                    <div class="input_">
                                        <input class="effect-8 lwh" id="height" type="text" name="height_ft[]" required>
                                        <span class="focus-border"><i></i></span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>

                                <div class="input_box">
                                    <label>Weight</label>
                                    <div class="input_">
                                        <input class="effect-8" id="weight" type="text" name="weight[]" required>
                                        <span class="focus-border"><i></i></span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                            </div><hr />
                            <div class="grid grid_3">
                                <div class="input_box">
                                    <label>Load Method</label>
                                    <div class="input_">
                                        <select class="effect-8" data-placeholder="Load Method"
                                                data-minimum-results-for-search="5" name="load_method[]" id="load_method"
                                                required="" aria-required="true" data-select2-id="load_method"
                                                tabindex="-1" aria-hidden="true">
                                            <option value="0" selected="" disabled="" data-select2-id="4">
                                                Select</option>
                                            <option value="" disabled selected>Select</option>
                                            <option value="LOADING DOCK">LOADING DOCK</option>
                                            <option value="CRANE">CRANE</option>
                                            <option value="FORKLIFT">FORKLIFT</option>
                                            <option value="DRIVE ROLL">DRIVE ROLL</option>
                                        </select>
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                                <div class="input_box">
                                    <label>Trailer Type</label>
                                    <div class="input_">
                                        <select class="effect-8" name="trailer_type[]" id="year" required="" aria-required="true">
                                            <option value="0" selected="" disabled="" data-select2-id="2">
                                                Select</option>
                                            <option value="RGN" selected>RGN</option>
                                            <option value="FLATBED (F)">FLATBED (F)</option>
                                            <option value="STEP DECK (SD)">STEP DECK (SD)</option>
                                            <option value="REMOVABLE GOOSENECK (RGN)">REMOVABLE GOOSENECK (RGN)</option>
                                            <option value="CONESTOGA (CS)">CONESTOGA (CS)</option>
                                            <option value="CONTAINER / DRAYAGE (C)">CONTAINER / DRAYAGE (C)</option>
                                            <option value="TRUCK (T)">TRUCK (T)</option>
                                            <option value="POWER ONLY (PO)">POWER ONLY (PO)</option>
                                            <option value="HOT SHOT (HS)">HOT SHOT (HS)</option>
                                            <option value="LOWBOY (LB)">LOWBOY (LB)</option>
                                            <option value="ENDUMP (ED)">ENDUMP (ED)</option>
                                            <option value="LANDOLL (LD)">LANDOLL (LD)</option>
                                            <option value="PARTIAL (PT)">PARTIAL (PT)</option>
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
                                                data-minimum-results-for-search="5" name="unload_method[]" id="unload_method"
                                                required="" aria-required="true" data-select2-id="unload_method"
                                                tabindex="-1" aria-hidden="true">
                                            <option value="0" selected="" disabled="" data-select2-id="6">
                                                Select</option>
                                            <option value="LOADING DOCK">LOADING DOCK</option>
                                            <option value="CRANE">CRANE</option>
                                            <option value="FORKLIFT">FORKLIFT</option>
                                            <option value="DRIVE ROLL">DRIVE ROLL</option>
                                        </select>
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                            </div><hr />
                            <button type="button" class="btn btn-primary" id="addHeavy-1" style="border-radius:.2rem;"
                                    value="1">Add Equipment
                            </button>
                            <div class="clearfix"></div>

                            <hr />
                            <div class="row" style="margin-top:8px; margin-bottom: 8px;">
                                <div class="col-md-6 pd-lr-5 mb-mb-10">
                                    <div class="form-wrap form-wrap-validation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" checked="" name="carrier-type[]"
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
                                            <input type="hidden" name="condition[0]" value="1">
                                            <input type="checkbox" checked="" name="condition[0]"
                                                   id="vehicle-condition0" class="checkbox-custom" value="1"
                                                   data-parsley-multiple="condition0"><span
                                                    class="checkbox-custom-dummy"></span>
                                            <span id="vcond0">Running</span>
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
                            <div id="addMoreVeh-2"></div>
                            <div class="row" style="padding: 0px 15px 15px 15px;">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-check-input " type="checkbox" id="modification"
                                               name="modification" value="1" />
                                        <label class="form-check-label ms-4 test" for="modification">
                                            Modified?</label>
                                    </div>
                                    <div class="input-form div-modify_info input_box" style="display: none;">
                                        <label class="d-block test"> Modification Information:</label>
                                        <div class="input_">
                                            <input  class="test effect-8 requriedfield" type="text" id="c" name="modify_info"
                                                    placeholder="Enter Modification Information" /><span class="focus-border">
                                            <i></i>
                                        </span></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-form mt-1 input_box">
                                        <label class="d-block"> Image:</label>
                                        <div class="input_" style="padding: 0px 15px 15px 15px;">
                                            <input class=" image_input test effect-8" name="image[]" type="file"
                                                   accept="image/*" multiple onchange="previewImages(event)"><span class="focus-border">
                                                <i></i>
                                            </span></div>
                                        <div class="image-preview-container" id="imagePreviewContainer"></div>
                                    </div>
                                </div>

                            </div>
                            <button class="btn w-100 btn-primary" id="calculatePriceBttn" style="border-radius: .3rem;"
                                    type="submit">Calculate Price
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        $(document).ready(function () {
            $(".lwh").inputmask({
                mask: "999ft.99in",
                greedy: false,
                placeholder: " "
            });

            $(".lwh").on("input", function () {
                let value = $(this).val();
                let match = value.match(/(\d+)ft\.(\d+)in/);

                if (match) {
                    let feet = parseInt(match[1]);
                    let inches = parseInt(match[2]);

                    if (inches > 12) {
                        $(this).val(`${feet}ft.11in`);
                    }
                }
            });
        });
    </script>
    <script>
        $(document).on("click", "#addHeavy-1", function () {
            var no = $(this).data("count") || 0;  // Use data attribute to store count
            no++;
            $(this).data("count", no);

            var years = getYear();
            years = years.split("</option><option>");

            $("#addMoreVeh-2").append(`
                <div id="field${no}">
                    <input type="hidden" id="countNo" name="count[]" value="${no}">
                    <div class="px-4">
                        <span class="delete-heavy">
                            <i class="fa fa-trash" style="float: right; margin-top: 0px; color: red;" onclick="removeField(${no})"></i>
                        </span>
                    </div>
                    <div class="grid grid_3">
                        <div class="input_box">
                            <label>Year</label>
                            <div class="input_">
                                <select class="effect-8 vehicle-year" required name="year[]">
                                    <option value="" selected disabled>Year</option>
                                    ${years}
                                </select>
                                <span class="focus-border"><i></i></span>
                            </div>
                        </div>
                        <div class="input_box">
                            <label>Make</label>
                            <div class="input_">
                                <input class="effect-8" type="text" name="make[]" required aria-required="true">
                                <span class="focus-border"><i></i></span>
                            </div>
                            <small class="errName"></small>
                        </div>
                        <div class="input_box">
                            <label>Model</label>
                            <div class="input_">
                                <input type="text" class="effect-8" name="model[]">
                                <span class="focus-border"><i></i></span>
                            </div>
                            <small class="errName"></small>
                        </div>
                    </div>
                    <div class="grid grid_3">
                        <div class="input_box">
                            <label>Trailer Type</label>
                            <div class="input_">
                                <select class="effect-8"  name="trailer_type[]"id="trailer_type${no}" required>
                                    <option value="0" selected disabled>Select</option>
                                    <option value="Step_Deck">Step Deck</option>
                                    <option value="RGN">RGN</option>
                                    <option value="Flatbed">Flatbed</option>
                                    <option value="Landoll">Landoll</option>
                                    <option value="Hotshot">Hotshot</option>
                                </select>
                                <span class="focus-border"><i></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid_3">
                        <div class="input_box">
                            <label>Length</label>
                            <div class="input_">
                                <input class="effect-8 lwh" type="text" name="length_ft[]" id="length${no}" required>
                                <span class="focus-border"><i></i></span>
                            </div>
                        </div>
                        <div class="input_box">
                            <label>Width</label>
                            <div class="input_">
                                <input class="effect-8 lwh" type="text" name="width_ft[]" id="width${no}" required>
                                <span class="focus-border"><i></i></span>
                            </div>
                        </div>
                        <div class="input_box">
                            <label>Height</label>
                            <div class="input_">
                                <input class="effect-8 lwh" type="text" name="height_ft[]" id="height${no}" required>
                                <span class="focus-border"><i></i></span>
                            </div>
                        </div>
                        <div class="input_box">
                            <label>Weight</label>
                            <div class="input_">
                                <input class="effect-8" type="text" name="weight[]" id="weight${no}" required>
                                <span class="focus-border"><i></i></span>
                            </div>
                        </div>
                        <div class="input_box">
                            <label>Load Method</label>
                            <div class="input_">
                                <select class="effect-8" name="load_method[]" id="load_method${no}" required>
                                    <option value="0" selected disabled>Select</option>
                                            <option value="LOADING DOCK">LOADING DOCK</option>
                                            <option value="CRANE">CRANE</option>
                                            <option value="FORKLIFT">FORKLIFT</option>
                                            <option value="DRIVE ROLL">DRIVE ROLL</option>
                                </select>
                                <span class="focus-border"><i></i></span>
                            </div>
                        </div>
                        <div class="input_box">
                            <label>Unload Method</label>
                            <div class="input_">
                                <select class="effect-8" name="unload_method[]" id="unload_method${no}" required>
                                    <option value="0" selected disabled>Select</option>
                                            <option value="LOADING DOCK">LOADING DOCK</option>
                                            <option value="CRANE">CRANE</option>
                                            <option value="FORKLIFT">FORKLIFT</option>
                                            <option value="DRIVE ROLL">DRIVE ROLL</option>
                                </select>
                                <span class="focus-border"><i></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:8px; margin-bottom: 8px;">
                                <div class="col-md-6 pd-lr-5 mb-mb-10">
                                    <div class="form-wrap form-wrap-validation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" checked="" name="carrier-type[${no}]"
                                                class="checkbox-custom" value="1" id="carrier-type${no}"
                                                data-parsley-multiple="carrier-type"><span
                                                class="checkbox-custom-dummy"></span>
                                            <span id="carrierType${no}">Open</span> Carrier
                                        </label>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <label class="checkbox-inline">
                                        <input type="hidden" name="condition[${no}]" value="1">
                                        <input type="checkbox" name="condition[${no}]" id="vehicle-condition${no}" class="checkbox-custom" value="1" checked>
                                        <span class="checkbox-custom-dummy"></span>
                                        <span id="vcond${no}">Running</span>
                                    </label>
                                </div>
                    </div>


                </div>
            `);

            // Apply input mask and validation for newly added inputs
            $(`#length${no}, #width${no}, #height${no}`).inputmask({
                mask: "999ft.99in",
                greedy: false,
                placeholder: " "
            });

            $(`#length${no}, #width${no}, #height${no}`).on("input", function () {
                let value = $(this).val();
                let match = value.match(/(\d+)ft\.(\d+)in/);

                if (match) {
                    let feet = parseInt(match[1]);
                    let inches = parseInt(match[2]);

                    if (inches > 12) {
                        $(this).val(`${feet}ft.11in`);
                    }
                }
            });

            // Event Listener for Checkbox Condition
            $(`#vehicle-condition${no}`).click(function () {
                let isChecked = $(this).prop("checked");
                $(`#vcond${no}`).html(isChecked ? "Running" : "Non-Running");
                $(`input[name="condition[${no}]"]`).val(isChecked ? "1" : "0");
            });
        });

        $(`#vehicle-condition0`).click(function () {
            let isChecked = $(this).prop("checked");
            $(`#vcond0`).html(isChecked ? "Running" : "Non-Running");
            $(`input[name="condition[0]"]`).val(isChecked ? "1" : "0");
        });

        // Function to Remove Field
        function removeField(no) {
            $(`#field${no}`).remove();
        }

        $(document).on("click", ".delete-heavy", function () {
            $(this).closest("div[id^='field']").remove();
        });
    </script>
    <script>
        $(document).ready((function() {
            function i(i, n, e) {
                $(document).on("change", i, (function() {
                    $(this).is(":checked") ? ($(n).show(), $(e).attr("required", !0)) : ($(n)
                        .hide(), $(e).val(""), $(e).removeAttr("required"))
                }))
            }
            i(".div-link", "#link"), i("#modification", ".div-modify_info", "#c")
        }))
    </script>
    <script>
        let selectedFiles222 = [];

        function previewImages(e) {
            var t = e.target,
                a = document.getElementById("imagePreviewContainer");
            t.files && Array.from(t.files).forEach((e => {
                if (!selectedFiles22.some((t => t.name === e.name && t.size === e.size))) {
                    selectedFiles22.push(e);
                    var t = new FileReader;
                    t.onload = function(t) {
                        var n = document.createElement("div");
                        n.classList.add("image-preview"), n.innerHTML =
                            `\n                            <img src="${t.target.result}" alt="Image Preview">\n                            <button class="remove-button" onclick="removeImage('${e.name}', ${e.size})">Remove</button>\n                        `,
                            a.appendChild(n)
                    }, t.readAsDataURL(e)
                }
            }))
        }

        function removeImage(e, t) {
            var a = document.getElementById("imagePreviewContainer");
            selectedFiles22 = selectedFiles22.filter((a => !(a.name === e && a.size === t))), a.innerHTML = "", selectedFiles22
                .forEach((e => {
                    var t = new FileReader;
                    t.onload = function(t) {
                        var n = document.createElement("div");
                        n.classList.add("image-preview"), n.innerHTML =
                            `\n                    <img src="${t.target.result}" alt="Image Preview">\n                    <button class="remove-button" onclick="removeImage('${e.name}', ${e.size})">Remove</button>\n                `,
                            a.appendChild(n)
                    }, t.readAsDataURL(e)
                }))
        }
    </script>
    <script>
        $(document).ready(function () {
            // Attach event handler for the first checkbox
            $(".form-check-input[name='available_at_auction']").change(function () {
                let parentDiv = $(this).closest(".row");
                let linkDiv = parentDiv.find(".div-link");
                let linkInput = parentDiv.find("input[name='link']");

                if ($(this).is(":checked")) {
                    linkDiv.show();
                    linkInput.attr("required", true);
                } else {
                    linkDiv.hide();
                    linkInput.val("").removeAttr("required");
                }
            });

            // Attach event handler for dynamically added checkboxes
            $(document).on("change", ".form-check-input[name='available_at_auction']", function () {
                let parentDiv = $(this).closest(".grid_2").parent();
                let linkDiv = parentDiv.find(".div-link");
                let linkInput = parentDiv.find("input[name='link']");

                if ($(this).is(":checked")) {
                    linkDiv.show();
                    linkInput.attr("required", true);
                } else {
                    linkDiv.hide();
                    linkInput.val("").removeAttr("required");
                }
            });
        });
    </script>
@endsection
