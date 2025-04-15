@extends('frontend.layouts.app')

@section('content')
    <section class="banner relative" style="max-height:30rem; min-height:30rem; background: url('webImages/banners/2.jpg');">
        <ul class="list">
            <li>
                <div class="banner__Txt">
                    <h1>REVIEW CUSTOM QUOTES</h1>

                </div>
            </li>
        </ul>
    </section>
    <main class="main">
        <section class="pricePage grid grid-col90 vertical__padding">
            <div class="block__inner grid">
                <div class="headingCenter">
                    <h2>YOUR REQUEST HAS BEEN RECEIVED</h2>
                    <p>Review rates and Book your spot. NO PAYMENT REQUIRED to book your shipment</p>
                    <br>
                </div>
                <div class="card__main w-50 grid grid_2">
                    <div class="card discount">
                        <a href="#"> <img src="webImages/recommended-icon.png" alt="">
                            <h3>$61</h3>
                            <h2>DISCOUNTED PRICE</h2>
                            <p>Once the order is assigned to a carrier, a partial payment will be charged, the balance
                                will be due in cash on delivery.</p>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <h3>$61</h3>
                            <h2>REGULAR PRICE</h2>
                            <p>Once the order is assigned to a carrier, one-time payment in full by using your credit card
                                or debit card will be charged.</p>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="text-center">
                    <ul class="list">
                        <li><b>Service type:</b> <span>Door-to-door</span></li>
                        <li><b>Insurance:</b> <span>Upto $100K insurance included.</span></li>
                    </ul>
                    <br>
                    <a href="#" class="btn btn-info">Continue to Booking</a>
                    <br>
                    <br>
                    <p style="width:50%;margin: 0 auto;">Don't know how it works? That's fine. Book with our Customer
                        Support Representative <i class="fa-solid fa-phone"></i> (240) 489-2099</p>
                </div>
                <br>
                <h2 style="color: #17a2b8; font-size: 2.6rem;">Frequently Asked Questions</h2>
                <br>
                <div class="faq_main">
                    <div class="faq_2">
                        <div class="accordian">
                            <div class="accordian__heading">
                                <h3>How my car will be picked and offloaded?</h3>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="accordian__body">
                                <p>We have created an ecosystem in which all the ways by which a car could be shipped. By
                                    using the platform of Shawn Transport you will be able to find 100’s of car shipping
                                    companies that are willing to provide you with the services of car moving.
                                    <br>
                                    The common method of car hauling service is the door-to-door service. This service is
                                    for those people who need comfort and your vehicle will be directly delivered and
                                    shipped from the comfort of your door.
                                    <br>
                                    Other methods include the terminal-to-terminal or door-to-terminal shipping. If you live
                                    in a congested area then terminal-to-terminal shipping is feasible. It is also the
                                    cheapest method.
                                    <br>For affordable car shipping cost, we also have a way in which you will have your car
                                    picked from your door. But at the time of offloading, you have to visit your nearest
                                    terminal.
                                </p>

                            </div>
                        </div>
                        <div class="accordian">
                            <div class="accordian__heading">
                                <h3>Will I be able to change my pick-up date?</h3>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="accordian__body">
                                <p>Shawn Transport has always put the customer at priority while making policies. You do
                                    have the option to revise the pick-up dates anytime. No additional cost will be charged
                                    due to the variation of the pick-up date.</p>
                            </div>
                        </div>
                        <div class="accordian">
                            <div class="accordian__heading">
                                <h3>Will I get any insurance coverage?</h3>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="accordian__body">
                                <p>Not only you will get the insurance coverage. The carrier company will provide you with
                                    insurance up to a whopping $1 million. As soon as you get in touch with the driver you
                                    will get the documents which are related to your insurance.</p>
                            </div>
                        </div>
                        <div class="accordian">
                            <div class="accordian__heading">
                                <h3>What payment options do I have?</h3>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="accordian__body">
                                <p>You can pay through Paypal and Money order. Visa, Mastercard, Amex and Discover are the
                                    Credit Cards that are acceptable to us.</p>
                            </div>
                        </div>
                        <div class="accordian">
                            <div class="accordian__heading">
                                <h3>How to contact Shawn Transport?</h3>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="accordian__body">
                                <p>Our dedicated personnel is available 24/7 at your service.
                                    Contact us at <a href="#">info@shawntransport.com</a> or call at <a
                                        href="#">(240) 489-2099</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
