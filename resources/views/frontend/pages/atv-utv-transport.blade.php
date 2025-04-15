@extends('frontend.layouts.app')

<style>
    .container-m {
        width: 80%;
        margin: auto;
    }
</style>
@section('content')
    <section class="banner relative" style="max-height:30rem; min-height:30rem; background: url('webImages/banners/2.jpg');">
        <ul class="list">
            <li>
                <div class="banner__Txt fs-3">
                    <h1 >ATV/UTV Shipping</h1>

                </div>
            </li>
        </ul>
    </section>
    {{-- <main class="main"> --}}
    <div class="container-m innerServices__left">
        <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 my-5 " >
                    <img src="{{ asset('webImages/services/atv.jpg') }}" style="width: 100%; " alt="">
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12 my-5 d-none d-md-block">
                    <img src="{{ asset('webImages/sidebar-quote-promo.gif') }}" style="width: 100%;" alt="">
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

            <h4>ATV/UTV Transport Service</h4>
            <p>Are you in search of a trustworthy <a href="#">ATV/UTV transport company</a> for your shipment?
                Well, then you are on the right platform. Shawn Transport is a dominating vehicle transport company
                providing top-rated ATV/UTV services to its valuable customers at competitive market rates. Choosing
                the right company will save you from trouble, and you will have a remarkable journey. We will share
                some noteworthy factors that come into play whenever you plan to ship an ATV/UTV. The key
                considerations during the ATV shipment that you</p>
            <ol>
                <li>The Company’s experience. </li>
                <li>The References.</li>
                <li>Insurance Policy and coverage.</li>
                <li>Cost of the shipment. </li>
            </ol>
            <p>The first thing that you need to consider when selecting the <a href="#">auto transport
                    company</a> for your ATV shipment is to check the overall company’s performance. For that, you
                can visit the company’s platform and check the section of their feedback and customer ratings. The
                reviews of people are always genuine. They will give you a clear idea of where the company stands in
                the shipping industry. You will find everything you need for your All-Terrain Vehicle Transport at
                our platform as we are a one-stop solution for your shipment. </p>

            <p>Quality is what matters in All-Terrain transportation. A good auto shipping company may charge more
                for the transport journey, but it will not sacrifice for its quality. The company will ship your
                vehicle by secure means and will make sure that there is no damage during the overall shipping
                process. All you need to do is get the instant <a href="#"> online vehicle shipping
                    quotesthrough</a> the company’s platform and choose your desired shipping service. The two main
                services are open-air and enclosed car transport. You can take the help of the vehicle shipping
                calculator to get a rough estimate of your shipment. </p>

            <p>Apart from the company’s experience, ratings, and shipping services, another thing that you need to
                consider when choosing the All-Terrain transport company is the insurance coverage as safety is the
                priority for every customer. We all are vulnerable to unexpected incidents, and all we can do is to
                prepare ourselves for it. After all, you do not want any trouble in the long run, and for that,
                insurance coverage is essential. Before making any step towards the shipment process, ask all the
                necessary questions about the insurance policy. Some shipping companies provide the full insurance
                package. However, it is smart to ask beforehand so to free yourself in case there is any mishap
                during the shipment. You can also have a conversation with the company’s representative if you are
                having any problem understanding the process. </p>
            <p>At last, you can not regret the price factor from the list when talking about All-Terrain
                transportation. The price for the shipment of an ATV depends on several factors such as weight,
                size, shape, and the distance travelled. Apart from that, other things that can impact the price
                includes fuel costs, the time of the year, and other additional insurance. Weight is the main factor
                affecting the price of the shipment. Considering all these factors, Shawn Transport is the all in
                one choice for anyone willing to ship their All-Terrain vehicle. You can get our services all over
                the United States with ease. So, get your quotes and start your car transport journey with us. </p>
            <br>
            {{-- <div class="" style=" col-12"> --}}
                <div class="card col-lg-5 col-md-5 col-sm-12 m-4 ">
                    <h2>Access To All Locations</h2>
                    <p>We currently ship all around the contiguous United States and in case of ATV/UTV it’s easier
                        to reach locations because the trailers aren’t big in size for atv shipping.</p>
                </div>
                <div class="card col-lg-5 col-md-5 col-sm-12 m-4">
                    <h2>Types of ATV/UTV</h2>
                    <p>A wide range of ATV’s and UTV’s could be shipped with the car hauling method of door to door
                        transport such as Quads, Sports ATV etc.</p>
                </div>
            {{-- </div> --}}
            <br>
            <h4>Things To Keep In Mind</h4>
            <ul class="click_style">
                <li>
                    <h6>Transit Insured</h6>
                    <p>One of the things that is a make or break for the customer is whether he would get insurance
                        or not?. At Shawn Transport you will get a full insurance coverage during transit.</p>
                </li>
                <li>
                    <h6>Suspension for Safer Transit</h6>
                    <p>The ATV/UTV hauling service becomes even more safer because of the suspensions our trailers
                        are equipped with. It will nullify the road debris completely.</p>
                </li>
                <li>
                    <h6>Tracking of ATV/UTV</h6>
                    <p>In some of the cases we give you the system to track the activity of the trucker where he has
                        reached & how long would it take to deliver shipment?</p>
                </li>
            </ul>
            <br>
            <h4>Things Required From You</h4>
            <p>Although we take full responsibility for your shipment till its pick-up & delivery but there are some
                things that you need to take care of. Here are they:</p>
            <ul class="star">
                <li>
                    <p>Battery of ATV/UTV must be charged fully in case of starting it.</p>
                </li>
                <li>
                    <p>Tires must be inflated properly.</p>
                </li>
                <li>
                    <p>Evaluate fluid leaks if there are any due to danger.</p>
                </li>
                <li>
                    <p>Ample amount of fuel must be there in case if it needs to be moved.</p>
                </li>
            </ul>
            <br>
            <div class="col-lg-4 col-md-4 col-sm-12 my-5 d-block d-md-none">
                <img src="{{ asset('webImages/sidebar-quote-promo.gif') }}" style="width: 100%;" alt="">
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
