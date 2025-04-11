function removeField(id) {
    id = pad(id);
    $(`#field${id}`).remove();
}

function pad(d) {
    return d < 10 ? "0" + d.toString() : d.toString();
}

function getYear() {
    var year = 1993;
    var totalYear = "";
    for (var i = new Date().getFullYear(); i >= year; i--) {
        totalYear += `<option value="${i}">${i}</option>*^-`;
    }
    return totalYear;
}

$(document).on("change", ".vehicle-year, .vehicle-make", function () {
    var year = $("#year").val(); // Get the selected year
    var makeId = $(".vehicle-make").val(); // Get the selected make

    if (year && makeId) {
        var parentDiv = $(this).closest(".vehicle-field-group");
        getModel(year, makeId, parentDiv); // Call the getModel function for the correct parent div
    }

    function getModel(year, makeId, row) {
        console.log("Fetching models for year:", year, "make:", makeId);
        $.ajax({
            url: "https://shipa1.com/api/get=models",
            method: "GET",
            data: {
                year: year,
                make: makeId,
            },
            success: function (response) {
                var modelDropdown = row.find(".vehicle-model-dropdown");
                var modelInput = row.find(".vehicle-model-input");
                var modelSelect = row.find(".vehicle-model-select");
                var modelsDropdown = row.find(".vehicle-model-div");
                modelsDropdown.empty();
                var selectOptions =
                    '<label>Model</label> <div class="input_"> <select class="effect-8" name="model[]" data-placeholder="Model" id="model" required> <option value="">Select Model</option>';
                $.each(response, function (index, model) {
                    selectOptions +=
                        '<option value="' + model + '">' + model + "</option>";
                });
                selectOptions +=
                    '</select> <span class="focus-border"> <i></i> </span> </div>';
                modelsDropdown.html(selectOptions);
                if (modelDropdown.length && modelInput.length) {
                    modelDropdown.empty();
                    modelDropdown.append(
                        '<li><a class="dropdown-item" data-value="">Select Model</a></li>'
                    );
                    $.each(response, function (index, model) {
                        modelDropdown.append(
                            '<li><a class="dropdown-item" data-value="' +
                                model +
                                '">' +
                                model +
                                "</a></li>"
                        );
                    });
                    modelInput.on("focus", function () {
                        modelSelect.empty();
                        modelSelect.append(
                            '<option value="">Select Model</option>'
                        );
                        modelDropdown.show();
                    });
                    modelInput.on("input", function () {
                        var searchTerm = $(this).val().toLowerCase();
                        modelDropdown.find("li").each(function () {
                            var itemText = $(this).text().toLowerCase();
                            if (
                                itemText.indexOf(searchTerm) !== -1 ||
                                searchTerm === ""
                            ) {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });
                    });
                    modelDropdown.on("click", "a.dropdown-item", function (e) {
                        e.preventDefault();
                        var selectedText = $(this).text();
                        var selectedValue = $(this).data("value");
                        modelInput.val(selectedText);
                        modelDropdown.hide();
                        modelSelect.empty();
                        modelSelect.append(
                            '<option value="' +
                                selectedValue +
                                '">' +
                                selectedText +
                                "</option>"
                        );
                        modelSelect.val(selectedValue);
                    });
                    $(document).on("click", function (e) {
                        if (
                            !modelInput.is(e.target) &&
                            !modelDropdown.is(e.target) &&
                            modelDropdown.has(e.target).length === 0
                        ) {
                            modelDropdown.hide();
                        }
                    });
                }
                if (modelSelect.length) {
                    modelSelect.empty();
                    modelSelect.append(
                        '<option value="">Select Model</option>'
                    );
                    $.each(response, function (index, model) {
                        modelSelect.append(
                            '<option value="' +
                                model +
                                '">' +
                                model +
                                "</option>"
                        );
                    });
                    modelSelect.on("change", function () {
                        var selectedModel = $(this).val();
                        modelInput.val(
                            modelSelect.find("option:selected").text()
                        );
                    });
                }
            },
            error: function (xhr) {
                console.log(xhr.responseText);
            },
        });
    }
});
$(document).on("click", "#addVehicle-1", function () {
    var no = $(this).val();
    no = ++no;
    $(this).val(no);
    no = pad(no);
    var years = getYear();
    years = years.split("</option><option>");
    $("#addMoreVeh").append(`
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
                    <label>Modal</label>
                    <div class="input_">
                        <input type="text" class="effect-8" value="" name="model[]">
                        <span class="focus-border">
                            <i></i>
                        </span>
                    </div>
                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                </div>
            </div>
            <div class="grid grid_2 px-4" style="padding: 15px 0px;">
                <div class="flex_ flex_space" style="margin:1rem 0;">
                    <label class="checkbox-inline">
                        <input type="hidden" value="1" name="veh-condition[${no}]">
                        <input type="checkbox" checked="" name="veh-condition[${no}]" id="vehicle-condition${no}"
                            class="checkbox-custom" value="1">
                        <span class="checkbox-custom-dummy"></span>
                        <span id="vcond${no}">Running</span>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="available_at_auction"
                        name="available_at_auction" value="1" />
                    <label class="form-check-label test" for="" style="margin: -2px 0px 0px 0px;padding: 0px 0px 0px 6px;"> Available
                        at Auction?</label>
                    <div class="input-form div-link mt-3 input_box" style="display: none;">
                        <label class="d-block test"> Enter Link:</label>
                        <div class="input_">
                        <input class="test effect-8 requriedfield" type="url" id="link" name="link"
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

$(document).on("click", "#addVehicle", function () {
    var no = $(this).val();
    no = ++no;
    $(this).val(no);
    no = pad(no);
    var years = getYear();
    years = years.split("</option><option>");
    $("#addMoreVeh").append(`
        <div id="field">
            <input type="hidden" name="count[]">
            <div class="px-4">
                <span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 0px; color: red;" onclick="removeField(${no})"></i></span>
            </div>
            <div class="grid form-vehicle-section ">
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
                        <select class="effect-8 vehicle-make" required>
                            <option value="0" selected="" disabled="" data-select2-id="4">Make</option>
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
                        <span class="focus-border"><i></i></span>
                    </div>
                </div>
                <div class="input_box">
                    <label>Model</label>
                    <div class="input_">
                        <input type="text" class="effect-8 vehicle-model-input" placeholder="Model">
                        <ul class="dropdown-menu vehicle-model-dropdown w-100"></ul>
                        <select class="vehicle-model-select" style="display:none;">
                            <option value="">Select Model</option>
                        </select>
                        <span class="focus-border"><i></i></span>
                    </div>
                </div>
            </div>
            <div class="grid grid_3 px-4">
                <div class="flex_ flex_space" style="margin:1rem 0;">
                    <label class="checkbox-inline">
                        <input type="hidden" value="1" name="veh-condition[${no}]">
                        <input type="checkbox" checked="" name="veh-condition[${no}]" id="vehicle-condition${no}"
                            class="checkbox-custom" value="1">
                        <span class="checkbox-custom-dummy"></span>
                        <span id="vcond${no}">Running</span>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="available_at_auction"
                        name="available_at_auction" value="1" />
                    <label class="form-check-label test" for=""> Available
                        at Auction?</label>
                    <div class="input-form div-link mt-3 input_box" style="display: none;">
                        <label class="d-block test"> Enter Link:</label>
                        <div class="input_">
                        <input class="test effect-8 requriedfield" type="url" id="link" name="link"
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

$(document).on("click", "#addHeavy", function () {
    var no = $(this).data("count") || 0;  // Use data attribute to store count
    no++;
    $(this).data("count", no);

    var years = getYear(); 
    years = years.split("</option><option>");

    $("#addMoreVeh").append(`
        <div id="field${no}">
            <input type="hidden" id="countNo" name="count[]" value="${no}">
            <div class="px-4">
                <span class="delete-heavy"><i class="fa fa-trash" style="float: right; margin-top: 0px; color: red;" onclick="removeField(${no})"></i></span>
            </div>
            <div class="grid grid_3">
                <div class="input_box" style="grid-column: 2 span;">
                    <label>Year, Make & Model</label>
                    <div class="input_">
                        <input class="effect-8" required type="text" name="destination[]"
                            autocomplete="off" placeholder="Enter Equipment Year, Make & Model">
                        <span class="focus-border"><i></i></span>
                    </div>
                </div>
                <div class="input_box">
                    <label>Trailer Type</label>
                    <div class="input_">
                        <select class="effect-8" id="trailer_type${no}" required>
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
                        <input class="effect-8" type="text" name="lengthft[]" id="length${no}" required>
                        <span class="focus-border"><i></i></span>
                    </div>
                </div>
                <div class="input_box">
                    <label>Width</label>
                    <div class="input_">
                        <input class="effect-8" type="text" name="widthft[]" id="width${no}" required>
                        <span class="focus-border"><i></i></span>
                    </div>
                </div>
                <div class="input_box">
                    <label>Height</label>
                    <div class="input_">
                        <input class="effect-8" type="text" name="heightft[]" id="height${no}" required>
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
                            <option>loading_dock</option>
                            <option>crane</option>
                            <option>forklift</option>
                            <option>drive_roll</option>
                        </select>
                        <span class="focus-border"><i></i></span>
                    </div>
                </div>
                <div class="input_box">
                    <label>Unload Method</label>
                    <div class="input_">
                        <select class="effect-8" name="unload_method[]" id="unload_method${no}" required>
                            <option value="0" selected disabled>Select</option>
                            <option>loading_dock</option>
                            <option>crane</option>
                            <option>forklift</option>
                            <option>drive_roll</option>
                        </select>
                        <span class="focus-border"><i></i></span>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:8px; margin-bottom: 8px;">
                <div class="col-md-6">
                    <label class="checkbox-inline">
                        <input type="hidden" name="veh-condition[${no}]" value="1">
                        <input type="checkbox" name="veh-condition[${no}]" id="vehicle-condition${no}" class="checkbox-custom" value="1" checked>
                        <span class="checkbox-custom-dummy"></span> <span id="vcond${no}">Running</span>
                    </label>
                </div>
            </div>
        </div>
    `);

    // Event Listener for Checkbox
    $(`#vehicle-condition${no}`).click(function () {
        console.log('oaskdokasd');
        if ($(this).prop("checked")) {
            $(`#vcond${no}`).html("Running");
            $(`input[name="veh-condition[${no}]"]`).val("operable");
        } else {
            $(`#vcond${no}`).html("Non-Running");
            $(`input[name="veh-condition[${no}]"]`).val("non-running");
        }
    });
});

// Function to Remove Field
function removeField(no) {
    $(`#field${no}`).remove();
}

$(document).on("click", ".delete-heavy", function () {
    $(this).closest("div[id^='field']").remove();  
    // $(`#field${no}`).remove();
});

// });

$("#carrier-type").click(function () {
    if ($(this).prop("checked")) {
        $("#carrierType").html("Open");
    } else {
        $("#carrierType").html("Enclosed");
    }
});

$("#vehicle-condition").click(function () {
    if ($(this).prop("checked")) {
        $("#vcond").html("Running");
        $("#vehicle-condition").val("operable");
    } else {
        $("#vcond").html("Non-Running");
        $("#condition").val("non-running");
    }
});
