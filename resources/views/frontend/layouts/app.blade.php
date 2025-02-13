<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    {{-- <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/main.css"> --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js" type="text/javascript"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <title>Shawn Transport</title>
</head>

<body>

    @include('frontend.partials.header')

    @yield('content')

    @include('frontend.partials.footer')

    <div class="top_side backToTop">
        <i class="fas fa-chevron-up"></i>
    </div>
    <!-- top_side close -->

</body>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="./js/jquery.inputmask.bundle.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/jquery.inputmask.bundle.js') }}"></script>
<script src="{{ asset('js/custom-car2.js') }}"></script>
{{-- <script src="{{ asset('js/custom-heavy2.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>
<script type="text/javascript">
    var onloadCallback = function() {
        grecaptcha.render('feedback-recaptcha', {
            'sitekey': '6LeP8KUkAAAAACA1JTyDs3VLwESJ2puwMcxF6ODZ'
        });
    };

    function removeField(id) {
        id = pad(id);
        $(`#field`).remove();
    }

    function pad(d) {
        return (d < 10) ? '0' + d.toString() : d.toString();
    }

    function getYear() {
        var year = 1993;
        var totalYear = "";
        for (var i = (new Date()).getFullYear(); i >= year; i--) {
            totalYear += `<option value="${i}">${i}</option>`;
        }
        return totalYear;
    }
    $(document).ready(function() {
        $(document).on('change', '.vehicle-year, .vehicle-make', function() {
            var row = $(this).closest('.grid');
            var year = row.find('.vehicle-year').val();
            var makeId = row.find('.vehicle-make').val();
            if (year && makeId) {
                getModel(year, makeId, row);
            }
        });

        function getModel(year, makeId, row) {
            console.log('Fetching models for year:', year, 'make:', makeId);
            $.ajax({
                url: "https://shipa1.com/api/get=models",
                method: 'GET',
                data: {
                    year: year,
                    make: makeId
                },
                success: function(response) {
                    var modelDropdown = row.find('.vehicle-model-dropdown');
                    var modelInput = row.find('.vehicle-model-input');
                    var modelSelect = row.find('.vehicle-model-select');
                    var modelsDropdown = row.find('.vehicle-model-div');
                    modelsDropdown.empty();
                    var selectOptions =
                        '<label>Model</label> <div class="input_"> <select class="effect-8" name="model[]" data-placeholder="Model" id="model" required> <option value="">Select Model</option>';
                    $.each(response, function(index, model) {
                        selectOptions += '<option value="' + model + '">' + model +
                            '</option>';
                    });
                    selectOptions += '</select> <span class="focus-border"> <i></i> </span> </div>';
                    modelsDropdown.html(selectOptions);
                    if (modelDropdown.length && modelInput.length) {
                        modelDropdown.empty();
                        modelDropdown.append(
                            '<li><a class="dropdown-item" data-value="">Select Model</a></li>');
                        $.each(response, function(index, model) {
                            modelDropdown.append(
                                '<li><a class="dropdown-item" data-value="' + model +
                                '">' + model + '</a></li>');
                        });
                        modelInput.on('focus', function() {
                            modelSelect.empty();
                            modelSelect.append('<option value="">Select Model</option>');
                            modelDropdown.show();
                        });
                        modelInput.on('input', function() {
                            var searchTerm = $(this).val().toLowerCase();
                            modelDropdown.find('li').each(function() {
                                var itemText = $(this).text().toLowerCase();
                                if (itemText.indexOf(searchTerm) !== -1 ||
                                    searchTerm === '') {
                                    $(this).show();
                                } else {
                                    $(this).hide();
                                }
                            });
                        });
                        modelDropdown.on('click', 'a.dropdown-item', function(e) {
                            e.preventDefault();
                            var selectedText = $(this).text();
                            var selectedValue = $(this).data('value');
                            modelInput.val(selectedText);
                            modelDropdown.hide();
                            modelSelect.empty();
                            modelSelect.append('<option value="' + selectedValue + '">' +
                                selectedText + '</option>');
                            modelSelect.val(selectedValue);
                        });
                        $(document).on('click', function(e) {
                            if (!modelInput.is(e.target) && !modelDropdown.is(e.target) &&
                                modelDropdown.has(e.target).length === 0) {
                                modelDropdown.hide();
                            }
                        });
                    }
                    if (modelSelect.length) {
                        modelSelect.empty();
                        modelSelect.append('<option value="">Select Model</option>');
                        $.each(response, function(index, model) {
                            modelSelect.append('<option value="' + model + '">' + model +
                                '</option>');
                        });
                        modelSelect.on('change', function() {
                            var selectedModel = $(this).val();
                            modelInput.val(modelSelect.find('option:selected').text());
                        });
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }
        // $("#carrier-type").click(function() {
        //     if ($(this).prop('checked')) {
        //         $("#carrierType").html('Open');
        //     } else {
        //         $("#carrierType").html('Enclosed');
        //     }
        // });
        // $("#vehicle-condition").click(function() {
        //     if ($(this).prop('checked')) {
        //         $("#vcond").html('Running');
        //         $("#vehicle-condition").val('operable');
        //     } else {
        //         $("#vcond").html('Non-Running');
        //         $("#condition").val('non-running');
        //     }
        // });
        // $("#addVehicle").click(function() {
        //     var no = $(this).val();
        //     no = ++no;
        //     $(this).val(no);
        //     no = pad(no);
        //     var years = getYear();
        //     years = years.split('</option><option>');
        //     $("#addMoreVeh").append(`
        //         <div id="field">
        //             <input type="hidden" name="count[]">
        //             <div class="px-4">
        //                 <span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 0px; color: red;" onclick="removeField(${no})"></i></span>
        //             </div>
        //             <div class="grid grid_3 px-4">
        //                 <div class="input_box">
        //                     <label>Year</label>
        //                     <div class="input_">
        //                         <select class="effect-8 vehicle-year" required>
        //                             <option value="" selected disabled>Year</option>
        //                             ${years}
        //                         </select>
        //                         <span class="focus-border"><i></i></span>
        //                     </div>
        //                 </div>
        //                 <div class="input_box">
        //                     <label>Make</label>
        //                     <div class="input_">
        //                         <select class="effect-8 vehicle-make" required>
        //                             <option value="0" selected="" disabled="" data-select2-id="4">Make</option>
        //                             <option value="Acura">Acura</option>
        //                             <option value="Alfa Romeo">Alfa Romeo</option>
        //                             <option value="Aptera">Aptera</option>
        //                             <option value="Aston Martin">Aston Martin</option>
        //                             <option value="Audi">Audi</option>
        //                             <option value="Austin">Austin</option>
        //                             <option value="Bentley">Bentley</option>
        //                             <option value="BMW">BMW</option>
        //                             <option value="Bugatti">Bugatti</option>
        //                             <option value="Buick">Buick</option>
        //                             <option value="Cadillac">Cadillac</option>
        //                             <option value="Chevrolet">Chevrolet</option>
        //                             <option value="Chrysler">Chrysler</option>
        //                             <option value="Citroën">Citroën</option>
        //                             <option value="Corbin">Corbin</option>
        //                             <option value="Daewoo">Daewoo</option>
        //                             <option value="Daihatsu">Daihatsu</option>
        //                             <option value="Defender">Defender</option>
        //                             <option value="Dodge">Dodge</option>
        //                             <option value="Eagle">Eagle</option>
        //                             <option value="Fairthorpe">Fairthorpe</option>
        //                             <option value="Ferrari">Ferrari</option>
        //                             <option value="FIAT">FIAT</option>
        //                             <option value="Foose">Foose</option>
        //                             <option value="Ford">Ford</option>
        //                             <option value="Geo">Geo</option>
        //                             <option value="GMC">GMC</option>
        //                             <option value="Hillman">Hillman</option>
        //                             <option value="Holden">Holden</option>
        //                             <option value="Honda">Honda</option>
        //                             <option value="HUMMER">HUMMER</option>
        //                             <option value="Hyundai">Hyundai</option>
        //                             <option value="Infiniti">Infiniti</option>
        //                             <option value="Isuzu">Isuzu</option>
        //                             <option value="Jaguar">Jaguar</option>
        //                             <option value="Jeep">Jeep</option>
        //                             <option value="Jensen">Jensen</option>
        //                             <option value="Kia">Kia</option>
        //                             <option value="Lamborghini">Lamborghini</option>
        //                             <option value="Lamborghini,Coupé">Lamborghini,Coupé</option>
        //                             <option value="Land Rover">Land Rover</option>
        //                             <option value="Lexus">Lexus</option>
        //                             <option value="Lincoln">Lincoln</option>
        //                             <option value="Lotus">Lotus</option>
        //                             <option value="Lotus Cars">Lotus Cars</option>
        //                             <option value="Maserati">Maserati</option>
        //                             <option value="Maybach">Maybach</option>
        //                             <option value="Mazda">Mazda</option>
        //                             <option value="McLaren">McLaren</option>
        //                             <option value="Mercedes-Benz">Mercedes-Benz</option>
        //                             <option value="Mercury">Mercury</option>
        //                             <option value="Merkur">Merkur</option>
        //                             <option value="MG">MG</option>
        //                             <option value="MINI">MINI</option>
        //                             <option value="Mitsubishi">Mitsubishi</option>
        //                             <option value="Morgan">Morgan</option>
        //                             <option value="Nissan">Nissan</option>
        //                             <option value="Oldsmobile">Oldsmobile</option>
        //                             <option value="Panoz">Panoz</option>
        //                             <option value="Peugeot">Peugeot</option>
        //                             <option value="Plymouth">Plymouth</option>
        //                             <option value="Pontiac">Pontiac</option>
        //                             <option value="Porsche">Porsche</option>
        //                             <option value="Ram">Ram</option>
        //                             <option value="Rambler">Rambler</option>
        //                             <option value="Renault">Renault</option>
        //                             <option value="Rolls-Royce">Rolls-Royce</option>
        //                             <option value="Saab">Saab</option>
        //                             <option value="Saturn">Saturn</option>
        //                             <option value="Scion">Scion</option>
        //                             <option value="Shelby">Shelby</option>
        //                             <option value="Smart">Smart</option>
        //                             <option value="Spyker">Spyker</option>
        //                             <option value="Spyker Cars">Spyker Cars</option>
        //                             <option value="Studebaker">Studebaker</option>
        //                             <option value="Subaru">Subaru</option>
        //                             <option value="Suzuki">Suzuki</option>
        //                             <option value="Tesla">Tesla</option>
        //                             <option value="Toyota">Toyota</option>
        //                             <option value="Volkswagen">Volkswagen</option>
        //                             <option value="Volvo">Volvo</option>
        //                         </select>
        //                         <span class="focus-border"><i></i></span>
        //                     </div>
        //                 </div>
        //                 <div class="input_box">
        //                     <label>Model</label>
        //                     <div class="input_">
        //                         <input type="text" class="effect-8 vehicle-model-input" placeholder="Model">
        //                         <ul class="dropdown-menu vehicle-model-dropdown"></ul>
        //                         <select class="vehicle-model-select" style="display:none;">
        //                             <option value="">Select Model</option>
        //                         </select>
        //                         <span class="focus-border"><i></i></span>
        //                     </div>
        //                 </div>
        //                 <div class="flex_ flex_space" style="margin:1rem 0;">
        //                     <label class="checkbox-inline">
        //                         <input type="hidden" value="1" name="veh-condition[${no}]">
        //                         <input type="checkbox" checked="" name="veh-condition[${no}]" id="vehicle-condition${no}"
        //                             class="checkbox-custom" value="1">
        //                         <span class="checkbox-custom-dummy"></span>
        //                         <span id="vcond${no}">Running</span>
        //                     </label>
        //                 </div>
        //             </div>
        //         </div>
        //     `)
        //     $(`#vehicle-condition${no}`).click(function() {
        //         if ($(this).prop('checked')) {
        //             $(`#vcond${no}`).html('Running');
        //             $(`#condition${no}`).val("operable");
        //         } else {
        //             $(`#vcond${no}`).html('Non-Running');
        //             $(`#condition${no}`).val("non-running");
        //         }
        //     });
        // });
    });
</script>
<script>
    $(document).ready(function() {
        const allowedPrefixes = [
            '205', '251', '256', '334', '938', '907', '480', '520', '602', '623', '928', '327', '479',
            '501', '870',
            '209', '213', '279', '310', '323', '341', '408', '415', '424', '442', '510', '530', '559',
            '562', '619',
            '626', '628', '650', '657', '661', '707', '714', '747', '752', '760', '805', '818', '820',
            '831', '858',
            '909', '916', '925', '949', '951', '303', '719', '720', '970', '203', '475', '860', '959',
            '302', '239',
            '305', '321', '352', '386', '407', '448', '561', '656', '727', '754', '772', '786', '813',
            '850', '863',
            '904', '941', '954', '229', '404', '470', '478', '678', '706', '762', '770', '912', '808',
            '208', '986',
            '217', '224', '309', '312', '331', '447', '464', '618', '630', '708', '773', '779', '815',
            '847', '872',
            '219', '260', '317', '463', '574', '765', '812', '930', '319', '515', '563', '641', '712',
            '316', '620',
            '785', '913', '270', '364', '502', '606', '859', '225', '318', '337', '504', '985', '207',
            '240', '301',
            '410', '443', '667', '339', '351', '413', '508', '617', '774', '781', '857', '978', '231',
            '248', '278',
            '313', '517', '586', '616', '679', '734', '810', '906', '947', '989', '218', '320', '507',
            '612', '651',
            '763', '952', '228', '601', '662', '769', '314', '417', '557', '573', '636', '660', '816',
            '406', '308',
            '402', '531', '702', '725', '775', '603', '201', '551', '609', '640', '732', '848', '856',
            '862', '908',
            '973', '505', '575', '212', '315', '332', '347', '516', '518', '585', '607', '631', '646',
            '680', '716',
            '718', '838', '845', '914', '917', '929', '934', '252', '336', '472', '704', '743', '828',
            '910', '919',
            '980', '984', '701', '216', '220', '234', '283', '326', '330', '380', '419', '440', '513',
            '567', '614',
            '740', '937', '405', '539', '572', '580', '918', '458', '503', '541', '971', '215', '223',
            '267', '272',
            '412', '445', '484', '570', '610', '717', '724', '814', '878', '401', '803', '839', '843',
            '854', '864',
            '605', '423', '615', '629', '731', '865', '901', '931', '210', '214', '254', '281', '325',
            '346', '361',
            '409', '430', '432', '469', '512', '682', '713', '726', '737', '806', '817', '830', '832',
            '903', '915',
            '936', '940', '956', '972', '979', '385', '435', '801', '802', '276', '434', '540', '571',
            '703', '757',
            '804', '206', '253', '360', '425', '509', '564', '304', '681', '262', '414', '534', '608',
            '715', '920', '307'
        ];

        function validatePhone() {
            let phone = $("#phone").val().replace(/\D/g, ''); // Remove non-numeric characters
            if (phone.length === 10) {
                let first3Digits = phone.substring(0, 3);
                if (!allowedPrefixes.includes(first3Digits)) {
                    $(".errPhone").text("Invalid phone prefix.");
                    return false;
                } else {
                    $(".errPhone").text(""); // Clear error if valid
                    return true;
                }
            }
            return false;
        }

        function validateEmail() {
            const emailInput = $("#email").val();
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(emailInput)) {
                $(".errEmail").text("Please enter a valid email address.");
                return false;
            } else {
                $(".errEmail").text(""); // Clear error if valid
                return true;
            }
        }

        function checkValidations() {
            if (validatePhone() || validateEmail()) {
                $("#calculatePriceBttn").attr('disabled', false);
            } else {
                $("#calculatePriceBttn").attr('disabled', true);
            }
        }

        $("#phone").on('input', function() {
            checkValidations();
        });

        $("#email").on('input blur', function() {
            checkValidations();
        });

        $("#phone").hover(function() {
            $.each($("#phone[type='tel']"), function() {
                $(this).inputmask({
                    "mask": $(this).attr("mask")
                });
            });
        });

    });



    $(document).ready(function() {
        function updateSuggestions(inputField, suggestionsList) {
            var inputValue = inputField.val();
            $.ajax({
                url: `{{ route('get.zipcodes') }}`,
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    input: inputValue,
                },
                success: function(response) {
                    suggestionsList.empty();

                    $.each(response, function(index, suggestion) {
                        var listItem = $("<li>")
                            .text(suggestion)
                            .click(function() {
                                inputField.val(suggestion);
                                suggestionsList.css("display", "none");
                            });
                        suggestionsList.append(listItem);
                    });
                },
                error: function(xhr, status, error) {
                    console.error("Error:", error);
                },
            });
        }
        $("#pickup-location, #delivery-location").keyup(function() {
            var inputField = $(this);
            var suggestionsList = inputField.siblings(".suggestionsTwo");
            suggestionsList.css("display", "block");
            if (inputField.val() === "") {
                suggestionsList.css("display", "none");
            }
            updateSuggestions(inputField, suggestionsList);
        });
    });
</script>

</html>
