@extends('frontend.layouts.app')
<style>
    .container-m {
        width: 80%;
        margin: auto;
    }
</style>
@section('content')
    <section class="banner relative" style="display: flex;max-height:30rem;min-height:30rem; background-size: cover;justify-content: center;align-items: center;text-wrap-mode: nowrap;
    background: url('webImages/banners/2.jpg')no-repeat center center;">
        <ul class="list">
            <li>
                <div class="banner__Txt">
                    <h2>Excavator Shipping Services</h2>

                </div>
            </li>
        </ul>
    </section>
    {{-- <main class="main"> --}}
        <div class="container-m innerServices__left">
            <div class="row">
                {{-- <div class=""> --}}
                    <div class="col-lg-8 col-md-8 col-sm-12 my-5 ">
                        <img src="webImages/services/excavator-shipping-1.jpg" style="width: 100%;" alt="">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 my-5 d-none d-md-block">
                        <img src="webImages/sidebar-quote-promo.gif" alt="">
                        <div class="blog-contact">
                            <h3 class="">Contact Us</h3>
                            <ul class="list">
                                <li style="margin-top:5px;">
                                    <i class="fa-solid fa-phone"></i>
                                    <span>Call Us : <strong>1-844-474-4721</strong></span>
                                </li>
                                <li style="margin-top:5px;">
                                    <i class="fa-solid fa-envelope"></i>
                                    <span>Email : <a href="mailto:quote@shawntransport.com">quote@shawntransport.com</a></span>
                                </li>
                                <li style="margin-top:5px;">
                                    <i class="fa-solid fa-clock"></i>
                                    <span>Sat - Thu: 8AM - 7PM </span>
                                </li>
                            </ul>
                        </div>
    
                    </div>
                    <h4>Need Excavator Shipping Service Now. What to Do?</h4>
                    <p>Do nothing, just reach out to us. Shawn Transport is the element of trust between industry-expert
                        carriers
                        and regular shippers. You don’t need to be a professional shipper to be our ideal client. Just share
                        your
                        excavator shipping requirement along with the pick-up and drop-off date.<br>
                        What are the highest costs for this service? Don’t worry about the charges. If you are a first-timer
                        there is
                        an offer, if you are a regular client, then we have some amazing deals for you. So, what type of
                        excavators
                        do you want us to transport in no time? Is it a crawler or wheeled excavator, or do you need shipper
                        services for your mini or long-reach digger?<br>
                        Don’t need to take stress for the size, shape, and physical conditions of your excavators,
                        bulldozers, and
                        backhoes. Shawn Transport is here to work on it. Just book the services and wait for the early
                        pickup and
                        speedy delivery.</p>
                    <br>
                    {{-- <div class="grid grid_3" style="gap: 2rem;"> --}}
                        <div class="card col-lg-5 col-md-5 col-sm-12 m-4">
                            <h2>Protected Shipment</h2>
                            <p>Whenever we are shipping a heavy equipment our ultimate focus must be on choosing the right
                                trailer for a safer experience during transit & at time of delivery.</p>
                        </div>
                        <div class="card col-lg-5 col-md-5 col-sm-12 m-4">
                            <h2>Trailer for Excavator</h2>
                            <p>Not every trailer that can be used in shipping an excavator. Mostly a lowboy trailer is used
                                while others are used as per the dimensions of the excavator.</p>
                        </div>
                    {{-- </div> --}}
                    <br>
                    <h4>Things You Should Expect</h4>
                    <ul class="click_style">
                        <li>
                            <h6>Dimensions of the Excavator</h6>
                            <p>The first and foremost thing you need to mention is the size, weight etc and will determine
                                what trailer should be used for your excavator. It could be a simple flatbed or lowboy etc.
                            </p>
                        </li>
                        <li>
                            <h6>A Higher Price</h6>
                            <p>You should expect to pay a price slightly higher than other vehicles in all the heavy
                                equipments as they are bigger in size and needs utmost care to be delivered safely.</p>
                        </li>
                        <li>
                            <h6>Ample Time in Delivery</h6>
                            <p>Because of the vehicle’s dimension it takes proper due diligence in order to make the
                                delivery. Due to that it takes ample time for your delivery to get done & you must expect
                                that.</p>
                        </li>
                    </ul>
                    <br>
                    <h4>Factors Affecting the Price?</h4>
                    <p>In order to know the aspects that affect the pricing you need to be aware of them. There are only 4
                        of them in case of an excavator & here are they:</p>
                    <ul class="star">
                        <li>
                            <p>Model and make of the excavator.</p>
                        </li>
                        <li>
                            <p>The dimensions such as size and length etc.</p>
                        </li>
                        <li>
                            <p>Whether the excavator is operational or not?</p>
                        </li>
                        <li>
                            <p>It’s Weight.</p>
                        </li>
                    </ul>
                {{-- </div> --}}
                <div class="col-lg-4 col-md-4 col-sm-12 my-5 d-block d-md-none">
                    <img src="webImages/sidebar-quote-promo.gif" alt="">
                    <div class="blog-contact">
                        <h3 class="">Contact Us</h3>
                        <ul class="list">
                            <li style="margin-top:5px;">
                                <i class="fa-solid fa-phone"></i>
                                <span>Call Us : <strong>1-844-474-4721</strong></span>
                            </li>
                            <li style="margin-top:5px;">
                                <i class="fa-solid fa-envelope"></i>
                                <span>Email : <a href="mailto:quote@shawntransport.com">quote@shawntransport.com</a></span>
                            </li>
                            <li style="margin-top:5px;">
                                <i class="fa-solid fa-clock"></i>
                                <span>Sat - Thu: 8AM - 7PM </span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    {{-- </main> --}}
@endsection
