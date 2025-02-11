function removeField(id) {
    id = pad(id);
    $(`#field${id}`).remove();
}

function pad(d) {
    return (d < 10) ? '0' + d.toString() : d.toString();
}

$(document).ready(function () {
    $("#addVehicle").click(function () {
        var no = $(this).val();
        no = ++no;
        sno = +no;
        $(this).val(no);
        no = pad(no);
        $("#addMoreVeh").append(` 
            <div id="field${no}">
                <input type="hidden" name="count[]">
                <br>
                <div><b>Equipment #${no}</b></div>
                <div class="grid grid_3">
                                <div class="input_box " style="    grid-column: 2 span;">
                                    <label>Year, Make & Model</label>
                                    <div class="input_">
                                        <input class="effect-8" required type="text" name="destination"
                                            autocomplete="off" placeholder="Enter Equipment Year, Make & Model" required=""
                                            aria-required="true">
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                                <div class="input_box">
                                    <label>Trailer Type</label>
                                    <div class="input_">
                                        <select class="effect-8"  id="year" required="" aria-required="true">
                                            <option value="0" selected="" disabled="" data-select2-id="2">Select</option>
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
                                    <small class="errName"
                                        style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                            </div>
                            <div class="grid grid_3">
                                <div class="input_box ">
                                    <label>Length</label>
                                    <div class="input_">
                                        <input class="effect-8" type="text" name="lengthft[]" id="length" mask="999ft. 99in" required="" aria-required="true">
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div> 
                                <div class="input_box ">
                                    <label>Width</label>
                                    <div class="input_">
                                        <input class="effect-8"  mask="999ft. 99in" id="width" type="text" name="widthft[]" required="" aria-required="true">
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div> 
                                <div class="input_box ">
                                    <label>Height</label>
                                    <div class="input_">
                                        <input class="effect-8" mask="999ft. 99in" id="height" type="text" name="heightft[]" required="" aria-required="true">
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div> 
                                <div class="input_box ">
                                    <label>Weight</label>
                                    <div class="input_">
                                        <input class="effect-8" id="weight" type="text" name="weight[]" required="" aria-required="true">
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div> 
                                <div class="input_box">
                                    <label>Load Method</label>
                                    <div class="input_">
                                        <select class="effect-8"  data-placeholder="Load Method" data-minimum-results-for-search="5" name="load[]" id="load_method" required="" aria-required="true" data-select2-id="load_method" tabindex="-1" aria-hidden="true">
                                            <option value="0" selected="" disabled="" data-select2-id="4">Select</option>
                                            <option data-select2-id="14">loading_dock</option>
                                            <option data-select2-id="15">crane</option>
                                            <option data-select2-id="16">forklift</option>
                                            <option data-select2-id="17">drive_roll</option>
                                        </select>
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName"
                                        style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                                <div class="input_box">
                                    <label>Unload Method</label>
                                    <div class="input_">
                                        <select class="effect-8"   data-placeholder="Unload Method" data-minimum-results-for-search="5" name="unload[]" id="unload_method" required="" aria-required="true" data-select2-id="unload_method" tabindex="-1" aria-hidden="true">
                                            <option value="0" selected="" disabled="" data-select2-id="6">Select</option>
                        <option data-select2-id="21">loading_dock</option>
                        <option data-select2-id="22">crane</option>
                        <option data-select2-id="23">forklift</option>
                        <option data-select2-id="24">drive_roll</option>
                                        </select>
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName"
                                        style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                            </div>
                	<div class="separator-line"></div>
                </div>     
        `)







        $.each($(".lwh[type='text']"), function(i,v){
            $(this).inputmask({"mask": $(this).attr("mask")})
        });
    
    });
});





    $("#carrier-type").click(function () {
        if ($(this).prop('checked')) {
            $("#carrierType").html('Open');
        } else {
            $("#carrierType").html('Enclosed');
        }
    });

    $("#vehicle-condition").click(function () {
        if ($(this).prop('checked')) {
            $("#vcond").html('Running');
            $("#vehicle-condition").val('operable');
        } else {
            $("#vcond").html('Non-Running');
            $("#condition").val('non-running');
        }
    });