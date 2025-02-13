@extends('frontend.layouts.app')

@section('content')
<section class="banner relative" style="max-height:10rem; min-height:10rem; ">
    
</section>
    <main class="main">
        <div class="quotemain grid grid-col60 vertical__padding">
            <div class="block__inner">
                <h2>Instant Car Shipping Quote!</h2>
                <div class="quotemain__box">
                    <h3>Get Car Quotes <span>- simple, fast &amp; easy!</span></h3>
                    <div class="for-car" id="forCAR">
                        <form action="#">
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
                                <script type="text/javascript"
                                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDS8r7ZgkAHXuIJKgaYhhF4WccgswI-1F8&v=3.exp&libraries=places">
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
                                </script>
                                <div class="input_box">
                                    <label>Pickup Location</label>
                                    <div class="input_">
                                        <input class="effect-8" requ type="text" id="pick_up" name="origin"
                                            autocomplete="off" placeholder="Ex: 90005 Or Los Angeles" required=""
                                            aria-required="true">
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                            </div>
                            <div class="input_box">
                                <label>Delivery Location</label>
                                <div class="input_">
                                    <input class="effect-8" required type="text" id="pick_up_off" name="destination"
                                        autocomplete="off" placeholder="Ex: 90005 Or Los Angeles" required=""
                                        aria-required="true">
                                    <span class="focus-border">
                                        <i></i>
                                    </span>
                                </div>
                                <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                            </div>
                            <div class="">
                                <b>Vehicle Information</b>
                                <br>
                            </div>
                            <!-- <div class="grid grid_3">
                                <div class="input_box">
                                    <label>Year</label>
                                    <div class="input_">
                                        <select class="effect-8"  id="year" required="" aria-required="true"
                                            aria-hidden="true">
                                            <option value="" selected="" disabled="" data-select2-id="2">Year</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                            <option value="1999">1999</option>
                                            <option value="1998">1998</option>
                                            <option value="1997">1997</option>
                                            <option value="1996">1996</option>
                                            <option value="1995">1995</option>
                                            <option value="1994">1994</option>
                                            <option value="1993">1993</option>
                                            <option value="1992">1992</option>
                                            <option value="1991">1991</option>
                                            <option value="1990">1990</option>
                                            <option value="1989">1989</option>
                                            <option value="1988">1988</option>
                                            <option value="1987">1987</option>
                                            <option value="1986">1986</option>
                                            <option value="1985">1985</option>
                                            <option value="1984">1984</option>
                                            <option value="1983">1983</option>
                                            <option value="1982">1982</option>
                                            <option value="1981">1981</option>
                                            <option value="1980">1980</option>
                                            <option value="1979">1979</option>
                                            <option value="1978">1978</option>
                                            <option value="1977">1977</option>
                                            <option value="1976">1976</option>
                                            <option value="1975">1975</option>
                                            <option value="1974">1974</option>
                                            <option value="1973">1973</option>
                                            <option value="1972">1972</option>
                                            <option value="1971">1971</option>
                                            <option value="1970">1970</option>
                                            <option value="1969">1969</option>
                                            <option value="1968">1968</option>
                                            <option value="1967">1967</option>
                                            <option value="1966">1966</option>
                                            <option value="1965">1965</option>
                                            <option value="1964">1964</option>
                                            <option value="1963">1963</option>
                                            <option value="1962">1962</option>
                                            <option value="1961">1961</option>
                                            <option value="1960">1960</option>
                                            <option value="1959">1959</option>
                                            <option value="1958">1958</option>
                                            <option value="1957">1957</option>
                                            <option value="1956">1956</option>
                                            <option value="1955">1955</option>
                                            <option value="1954">1954</option>
                                            <option value="1953">1953</option>
                                            <option value="1952">1952</option>
                                            <option value="1951">1951</option>
                                            <option value="1950">1950</option>
                                            <option value="1949">1949</option>
                                            <option value="1948">1948</option>
                                            <option value="1947">1947</option>
                                            <option value="1946">1946</option>
                                            <option value="1945">1945</option>
                                            <option value="1944">1944</option>
                                            <option value="1943">1943</option>
                                            <option value="1942">1942</option>
                                            <option value="1941">1941</option>
                                            <option value="1940">1940</option>
                                            <option value="1939">1939</option>
                                            <option value="1938">1938</option>
                                            <option value="1937">1937</option>
                                            <option value="1936">1936</option>
                                        </select>
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
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName"
                                        style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                                <div class="input_box">
                                    <label>Model</label>
                                    <div class="input_">
                                        <select class="effect-8" requ data-placeholder="Modal" aria-hidden="true"></select>
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName"
                                        style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                            </div> -->
                            <div class="grid grid_3">
                                <div class="input_box">
                                    <label>Year</label>
                                    <div class="input_">
                                        <select class="effect-8 vehicle-year" requ="" id="year"
                                            required="" aria-required="true" aria-hidden="true">
                                            <option value="" selected="" disabled="" data-select2-id="2">
                                                Year</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                            <option value="1999">1999</option>
                                            <option value="1998">1998</option>
                                            <option value="1997">1997</option>
                                            <option value="1996">1996</option>
                                            <option value="1995">1995</option>
                                            <option value="1994">1994</option>
                                            <option value="1993">1993</option>
                                            <option value="1992">1992</option>
                                            <option value="1991">1991</option>
                                            <option value="1990">1990</option>
                                            <option value="1989">1989</option>
                                            <option value="1988">1988</option>
                                            <option value="1987">1987</option>
                                            <option value="1986">1986</option>
                                            <option value="1985">1985</option>
                                            <option value="1984">1984</option>
                                            <option value="1983">1983</option>
                                            <option value="1982">1982</option>
                                            <option value="1981">1981</option>
                                            <option value="1980">1980</option>
                                            <option value="1979">1979</option>
                                            <option value="1978">1978</option>
                                            <option value="1977">1977</option>
                                            <option value="1976">1976</option>
                                            <option value="1975">1975</option>
                                            <option value="1974">1974</option>
                                            <option value="1973">1973</option>
                                            <option value="1972">1972</option>
                                            <option value="1971">1971</option>
                                            <option value="1970">1970</option>
                                            <option value="1969">1969</option>
                                            <option value="1968">1968</option>
                                            <option value="1967">1967</option>
                                            <option value="1966">1966</option>
                                            <option value="1965">1965</option>
                                            <option value="1964">1964</option>
                                            <option value="1963">1963</option>
                                            <option value="1962">1962</option>
                                            <option value="1961">1961</option>
                                            <option value="1960">1960</option>
                                            <option value="1959">1959</option>
                                            <option value="1958">1958</option>
                                            <option value="1957">1957</option>
                                            <option value="1956">1956</option>
                                            <option value="1955">1955</option>
                                            <option value="1954">1954</option>
                                            <option value="1953">1953</option>
                                            <option value="1952">1952</option>
                                            <option value="1951">1951</option>
                                            <option value="1950">1950</option>
                                            <option value="1949">1949</option>
                                            <option value="1948">1948</option>
                                            <option value="1947">1947</option>
                                            <option value="1946">1946</option>
                                            <option value="1945">1945</option>
                                            <option value="1944">1944</option>
                                            <option value="1943">1943</option>
                                            <option value="1942">1942</option>
                                            <option value="1941">1941</option>
                                            <option value="1940">1940</option>
                                            <option value="1939">1939</option>
                                            <option value="1938">1938</option>
                                            <option value="1937">1937</option>
                                            <option value="1936">1936</option>
                                        </select>
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                                <div class="input_box">
                                    <label>Make</label>
                                    <div class="input_">
                                        <select class="effect-8 vehicle-make" requ="" data-placeholder="Make"
                                            aria-hidden="true">
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
                                        <select class="effect-8" requ="" data-placeholder="Model"
                                            aria-hidden="true"></select>
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errName" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                            </div>
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
                                <!-- <div class="col-sm-12 mb-mb-10">
                                    <div class="g-recaptcha" id="feedback-recaptcha"
                                         data-sitekey="6LeP8KUkAAAAAKR-KmOe7vESgh--xv5Iz9CaypCq">
                                    </div>
                                </div> -->
                            </div>
                            <hr />
                            <button type="button" class="btn btn-primary" id="addVehicle" style="border-radius:.2rem;"
                                value="1">Add Vehicle
                            </button>
                            <div class="clearfix"></div>
                            <hr />
                            <div id="addMoreVeh"></div>
                            <div class="row" style="margin-top:8px; margin-bottom: 8px;">
                                <div class="col-sm-12 mb-mb-10">
                                    <div class="g-recaptcha" id="feedback-recaptcha"
                                        data-sitekey="6LeP8KUkAAAAAKR-KmOe7vESgh--xv5Iz9CaypCq">
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
@endsection
