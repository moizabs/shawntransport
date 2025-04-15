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
    <main class="main">
        <div class="overlay"></div>
        <div class="quotemain grid grid-col60 vertical__padding content">
            <div class="block__inner">
                <h1></h1>
                <h2>Instant ATV/UTV Shipping Quote!</h2>
                <div class="quotemain__box">
                    <h3>Get ATV/UTV Quotes <span>- simple, fast &amp; easy!</span></h3>
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
                                    <!--<div class="input_">-->
                                    <!--    <select class="effect-8" requ data-placeholder="Make" aria-hidden="true" name="make[]">-->
                                    <!--        <option value="0" selected="" disabled="" data-select2-id="4">-->
                                    <!--            Make</option>-->
                                    <!--        <option value="Acura">Acura</option>-->
                                    <!--    </select>-->
                                    <!--    <span class="focus-border">-->
                                    <!--        <i></i>-->
                                    <!--    </span>-->
                                    <!--</div>-->
                                    <div class="input_">
                                        <input class="effect-8" type="text"
                                            name="make" required="" aria-required="true">
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
                            </div>
                            <button type="button" class="btn btn-primary" id="addVehicle-1" style="border-radius:.2rem;"
                                value="1">Add Vehicle
                            </button>
                            <div class="clearfix"></div>

                            <hr />
                            <div class="row" style="margin-top:8px; margin-bottom: 8px;">
                                <div class="col-md-4 pd-lr-5 mb-mb-10">
                                    <label for="condition">Condition</label>
                                    <div class="input_box">
                                        <select class="effect-8 lh-base" id="condition" name="condition[]">
                                            <option value="1" selected>Running</option>
                                            <option value="2">Non Running</option>
                                        </select>
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4 pd-lr-5 mb-mb-10">
                                    <label for="trailer_type">Select Trailer Type</label>
                                    <div class="input_box">
                                        <select class="effect-8 lh-base" id="trailer_type" name="trailer_type">
                                            <option value="1" selected>Open Trailer</option>
                                            <option value="2">Enclosed Trailer</option>
                                        </select>
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="available_at_auction"
                                            name="available_at_auction" value="1" />
                                        <label class="form-check-label test" for="" style="margin: -2px 0px 0px 0px;padding: 0px 0px 0px 6px;"> Available
                                            at Auction?</label>
                                        <div class="input-form div-link mt-3 input_box" style="display: none;">
                                            <div class="input_">
                                            <input class="test effect-8 requriedfield" type="url" id="link-1" name="link"
                                                placeholder="Enter Link" />
                                                <span class="focus-border">
                                                <i></i>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div id="addMoreVeh-1"></div>
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
        $(document).on("click", "#addVehicle-1", function () {
            var no = $(this).val();
            no = ++no;
            $(this).val(no);
            no = pad(no);
            var years = getYear();
            years = years.split("</option><option>");
            $("#addMoreVeh-1").append(`
                <div id="field">
                    <input type="hidden" name="count[]">
                    <div class="px-4">
                        <span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 0px; color: red;" onclick="removeField(${no})"></i></span>
                    </div>
                    <div class="grid grid_3">
                        <div class="input_box">
                            <label>Year</label>
                            <div class="input_">
                                <select class="effect-8 vehicle-year" required>
                                    <option value="" selected disabled>Year</option>
                                    ${years}
                                </select>
                                <span class="focus-border"><i></i></span>
                            </div>
                        </div>
                        <div class="input_box">
                            <label>Make</label>
                            <div class="input_">
                                <input class="effect-8" type="text"
                                    name="make" required="" aria-required="true">
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
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>
                            <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                        </div>
                    </div><hr />
                    <div class="grid grid_2 px-4" style="padding: 15px 0px;">
                        <div class="" style="margin:1rem 0;">
                            <label for="condition">Condition</label>
                            <div class="input_box">
                                <select class="effect-8 lh-base" id="condition" name="condition[]">
                                    <option value="1" selected>Running</option>
                                    <option value="2">Non Running</option>
                                </select>
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="available_at_auction"
                                name="available_at_auction" value="1" />
                            <label class="form-check-label test" for="" style="margin: -2px 0px 0px 0px;padding: 0px 0px 0px 6px;"> Available
                                at Auction?</label>
                            <div class="input-form div-link mt-3 input_box" style="display: none;">
                                <div class="input_">
                                <input class="test effect-8 requriedfield" type="url" id="link-1" name="link"
                                    placeholder="Enter Link" />
                                    <span class="focus-border">
                                    <i></i>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `);
            $(`#vehicle-condition${no}`).click(function () {
                if ($(this).prop("checked")) {
                    $(`#vcond${no}`).html("Running");
                    $(`#condition${no}`).val("operable");
                } else {
                    $(`#vcond${no}`).html("Non-Running");
                    $(`#condition${no}`).val("non-running");
                }
            });
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
        let selectedFiles = [];

        function previewImages(e) {
            var t = e.target,
                a = document.getElementById("imagePreviewContainer");
            t.files && Array.from(t.files).forEach((e => {
                if (!selectedFiles.some((t => t.name === e.name && t.size === e.size))) {
                    selectedFiles.push(e);
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
            selectedFiles = selectedFiles.filter((a => !(a.name === e && a.size === t))), a.innerHTML = "", selectedFiles
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