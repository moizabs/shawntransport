@extends('frontend.layouts.app')
<style>
    .terms-section {
        background: white;
        position: relative;
        /* background: url(https://www.shipa1.com/img/infographics-bg.png) no-repeat center center / cover; */
        padding: 25px 10px;
        text-align: left;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgb(0 0 0 / 3%);
        border: 1px solid #0000001f;
        box-shadow: #00000042 0px 0px 10px 5px;
    }

    .terms-content {
        position: relative;
        z-index: 2;
        max-width: 1100px;
        margin: auto;
    }

    .terms-content h4 {
        font-size: 26px;
        text-transform: uppercase;
        margin-bottom: 15px;
        color: #22c2e1; /* Highlighted Title */
    }

     .terms-content b {
        font-size: 16px;
        line-height: 1.6;
        color:#22c2e1;
    }
        .terms-content p {
        font-size: 16px;
        line-height: 1.6;
    }

    .terms-content a {
        color: #22c2e1;
        font-weight: bold;
        text-decoration: none;
    }

    .terms-content a:hover {
        text-decoration: underline;
    }
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
                <div class="banner__Txt">
                    <h2>Terms & Conditions</h2>
                </div>
            </li>
        </ul>
    </section>
    <main class="main">
        <div class="innerServices grid grid-col90 vertical__padding" style="
    background: linear-gradient(231deg, #2bdadc, #0067f4d9);">
            <div class="block__inner grid_1">
                <div class="terms-section">
                    <div class="overlay"></div>
                    <div class="terms-content">
                        <h4>Terms & Conditions</h4>
                        <p>Welcome to Shawn Transport! By using our services, you agree to comply with the following terms and conditions. Please read them carefully before booking a shipment.</p>
                
                        <br />
                        <b>1. Service Agreement</b>
                        <p>By placing a shipping order with Shawn Transport, you acknowledge and agree that we will arrange for the transportation of your vehicle(s) through our network of licensed and insured carriers. Shawn Transport acts as a logistics coordinator and does not operate as a direct carrier.</p>
                
                        <br />
                        <b>2. Pricing & Payment</b>
                        <p>All shipping costs are based on vehicle type, distance, transport type (open/enclosed), and market conditions. Quotes are subject to change until a booking is confirmed.</p>
                
                        <br />
                        <b>3. Cancellations & Refunds</b>
                        <p>- Orders canceled before dispatch will be eligible for a full refund minus any processing fees.  
                        - Once a vehicle has been dispatched to a carrier, cancellation may result in partial or no refund.</p>
                
                        <br />
                        <b>4. Vehicle Preparation</b>
                        <p>Customers must ensure that the vehicle is in operable condition unless non-operable transport has been arranged. Personal belongings left inside the vehicle are not covered under insurance.</p>
                
                        <br />
                        <b>5. Insurance & Liability</b>
                        <p>All vehicles transported through Shawn Transport are covered under the carrier’s cargo insurance. However, we recommend maintaining personal insurance as an additional safeguard.</p>
                
                        <br />
                        <b>6. Contact Information</b>
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
