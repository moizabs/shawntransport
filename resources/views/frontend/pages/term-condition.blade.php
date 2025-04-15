@extends('frontend.layouts.app')
<style>
   
</style>
@section('content')
    <section class="banner relative"
        style="
        max-height: 30rem;
        min-height: 30rem;
        background: url('webImages/banners/2.jpg');
      ">
        <ul class="list">
            <li>
                <div class="banner__Txt d-none d-md-block">
                    <h1>Terms & Conditions</h1>
                </div>
                <div class="banner__Txt d-block d-md-none ">
                    <h3 class="mt-5 pt-5">Terms & Conditions</h3>
                </div>
            </li>
        </ul>
    </section>
    <main class="main innerServices__left">
        <div class="innerServices grid grid-col90 vertical__padding" style="">
            <div class="block__inner grid_1">
                <div class="">
                    {{-- <div class=""></div> --}}
                    <div class="">
                        <h4>Terms & Conditions</h4>
                        <p>Welcome to Shawn Transport! By using our services, you agree to comply with the following terms and conditions. Please read them carefully before booking a shipment.</p>
                
                        <br />
                        <h4>1. Service Agreement</h4>
                        <p>By placing a shipping order with Shawn Transport, you acknowledge and agree that we will arrange for the transportation of your vehicle(s) through our network of licensed and insured carriers. Shawn Transport acts as a logistics coordinator and does not operate as a direct carrier.</p>
                
                        <br />
                        <h4>2. Pricing & Payment</h4>
                        <p>All shipping costs are based on vehicle type, distance, transport type (open/enclosed), and market conditions. Quotes are subject to change until a booking is confirmed.</p>
                
                        <br />
                        <h4>3. Cancellations & Refunds</h4>
                        <p>- Orders canceled before dispatch will be eligible for a full refund minus any processing fees.  
                        - Once a vehicle has been dispatched to a carrier, cancellation may result in partial or no refund.</p>
                
                        <br />
                        <h4>4. Vehicle Preparation</h4>
                        <p>Customers must ensure that the vehicle is in operable condition unless non-operable transport has been arranged. Personal belongings left inside the vehicle are not covered under insurance.</p>
                
                        <br />
                        <h4>5. Insurance & Liability</h4>
                        <p>All vehicles transported through Shawn Transport are covered under the carrier’s cargo insurance. However, we recommend maintaining personal insurance as an additional safeguard.</p>
                
                        <br />
                        <h4>6. Contact Information</h4>
                        <p>
                            <b>Toll-Free:</b> 1 (844) 474-4721 <br />
                            <b>Email:</b> <a href="mailto:info@shawntransport.com">info@shawntransport.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
