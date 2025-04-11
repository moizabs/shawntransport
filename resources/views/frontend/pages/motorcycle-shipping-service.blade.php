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
                    <h2>Motorcycle Transport Service</h2>

                </div>
            </li>
        </ul>
    </section>

    {{-- <main class="main"> --}}
        <div class="container-m innerServices__left">
            <div class="row">
                {{-- <div class="innerServices__left"> --}}
                    <div class="col-lg-8 col-md-8 col-sm-12 my-5 ">
                        <img src="webImages/services/moto.jpeg" style="width: 100%" alt="">
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
                    <h4>Shawn Transport - Your Go-To Expert for Motorcycle Shipping</h4>
                    <p>Your motorcycle is not just your daily transport ride; it’s a memorable road trip buddy. Remember
                        when
                        it backed you to reach on time at long remote destinations, and your love for its color, speed, and
                        flexibility. No one but Shawn Transport understands each customer’s connection with their cafe
                        racers,
                        cruisers, and sports bikes. Here, motorcycle shipping means smoother shipping.</p>
                    <p>What can be your worry for not considering an expert motorcycle shipping service provider like Shawn
                        Transport? Increasing costs, haulers’ security, motorbikes’ protection, delayed services, or no
                        door-to-
                        door delivery option?</p>
                    <p>It’s never necessary to submit your quote on rates a service provider asks you to! Not here at all!
                        Shawn
                        Transport is your platform, just share your demands, learn about the average cost through our online
                        pricing calculator, and book your consignment. Try our services that never disappoint.</p>
                    <br>
                    {{-- <div class="grid grid_3" style="gap: 2rem;"> --}}
                        <div class="card col-lg-5 col-md-5 col-sm-12 m-4">
                            <h2>Your Platform</h2>
                            <p>It just takes one shipping experience to convert from a first-timer to a regular elite
                                client.</p>
                        </div>
                        <div class="card col-lg-5 col-md-5 col-sm-12 m-4">
                            <h2>Your Demands</h2>
                            <p>Delivery in two days, average prices, and special discounts. Just say it!</p>
                        </div>
                    {{-- </div> --}}
                    <br>

                    <h4>Why Shawn Transport?</h4>
                    <ul class="click_style">
                        <li>
                            <h6>Expert Carriers</h6>
                            <p>Our communication during consignment is just not professional friendly. The trusted team of
                                carriers
                                makes sure to be attentive, focused, and cooperative.</p>
                        </li>
                        <li>
                            <h6> High-tech Haulers</h6>
                            <p>Inspecting each shipping hauler is our first go-to practice after order confirmation -
                                automotive
                                loading/unloading with 24/7 active tracking.</p>
                        </li>
                        <li>
                            <h6>Timely Service</h6>
                            <p>It&#39;s not us but our clients who praise our on-time motorcycle pickups, packaging, and
                                speedy delivery
                                services for city-to-city transport.</p>
                        </li>
                    </ul>
                    <br>
                    <h4>How Fast Are Our Services?</h4>
                    <p>At Shawn Transport the speed is everything. To avoid long paperwork and compliance complications
                        here is how we do it:</p>
                    <ul class="star">
                        <li>
                            <p>Easy quote submission &amp; order booking.</p>
                        </li>
                        <li>
                            <p>Door-to-door pickup &amp; paperwork.</p>
                        </li>
                        <li>
                            <p>Packaging and automated loading.</p>
                        </li>
                        <li>
                            <p>Uninterrupted journey with active tracking.</p>
                        </li>
                        <li>
                            <p> Delivery under shared deadline.</p>
                        </li>
                    </ul>
                {{-- </div> --}}
                <div class="col-lg-8 col-md-8 col-sm-12 my-5 d-block d-md-none">
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
    </main>
@endsection
