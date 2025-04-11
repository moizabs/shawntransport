@extends('frontend.layouts.app')
<style>
    .btn-primary {
        position: relative;
        border: 2px solid transparent;
        overflow: hidden;
        background: linear-gradient(270deg, #2bdadc, #0067f4);
        /* Static background */
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
        opacity: 0;
        /* Hidden by default */
    }

    .btn-primary:hover::before {
        opacity: 1;
        animation: move-border 2s linear infinite;
    }

    @keyframes move-border {
        0% {
            clip-path: inset(0 100% 98% 0);
            /* Top border */
            border-color: #fff;
        }

        25% {
            clip-path: inset(0 0 0 98%);
            /* Right border */
            border-color: #fff;
        }

        50% {
            clip-path: inset(98% 0 0 0);
            /* Bottom border */
            border-color: #fff;
        }

        75% {
            clip-path: inset(0 98% 0 0);
            /* Left border */
            border-color: #fff;
        }

        100% {
            clip-path: inset(0 100% 98% 0);
            /* Back to top */
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

    .content {
        position: relative;
        z-index: 2;
        padding: 20px;
    }

    .make-dropdown {
        max-height: 200px !important;
        overflow-y: auto !important;
    }

    .dropdown-item {
        white-space: nowrap !important;
    }

    .model-dropdown {
        max-height: 200px !important;
        overflow-y: auto !important;
        position: absolute !important;
        z-index: 1000 !important;
    }

    .vehicle-model-dropdown {
        overflow: overlay;
        height: 100px;
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        padding: .5rem 0;
        margin: .125rem 0 0;
        font-size: 14px !important;
        color: #212529;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: .25rem;
        font-weight: normal;
        display: block;
    }

    .image-preview-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .image-preview {
        position: relative;
        display: inline-block;
    }

    .image-preview img {
        width: 150px;
        height: 150px;
        object-fit: cover;
    }

    .remove-button {
        position: absolute;
        top: 5px;
        right: 5px;
        background-color: red;
        color: #fff;
        border: none;
        cursor: pointer;
        padding: 5px;
    }

    .hero-section-form {
        width: 700px;
        padding-right: 130px;
        padding-top: 40px;
    }

    

    .form-name-section {
        display: grid;
        grid-template-columns: auto auto auto;
        /* background-color: dodgerblue;
        padding: 10px; */
    }

    .form-location-section {
        display: grid;
        grid-template-columns: auto auto;
        /* background-color: dodgerblue;
        padding: 10px; */
    }

    .form-vehicle-section {
        display: grid;
        grid-template-columns: auto auto auto;
    }



    @media only screen and (max-width: 700px) {
        .hero-section-form {
            width: 100%;
            padding-right: 8%;
            padding-top: 60px;

        }
        .form-name-section{
            grid-template-columns: auto auto ;
        }

        .form-location-section{
            grid-template-columns: auto  ;
        }

        .form-vehicle-section{
            grid-template-columns: auto  ;
        }
       
    }

    @media only screen and (max-width: 500px) {
        .form-name-section{
            grid-template-columns: auto ;
        }

    }
</style>

<script>
    let selectedFiles = [];

    document.getElementById("imageInput").addEventListener("change", previewImages);

    function previewImages(event) {
        const input = event.target;
        const previewContainer = document.getElementById("imagePreviewContainer");

        Array.from(input.files).forEach(file => {
            if (!selectedFiles.some(f => f.name === file.name && f.size === file.size && f.lastModified === file
                    .lastModified)) {
                selectedFiles.push(file);
                const reader = new FileReader();

                reader.onload = function(e) {
                    const previewDiv = document.createElement("div");
                    previewDiv.classList.add("image-preview");
                    previewDiv.dataset.fileName = file.name;
                    previewDiv.dataset.fileSize = file.size;
                    previewDiv.innerHTML = `
                        <img src="${e.target.result}" alt="Image Preview">
                        <button class="remove-button">Remove</button>
                    `;

                    previewDiv.querySelector(".remove-button").addEventListener("click", function() {
                        removeImage(file, previewDiv);
                    });

                    previewContainer.appendChild(previewDiv);
                };

                reader.readAsDataURL(file);
            }
        });

        updateInputFiles();
    }

    function removeImage(file, previewDiv) {
        selectedFiles = selectedFiles.filter(f => !(f.name === file.name && f.size === file.size && f.lastModified ===
            file.lastModified));
        previewDiv.remove();
        updateInputFiles();
    }

    function updateInputFiles() {
        const dataTransfer = new DataTransfer(); // Create a new FileList
        selectedFiles.forEach(file => dataTransfer.items.add(file));

        document.getElementById("imageInput").files = dataTransfer.files; // Update input field
    }
</script>
<script>
    $(document).ready(function() {
        // Attach event handler for the first checkbox
        $(".form-check-input[name='available_at_auction']").change(function() {
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
        $(document).on("change", ".form-check-input[name='available_at_auction']", function() {
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
                <!--<div class="banner__right">-->
                <!--    <div class="quotemain__box">-->
                <!--        <h3>Get Car Quotes <span>- simple, fast &amp; easy!</span></h3>-->
                <!--        <div class="for-car" id="forCAR">-->
                <!--            <form action="{{ route('submit.quote') }}" method="post" enctype="multipart/form-data">-->
                <!--                @csrf-->
                <!--                <input type="hidden" name="vehicle_opt" value="vehicle" hidden>-->
                <!--                <input type="hidden" name="car_type" value="1" hidden>-->
                <!--                <div class="grid grid_3">-->
                <!--                    <div class="input_box">-->
                <!--                        <label for"name">Full Name</label>-->
                <!--                        <div class="input_">-->
                <!--                            <input class="effect-8" requ="" id="name" type="text"-->
                <!--                                name="name" required="" aria-required="true">-->
                <!--                            <span class="focus-border">-->
                <!--                                <i></i>-->
                <!--                            </span>-->
                <!--                        </div>-->
                <!--                        <small class="errName"-->
                <!--                            style="color: red; font-size: 1rem; margin-left: 3px"></small>-->
                <!--                    </div>-->
                <!--                    <div class="input_box">-->
                <!--                        <label for="phone">Phone#</label>-->
                <!--                        <div class="input_">-->
                <!--                            <input class="effect-8 phone-num" requ="" id="phone" type="tel"-->
                <!--                                name="phone" maxlength="14" mask="(999) 999-9999"-->
                <!--                                placeholder="xxx-xxx-xxxx" required="" aria-required="true">-->
                <!--                            <span class="focus-border">-->
                <!--                                <i></i>-->
                <!--                            </span>-->
                <!--                        </div>-->
                <!--                        <small class="errPhone"-->
                <!--                            style="color: red; font-size: 1rem; margin-left: 3px"></small>-->
                <!--                    </div>-->
                <!--                    <div class="input_box">-->
                <!--                        <label for="email">Email</label>-->
                <!--                        <div class="input_">-->
                <!--                            <input class="effect-8" id="email" type="email" name="email"-->
                <!--                                required="" aria-required="true">-->
                <!--                            <span class="focus-border">-->
                <!--                                <i></i>-->
                <!--                            </span>-->
                <!--                        </div>-->
                <!--                        <small class="errEmail"-->
                <!--                            style="color: red; font-size: 1rem; margin-left: 3px"></small>-->
                <!--                    </div>-->

                <!-- <script>
                    <!--                        document.getElementById('email').addEventListener('blur', function() {
                    -->
                <!--                            const emailInput = this.value;-->
                <!--                            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; // Basic email pattern-->
                <!--                            const errorMessageElement = document.querySelector('.errEmail');-->

                <!--                            if (!emailPattern.test(emailInput)) {-->
                <!--                                errorMessageElement.textContent = "Please enter a valid email address.";-->
                <!--                                $("#calculatePriceBttn").attr('disabled', true);-->
                <!--                            } else {-->
                <!--                                $("#calculatePriceBttn").attr('disabled', false);-->
                <!--                                errorMessageElement.textContent = ""; // Clear error if valid-->
                <!--                            }-->
                <!--                        });-->

                <!--                        document.getElementById('email').addEventListener('keydown', function(event) {-->
                <!--                            if (event.key === 'Enter') {-->
                <!--                                this.blur(); // Trigger blur on Enter key press-->
                <!--                            }-->
                <!--                        });-->
                <!--                    </script> -->-->
                <!--                </div>-->
                <!--                <hr>-->
                <!--                <div class="">-->
                <!--                    {{-- <script type="text/javascript"-->
                <!--                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDS8r7ZgkAHXuIJKgaYhhF4WccgswI-1F8&amp;v=3.exp&amp;libraries=places">-->
                <!--                    </script>-->

                <!--                    <script type="text/javascript">-->
                <!--                        function initialize() {-->
                <!--                            var input = document.getElementById("pick_up");-->
                <!--                            var input2 = document.getElementById("pick_up_off");-->
                <!--                            var autocomplete = new google.maps.places.Autocomplete(input);-->
                <!--                            var autocomplete2 = new google.maps.places.Autocomplete(input2);-->
                <!--                            autocomplete.addListener("place_changed", function() {-->
                <!--                                var place = autocomplete.getPlace();-->

                <!--                            });-->
                <!--                            autocomplete2.addListener("place_changed", function() {-->
                <!--                                var place = autocomplete.getPlace();-->

                <!--                            });-->
                <!--                        }-->
                <!--                        google.maps.event.addDomListener(window, "load", initialize);-->
                <!--                    </script> --}}-->

                <!--                    <div class="input_box">-->
                <!--                        <div class="input-form">-->
                <!--                            <label for="origin" class="d-block"> Pickup Location:</label>-->
                <!--                            <input type="text" class="effect-8" id="pickup-location" name="origin"-->
                <!--                                placeholder="Ex: 90005 Or Los Angeles" required="" />-->
                <!--                            <small id="errOLoc" class="err-loc"></small>-->
                <!--                            <ul class="suggestions suggestionsTwo"></ul>-->
                <!--                        </div>-->
                <!--                        <small class="errName"-->
                <!--                            style="color: red; font-size: 1rem; margin-left: 3px"></small>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="input_box">-->
                <!--                    <div class="input-form">-->
                <!--                        <label for="destination" class="d-block"> Delivery Location:</label>-->
                <!--                        <input type="text" class="effect-8" id="delivery-location" name="destination"-->
                <!--                            placeholder="Ex: 90005 Or Los Angeles" required="" />-->
                <!--                        <small id="errDLoc" class="err-loc"></small>-->
                <!--                        <ul class="suggestions suggestionsTwo"></ul>-->
                <!--                    </div>-->
                <!--                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>-->
                <!--                </div>-->
                <!--                <div class="">-->
                <!--                    <b>Vehicle Information</b>-->
                <!--                    <br>-->
                <!--                </div>-->
                <!--                <div class="grid grid_3">-->
                <!--                    <div class="input_box">-->
                <!--                        <label for="year">Year</label>-->
                <!--                        <div class="input_">-->
                <!--                            <select class="effect-8 vehicle-year" required="" name="year[]"-->
                <!--                                id="year" aria-required="true">-->
                <!--                                <option value="" selected="" disabled="">Year</option>-->
                <!--                            </select>-->

                <!--                            <script>
                    -- >
                    <
                    !--
                    const currentYear = new Date().getFullYear();
                    -- >
                    <
                    !--
                    const startYear = 1936;
                    -- >
                    <
                    !--
                    const yearSelect = document.getElementById('year');
                    -- >

                    <
                    !--
                    for (let year = currentYear; year >= startYear; year--) {
                        -- >
                        <
                        !--
                        const option = document.createElement('option');
                        -- >
                        <
                        !--option.value = year;
                        -- >
                        <
                        !--option.textContent = year;
                        -- >
                        <
                        !--yearSelect.appendChild(option);
                        -- >
                        <
                        !--
                    }-- >
                    <
                    !--
                </script>-->
                <!--                            <span class="focus-border">-->
                <!--                                <i></i>-->
                <!--                            </span>-->
                <!--                        </div>-->
                <!--                        <small class="errName"-->
                <!--                            style="color: red; font-size: 1rem; margin-left: 3px"></small>-->
                <!--                    </div>-->
                <!--                    <div class="input_box">-->
                <!--                        <label for="make">Make</label>-->
                <!--                        <div class="input_">-->
                <!--                            <select class="effect-8 vehicle-make" requ="" name="make[]"-->
                <!--                                data-placeholder="Make" aria-hidden="true">-->
                <!--                                <option value="0" selected="" disabled=""-->
                <!--                                    data-select2-id="4">-->
                <!--                                    Make</option>-->
                <!--                                <option value="Acura">Acura</option>-->
                <!--                                <option value="Alfa Romeo">Alfa Romeo</option>-->
                <!--                                <option value="Aptera">Aptera</option>-->
                <!--                                <option value="Aston Martin">Aston Martin</option>-->
                <!--                                <option value="Audi">Audi</option>-->
                <!--                                <option value="Austin">Austin</option>-->
                <!--                                <option value="Bentley">Bentley</option>-->
                <!--                                <option value="BMW">BMW</option>-->
                <!--                                <option value="Bugatti">Bugatti</option>-->
                <!--                                <option value="Buick">Buick</option>-->
                <!--                                <option value="Cadillac">Cadillac</option>-->
                <!--                                <option value="Chevrolet">Chevrolet</option>-->
                <!--                                <option value="Chrysler">Chrysler</option>-->
                <!--                                <option value="Citroën">Citroën</option>-->
                <!--                                <option value="Corbin">Corbin</option>-->
                <!--                                <option value="Daewoo">Daewoo</option>-->
                <!--                                <option value="Daihatsu">Daihatsu</option>-->
                <!--                                <option value="Defender">Defender</option>-->
                <!--                                <option value="Dodge">Dodge</option>-->
                <!--                                <option value="Eagle">Eagle</option>-->
                <!--                                <option value="Fairthorpe">Fairthorpe</option>-->
                <!--                                <option value="Ferrari">Ferrari</option>-->
                <!--                                <option value="FIAT">FIAT</option>-->
                <!--                                <option value="Foose">Foose</option>-->
                <!--                                <option value="Ford">Ford</option>-->
                <!--                                <option value="Geo">Geo</option>-->
                <!--                                <option value="GMC">GMC</option>-->
                <!--                                <option value="Hillman">Hillman</option>-->
                <!--                                <option value="Holden">Holden</option>-->
                <!--                                <option value="Honda">Honda</option>-->
                <!--                                <option value="HUMMER">HUMMER</option>-->
                <!--                                <option value="Hyundai">Hyundai</option>-->
                <!--                                <option value="Infiniti">Infiniti</option>-->
                <!--                                <option value="Isuzu">Isuzu</option>-->
                <!--                                <option value="Jaguar">Jaguar</option>-->
                <!--                                <option value="Jeep">Jeep</option>-->
                <!--                                <option value="Jensen">Jensen</option>-->
                <!--                                <option value="Kia">Kia</option>-->
                <!--                                <option value="Lamborghini">Lamborghini</option>-->
                <!--                                <option value="Lamborghini,Coupé">Lamborghini,Coupé</option>-->
                <!--                                <option value="Land Rover">Land Rover</option>-->
                <!--                                <option value="Lexus">Lexus</option>-->
                <!--                                <option value="Lincoln">Lincoln</option>-->
                <!--                                <option value="Lotus">Lotus</option>-->
                <!--                                <option value="Lotus Cars">Lotus Cars</option>-->
                <!--                                <option value="Maserati">Maserati</option>-->
                <!--                                <option value="Maybach">Maybach</option>-->
                <!--                                <option value="Mazda">Mazda</option>-->
                <!--                                <option value="McLaren">McLaren</option>-->
                <!--                                <option value="Mercedes-Benz">Mercedes-Benz</option>-->
                <!--                                <option value="Mercury">Mercury</option>-->
                <!--                                <option value="Merkur">Merkur</option>-->
                <!--                                <option value="MG">MG</option>-->
                <!--                                <option value="MINI">MINI</option>-->
                <!--                                <option value="Mitsubishi">Mitsubishi</option>-->
                <!--                                <option value="Morgan">Morgan</option>-->
                <!--                                <option value="Nissan">Nissan</option>-->
                <!--                                <option value="Oldsmobile">Oldsmobile</option>-->
                <!--                                <option value="Panoz">Panoz</option>-->
                <!--                                <option value="Peugeot">Peugeot</option>-->
                <!--                                <option value="Plymouth">Plymouth</option>-->
                <!--                                <option value="Pontiac">Pontiac</option>-->
                <!--                                <option value="Porsche">Porsche</option>-->
                <!--                                <option value="Ram">Ram</option>-->
                <!--                                <option value="Rambler">Rambler</option>-->
                <!--                                <option value="Renault">Renault</option>-->
                <!--                                <option value="Rolls-Royce">Rolls-Royce</option>-->
                <!--                                <option value="Saab">Saab</option>-->
                <!--                                <option value="Saturn">Saturn</option>-->
                <!--                                <option value="Scion">Scion</option>-->
                <!--                                <option value="Shelby">Shelby</option>-->
                <!--                                <option value="Smart">Smart</option>-->
                <!--                                <option value="Spyker">Spyker</option>-->
                <!--                                <option value="Spyker Cars">Spyker Cars</option>-->
                <!--                                <option value="Studebaker">Studebaker</option>-->
                <!--                                <option value="Subaru">Subaru</option>-->
                <!--                                <option value="Suzuki">Suzuki</option>-->
                <!--                                <option value="Tesla">Tesla</option>-->
                <!--                                <option value="Toyota">Toyota</option>-->
                <!--                                <option value="Volkswagen">Volkswagen</option>-->
                <!--                                <option value="Volvo">Volvo</option>-->
                <!--                            </select>-->
                <!--                            <span class="focus-border">-->
                <!--                                <i></i>-->
                <!--                            </span>-->
                <!--                        </div>-->
                <!--                        <small class="errName"-->
                <!--                            style="color: red; font-size: 1rem; margin-left: 3px"></small>-->
                <!--                    </div>-->
                <!--                    <div class="input_box vehicle-model-div">-->
                <!--                        <label for="model">Model</label>-->
                <!--                        <div class="input_">-->
                <!--                            <select class="effect-8" name="model[]" requ=""-->
                <!--                                data-placeholder="Model" aria-hidden="true"></select>-->
                <!--                            <span class="focus-border">-->
                <!--                                <i></i>-->
                <!--                            </span>-->
                <!--                        </div>-->
                <!--                        <small class="errName"-->
                <!--                            style="color: red; font-size: 1rem; margin-left: 3px"></small>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="clearfix"></div>-->
                <!--                <div class="row" style="margin-top:8px; margin-bottom: 8px;">-->
                <!--                    <div class="col-md-6 pd-lr-5 mb-mb-10">-->
                <!--                        <div class="form-wrap form-wrap-validation">-->
                <!--                            <label for="trailer_type" class="checkbox-inline">-->
                <!--                                <input type="checkbox" checked="" name="trailer_type"-->
                <!--                                    class="checkbox-custom" value="1" id="carrier-type"-->
                <!--                                    data-parsley-multiple="carrier-type"><span-->
                <!--                                    class="checkbox-custom-dummy"></span>-->
                <!--                                <span id="carrierType">Open</span> Carrier-->
                <!--                            </label>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="col-md-6 pd-lr-5 mb-mb-10">-->
                <!--                        <div class="form-wrap form-wrap-validation">-->
                <!--                            <label for="condition" class="checkbox-inline">-->
                <!--                                <input type="hidden" name="condition[]" value="1">-->
                <!--                                <input type="checkbox" checked="" name="condition[]"-->
                <!--                                    id="vehicle-condition" class="checkbox-custom" value="1"-->
                <!--                                    data-parsley-multiple="veh-condition0"><span-->
                <!--                                    class="checkbox-custom-dummy"></span>-->
                <!--                                <span id="vcond">Running</span>-->
                <!--                            </label>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <button type="button" class="btn btn-primary" id="addVehicle"-->
                <!--                    style="border-radius:.2rem;" value="1">Add Vehicle-->
                <!--                </button>-->
                <!--                <div class="row">-->
                <!--                    <div id="addMoreVeh"></div>-->
                <!--                    {{-- <div class="col-sm-12 mb-mb-10">-->
                <!--                        <div class="g-recaptcha" id="feedback-recaptcha"-->
                <!--                            data-sitekey="6LeP8KUkAAAAAKR-KmOe7vESgh--xv5Iz9CaypCq">-->
                <!--                        </div>-->
                <!--                    </div> --}}-->
                <!--                </div>-->
                <!--                <hr>-->

                <!--                <button class="btn w-100 btn-primary" id="calculatePriceBttn"  aria-label="Submit Form"-->
                <!--                    style="border-radius: .3rem;" type="submit">Calculate Price-->
                <!--                </button>-->
                <!--            </form>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="quotemain grid grid-col60 vertical__padding content">-->

                <div class="block__inner content  hero-section-form">
                    <!--<h2>Instant Car Shipping Quote!</h2>-->
                    <br>
                    <br>
                    <div class="quotemain__box">
                        <h3>Get Car Quotes <span>- simple, fast &amp; easy!</span></h3>
                        <div class="for-car" id="forCAR">
                            <form action="{{ route('submit.quote') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="vehicle_opt" value="vehicle" hidden>
                                <input type="hidden" name="car_type" value="1" hidden>
                                <div class="grid  form-name-section">
                                    <div class="input_box">
                                        <label class="test">Full Name</label>
                                        <div class="input_">
                                            <input class="test effect-8 requriedfield" id="name" type="text"
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
                                            <input class="effect-8 phone-num" requ="" id="phone"
                                                type="tel" name="phone" maxlength="14" mask="(999) 999-9999"
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
                                </div>
                                <hr />
                                <div class="grid form-location-section">
                                    <div class="input_box">
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
                                    <div class="input_box">
                                        <div class="input-form">
                                            <label class="d-block"> Delivery Location:</label>
                                            <input type="text" class="effect-8" id="delivery-location"
                                                name="destination" placeholder="Ex: 90005 Or Los Angeles"
                                                required="" />
                                            <small id="errDLoc" class="err-loc"></small>
                                            <ul class="suggestions suggestionsTwo"></ul>
                                        </div>
                                        <small class="errName"
                                            style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                    </div>
                                </div>
                                <br>
                                <div class="text-center">
                                    <b>Vehicle Information</b>
                                    <br>
                                    <br>
                                </div>
                                <div class="grid form-vehicle-section">
                                    <div class="input_box ">
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
                                        <small class="errName"
                                            style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                    </div>
                                    <div class="input_box">
                                        <label>Make</label>
                                        <div class="input_">
                                            <select class="effect-8 vehicle-make" requ="" data-placeholder="Make"
                                                aria-hidden="true" name="make[]">
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
                                            <select class="effect-8" requ="" name="model[]"
                                                data-placeholder="Model" aria-hidden="true"></select>
                                            <span class="focus-border">
                                                <i></i>
                                            </span>
                                        </div>
                                        <small class="errName"
                                            style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                    </div>
                                </div>
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
                                        <label for="trailer_type">Trailer Type</label>
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
                                            <label class="form-check-label test" for=""
                                                style="margin: -2px 0px 0px 0px;padding: 0px 0px 0px 6px;"> At
                                                Auction?</label>
                                            <div class="input-form div-link mt-3 input_box" style="display: none;">
                                                <div class="input_">
                                                    <input class="test effect-8 requriedfield" type="url"
                                                        id="link-1" name="link" placeholder="Enter Link" />
                                                    <span class="focus-border">
                                                        <i></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <button type="button" class="btn btn-primary" id="addVehicle"
                                    style="border-radius:.2rem;" value="1">Add Vehicle
                                </button>
                                <div class="clearfix"></div>
                                <hr />
                                <div id="addMoreVeh"></div>
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
                                                <input class="test effect-8 requriedfield" type="text" id="c"
                                                    name="modify_info"
                                                    placeholder="Enter Modification Information" /><span
                                                    class="focus-border">
                                                    <i></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="col-md-6">-->
                                    <!--    <div class="input-form mt-1 input_box">-->
                                    <!--        <label class="d-block"> Image:</label>-->
                                    <!--        <div class="input_" style="padding: 0px 15px 15px 15px;">-->
                                    <!--        <input class=" image_input test effect-8" name="image[]" type="file"-->
                                    <!--            accept="image/*" multiple onchange="previewImages(event)"><span class="focus-border">-->
                                    <!--                <i></i>-->
                                    <!--            </span></div>-->
                                    <!--        <div class="image-preview-container" id="imagePreviewContainer"></div> -->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="col-md-6">
                                        <div class="input-form mt-1 input_box">
                                            <label class="d-block"> Image:</label>
                                            <div class="input_" style="padding: 0px 15px 15px 15px;">
                                                <input class="image_input test effect-8" id="imageInput" name="image[]"
                                                    type="file" accept="image/*" multiple>
                                                <span class="focus-border"><i></i></span>
                                            </div>
                                            <div class="image-preview-container" id="imagePreviewContainer"></div>
                                        </div>
                                    </div>

                                </div>
                                <!--<div class="row" style="padding: 0px 15px 15px 15px;">-->

                                <!--</div>-->
                                {{-- <div class="row" style="margin-top:8px; margin-bottom: 8px;">
                                <div class="col-sm-12 mb-mb-10">
                                    <div class="g-recaptcha" id="feedback-recaptcha"
                                        data-sitekey="6LeP8KUkAAAAAKR-KmOe7vESgh--xv5Iz9CaypCq">
                                    </div>
                                </div>
                            </div> --}}
                                <button class="btn w-100 btn-primary" id="calculatePriceBttn"
                                    style="border-radius: .3rem;" type="submit">Calculate Price
                                </button>
                            </form>
                        </div>
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
                        <a href="{{ route('construction.equipment.transport.shipping') }}" class="btn btn-primary">READ
                            MORE</a>
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
                <form action="/">
                    <div class="call-newsletter">
                        <i class="fa fas fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="Your Email" required="">
                        <button type="submit">SUBSCRIBE</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
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

        document.getElementById("imageInput").addEventListener("change", previewImages);

        function previewImages(event) {
            const input = event.target;
            const previewContainer = document.getElementById("imagePreviewContainer");

            Array.from(input.files).forEach(file => {
                if (!selectedFiles.some(f => f.name === file.name && f.size === file.size && f.lastModified === file
                        .lastModified)) {
                    selectedFiles.push(file);
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        const previewDiv = document.createElement("div");
                        previewDiv.classList.add("image-preview");
                        previewDiv.dataset.fileName = file.name;
                        previewDiv.dataset.fileSize = file.size;
                        previewDiv.innerHTML = `
                        <img src="${e.target.result}" alt="Image Preview">
                        <button class="remove-button">Remove</button>
                    `;

                        previewDiv.querySelector(".remove-button").addEventListener("click", function() {
                            removeImage(file, previewDiv);
                        });

                        previewContainer.appendChild(previewDiv);
                    };

                    reader.readAsDataURL(file);
                }
            });

            updateInputFiles();
        }

        function removeImage(file, previewDiv) {
            selectedFiles = selectedFiles.filter(f => !(f.name === file.name && f.size === file.size && f.lastModified ===
                file.lastModified));
            previewDiv.remove();
            updateInputFiles();
        }

        function updateInputFiles() {
            const dataTransfer = new DataTransfer(); // Create a new FileList
            selectedFiles.forEach(file => dataTransfer.items.add(file));

            document.getElementById("imageInput").files = dataTransfer.files; // Update input field
        }
    </script>
    <script>
        $(document).ready(function() {
            // Attach event handler for the first checkbox
            $(".form-check-input[name='available_at_auction']").change(function() {
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
            $(document).on("change", ".form-check-input[name='available_at_auction']", function() {
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
