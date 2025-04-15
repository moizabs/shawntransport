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
        background: rgba(255, 255, 255, 0.6);
        z-index: 1;
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
</style>
@section('content')
    <section class="banner relative" style="max-height:10rem; min-height:10rem; ">

    </section>
    <main class="main">
        <div class="overlay"></div>
        <div class="quotemain grid grid-col60 vertical__padding content">
            <div class="block__inner">
                <h1 style="font-size: 2pc; text-align: center;">Instant Car Shipping Quote!</h1>
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
                            <div class="text-center">
                                <b>Vehicle Information</b>
                                <br>
                            </div>
                            <div class="grid grid_3">
                                <div class="input_box">
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
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                                <div class="input_box">
                                    <label>Make</label>
                                    <div class="input_">
                                        <select class="effect-8 vehicle-make" requ="" data-placeholder="Make"
                                            aria-hidden="true" name="make[]">
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
                                <div class="input_box vehicle-model-div">
                                    <label>Model</label>
                                    <div class="input_">
                                        <select class="effect-8" requ="" name="model[]" data-placeholder="Model"
                                            aria-hidden="true"></select>
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
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
                            <button type="button" class="btn btn-primary" id="addVehicle" style="border-radius:.2rem;"
                                value="1">Add Vehicle
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
                                        <input  class="test effect-8 requriedfield" type="text" id="c" name="modify_info"
                                            placeholder="Enter Modification Information" /><span class="focus-border">
                                            <i></i>
                                        </span></div>
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
                                            <input class="image_input test effect-8" id="imageInput" name="image[]" type="file" accept="image/*" multiple>
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
    <!--<script>-->
    <!--    let selectedFiles = [];-->

    <!--    function previewImages(e) {-->
    <!--        var t = e.target,-->
    <!--            a = document.getElementById("imagePreviewContainer");-->
    <!--        t.files && Array.from(t.files).forEach((e => {-->
    <!--            if (!selectedFiles.some((t => t.name === e.name && t.size === e.size))) {-->
    <!--                selectedFiles.push(e);-->
    <!--                var t = new FileReader;-->
    <!--                t.onload = function(t) {-->
    <!--                    var n = document.createElement("div");-->
    <!--                    n.classList.add("image-preview"), n.innerHTML =-->
    <!--                        `\n                            <img src="${t.target.result}" alt="Image Preview">\n                            <button class="remove-button" onclick="removeImage('${e.name}', ${e.size})">Remove</button>\n                        `,-->
    <!--                        a.appendChild(n)-->
    <!--                }, t.readAsDataURL(e)-->
    <!--            }-->
    <!--        }))-->
    <!--    }-->

    <!--    function removeImage(e, t) {-->
    <!--        var a = document.getElementById("imagePreviewContainer");-->
    <!--        selectedFiles = selectedFiles.filter((a => !(a.name === e && a.size === t))), a.innerHTML = "", selectedFiles-->
    <!--            .forEach((e => {-->
    <!--                var t = new FileReader;-->
    <!--                t.onload = function(t) {-->
    <!--                    var n = document.createElement("div");-->
    <!--                    n.classList.add("image-preview"), n.innerHTML =-->
    <!--                        `\n                    <img src="${t.target.result}" alt="Image Preview">\n                    <button class="remove-button" onclick="removeImage('${e.name}', ${e.size})">Remove</button>\n                `,-->
    <!--                        a.appendChild(n)-->
    <!--                }, t.readAsDataURL(e)-->
    <!--            }))-->
    <!--    }-->
    <!--</script>-->
    <script>
    let selectedFiles = [];

    document.getElementById("imageInput").addEventListener("change", previewImages);

    function previewImages(event) {
        const input = event.target;
        const previewContainer = document.getElementById("imagePreviewContainer");

        Array.from(input.files).forEach(file => {
            if (!selectedFiles.some(f => f.name === file.name && f.size === file.size && f.lastModified === file.lastModified)) {
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
        selectedFiles = selectedFiles.filter(f => !(f.name === file.name && f.size === file.size && f.lastModified === file.lastModified));
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
