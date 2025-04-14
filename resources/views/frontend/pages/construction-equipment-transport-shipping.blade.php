@extends('frontend.layouts.app')
<style>
    .container-m {
        width: 80%;
        margin: auto;
    }
</style>
@section('content')
    <section class="banner relative" style="display: flex;max-height:30rem;min-height:30rem; background-size: cover;justify-content: start;align-items: center;text-wrap-mode: nowrap;
    background: url('webImages/banners/2.jpg')no-repeat center center;">
        <ul class="list">
            <li>
                <div class="banner__Txt d-none d-md-block">
                    <h2>Excavator Shipping Services</h2>
                </div>
                <div class="banner__Txt d-block d-md-none">
                    <h4>Excavator Shipping Services</h4>
                </div>
            </li>
        </ul>
    </section>
    {{-- <main class="main"> --}}
        <div class="container-m innerServices__left">
            <div class="row">
                {{-- <div class="innerServices__left"> --}}
                    <div class="col-lg-8 col-md-8 col-sm-12 my-5">
                        <img src="webImages/services/Transporting-Heavy-Equipment.jpg" style="width: 100%;" alt="">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 my-5 d-none d-md-block">
                        <img src="webImages/sidebar-quote-promo.gif" style="width: 100%;" alt="">
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
                    <h4>Construction Equipment Transport</h4>
                    <p>Heavy equipment shipping and construction work must start at the earliest. Just like shippers and
                        brokers don’t want to waste their time on unwanted delays. Similarly, builders don’t like to have
                        months of work pending. Shawn Transport from the freight and logistics industry understands the
                        situation of the construction industry’s builders. Your construction equipment shipping challenge,
                        our expert transport service; let’s collaborate.
                        The consignment of cranes, wheeled loaders, excavators, trenchers, and drum trucks is common in the
                        USA for city-to-city or state-to-state transport. Shawn Transport can also ship your drilling
                        equipment, scrapers, asphalt pavers, and any other heavy load without detention or paperwork delays.
                        Connect with the agency that understands the urgency of getting the construction work started not in
                        the nearby regions but in long-distance remote locations in the US. Become the elite partner of
                        Shawn Transport and get the freight delivery services for international roll-on/roll-off.
                    </p>
                    <br>
                    {{-- <div class="grid grid_3" style="gap: 2rem;"> --}}
                        <div class="card col-lg-5 col-md-5 col-sm-12 m-4">
                            <h2>Easy Booking</h2>
                            <p>Online quote is the best way of shipping booking. Go for your construction equipment
                                transport today!</p>
                        </div>
                        <div class="ard col-lg-5 col-md-5 col-sm-12 m-4">
                            <h2>Swift Transport</h2>
                            <p>Live nearby Florida? no problem. Want your equipment transported to remote locations? Call
                                for our experts.</p>
                        </div>
                    {{-- </div> --}}
                    <br>
                    <h4>Factors That Determine The Price</h4>
                    <ul class="click_style">
                        <li>
                            <h6>Dimensions of the equipment</h6>
                            <p>We will need to evaluate the size, length etc. The permits that needs to be taken and if the
                                equipments are large we have to dismantle it first & all these factors increases the price
                                of your shipment.</p>
                        </li>
                        <li>
                            <h6>Trailer Type</h6>
                            <p>From a wide range of options you should choose the trailer which is the most feasible for
                                shipping. You will be guided whether a flatbed trailer is suitable or not etc and will
                                modify the price you’re paying.</p>
                        </li>
                        <li>
                            <h6>International Shipping</h6>
                            <p>Although we don’t ship internationally, but we believe in educating our customers and
                                creating awareness. This is also among the detrimental factors affect your price.</p>
                        </li>
                    </ul>
                    <br>
                    <h4>Types of Construction Equipments shipped?</h4>
                    <p>There is a lot of construction equipment. There are several deifferent kinds of trailers trailers
                        that ship these equipment. These trailers are the main tools to ship these construction equipment:
                    </p>
                    <ul class="star">
                        <li>
                            <p>Excavators and RV’s.</p>
                        </li>
                        <li>
                            <p>Forklifts & Concrete mixers.</p>
                        </li>
                        <li>
                            <p>Bulldozers.</p>
                        </li>
                        <li>
                            <p>Tractors and Concrete mixers.</p>
                        </li>
                    </ul>
                    {{-- <a href="heavy.html"><img src="https://www.shawntransport.com/assets/images/banner-8-800x480.jpg"
                            alt=""></a> --}}
                {{-- </div> --}}
                <div class="col-lg-4 col-md-4 col-sm-12 my-5 d-block d-md-none">
                    <img src="webImages/sidebar-quote-promo.gif" style="width: 100%;" alt="">
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
