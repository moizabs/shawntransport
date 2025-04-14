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
                    <h1>Car Transport Service</h1>
                </div>
                <div class="banner__Txt d-block d-md-none">
                    <h4>Car Transport Service</h4>
                </div>
            </li>
        </ul>
    </section>
    {{-- <main class="main"> --}}
        <div class="container-m innerServices__left">
            <div class="row">
                {{-- <div class=""> --}}
                    <div class="col-lg-8 col-md-8 col-sm-12 my-5">
                        <img src="webImages/services/car.jpeg" style="width: 100%;"  alt="">
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
                    <h4>Delayed Car Shipping &amp; High Prices? Solution - Shawn Transport</h4>
                    <p>
                        US natives have become tired of physical car shipping consignment booking. Because there is waiting,
                        waiting, and waiting. You need an easy way out! So, what’s that way out of the lifetime? Yeah! You
                        got
                        it right, Your trusted car shipping partner, Shawn Transport!
                        Say it if it’s the open/enclosed or city-to-city and state-to-state service. Fast shipping,
                        budget-friendly
                        shipment, and full vehicle insurance covered support on each freight consignment booking. Not
                        Summer,
                        Holidays, or any other peak season; at Shawn Transport this movement is your cost-efficient and best
                        customer service season.
                        Your cargo ship is all set: just one call away! Our instant car shipping booking services,
                        experienced
                        carriers, responsible consignees, and an all-day active customer support team are the forces behind
                        nationwide and global success. At our platform, there are no shipping sorrows, just trust Shawn
                        Transport!</p>
                    <br>
                    {{-- <div class="grid grid_3" style="gap: 2rem;"> --}}
                        <div class="card col-lg-5 col-md-5 col-sm-12 m-4 ">
                            <h2>Easy Booking</h2>
                            <p>Online quote submission, pricing calculation, short booking form, and payment transaction.
                            </p>
                        </div>
                        <div class="card col-lg-5 col-md-5 col-sm-12 m-4">
                            <h2>Swift Transport</h2>
                            <p>Our advanced trucks with expert tracking and fast route selection make transport easy</p>
                        </div>
                    {{-- </div> --}}
                    <br>
                    <h4>Car Hauling Services</h4>
                    <ul class="click_style">
                        <li>
                            <h6>Expert Carriers</h6>
                            <p>California to New York, the longest car shipping, or New York to New Jersey, the shortest
                                vehicle
                                transport, let our expert carriers become your high-speed forces.</p>
                        </li>
                        <li>
                            <h6>High-tech Haulers</h6>
                            <p>Automated features supported cargo. There are enclosed haulers for luxury cars and open
                                trailers for
                                regular vehicles, all integrated with modern tracking technology.</p>
                        </li>
                        <li>
                            <h6>Timely Service</h6>
                            <p>Pick up on time, load on time, and unload on time. Your work is to hire Shawn Transport and
                                get the
                                delivery date for the most convincing shipping experience</p>
                        </li>
                    </ul>
                    <br>
                    <h4>Car Shipping at Shawn Transport</h4>
                    <p>Digital clients are smart clients: they know the better and hassle-free way of booking car shipping
                        services at Shawn Transport. It just takes:</p>
                    <ul class="star">
                        <li>
                            <p> Easy quote submission &amp; order booking.</p>
                        </li>
                        <li>
                            <p> Door-to-door pickup &amp; paperwork.</p>
                        </li>
                        <li>
                            <p>Packaging and automated loading.</p>
                        </li>
                        <li>
                            <p>Uninterrupted journey with active tracking.</p>
                        </li>
                        <li>
                            <p>Delivery under shared deadline.</p>
                        </li>
                    </ul>
                </div>

                <div class="col-12 my-5 d-block d-md-none">
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
