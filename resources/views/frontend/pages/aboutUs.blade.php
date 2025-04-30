 @extends('frontend.layouts.app')

 @section('content')
     <section class="banner relative"
         style="display: flex;max-height:30rem;min-height:30rem; background-size: cover;justify-content: start;align-items: center;text-wrap-mode: nowrap;
        background: url('webImages/banners/2.jpg')no-repeat center center;">
         <ul class="list">
             <li >
                 <div class="banner__Txt  d-none d-md-block">
                     <h1>About Shawn Transport</h1>
                     
                 </div>
                 <div class="banner__Txt  d-block d-md-none">
                     <h4>About Shawn Transport</h4>
                     
                 </div>
             </li>
         </ul>
     </section>
     <main class="main">
         {{-- <section class="section2 grid grid-col90 vertical__padding relative">
            <div class="block__inner">
                <div class="servicesm">
                    <h2>Pick Your Transport Type</h2>
                    <ul class="list services grid grid_3">
                        <li class="services__item">
                            <img src="{{ asset('webImages/car.png') }}" alt="">
                            <h3>CAR</h3>
                            <p>Sedan, SUV, Pickup etc.</p>
                            <a href="{{ route('car') }}" class="btn btn-primary">GET QUOTE</a>
                        </li>
                        <li class="services__item">
                            <img src="{{ asset('webImages/motorcycle.png') }}" alt="">
                            <h3>MOTORCYCLE</h3>
                            <p>Mopeds, ATV, Power Sports etc.</p>
                            <a href="{{ route('motorcycle') }}" class="btn btn-primary">GET QUOTE</a>
                        </li>
                    </ul>
                    <ul class="list services grid grid_3">
                        <li class="services__item">
                            <img src="{{ asset('webImages/heavy.png') }}" alt="">
                            <h3>HEAVY EQUIP.</h3>
                            <p>Trucks, Bulldozers, Mixer etc.</p>
                            <a href="{{ route('heavy') }}" class="btn btn-primary">GET QUOTE</a>
                        </li>
                        <li class="services__item">
                            <img src="{{ asset('webImages/roro.png') }}" alt="">
                            <h3>RORO</h3>
                            <p>Cars, Trucks, trailers etc.</p>
                            <a href="{{ route('roro.shipping.international') }}" class="btn btn-primary">GET QUOTE</a>
                        </li>
                        <li class="services__item">
                            <img src="{{ asset('webImages/atv.png') }}" alt="">
                            <h3>ATV/UTV</h3>
                            <p>Sport, Quads, Military etc.</p>
                            <a href="{{ route('atvutv-quote') }}" class="btn btn-primary">GET QUOTE</a>

                        </li>
                    </ul>
                    <ul class="list services grid grid_4">
                        <li class="services__item">
                            <img src="{{ asset('webImages/construction.png') }}" alt="">
                            <h3>CONSTRUCTION</h3>
                            <p>Cranes, Drills, Grinders etc.</p>
                            <a href="{{ route('construction') }}" class="btn btn-primary">GET QUOTE</a>
                        </li>
                        <li class="services__item">
                            <img src="{{ asset('webImages/farm.png') }}" alt="">
                            <h3>FARM</h3>
                            <p>Tractor, Planter, Baler etc.</p>
                            <a href="{{ route('farm') }}" class="btn btn-primary">GET QUOTE</a>
                        </li>
                        <li class="services__item">
                            <img src="{{ asset('webImages/excavator.png') }}" alt="">
                            <h3>EXCAVATOR</h3>
                            <p>Digger, Driller, Miners etc.</p>
                            <a href="{{ route('excavator') }}" class="btn btn-primary">GET QUOTE</a>
                        </li>
                        <li class="services__item">
                            <img src="{{ asset('webImages/truck.png') }}" alt="">
                            <h3>TRUCKS</h3>
                            <p>Commercial, Dump Trucks etc.</p>
                            <a href="{{ route('commercial') }}" class="btn btn-primary">GET QUOTE</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section> --}}
         <section class="section3 grid grid-col90 OurTeam3">
             <div class="block__inner">
                 <div class="headingCenter">
                     <h2>Who We Are - Your Trusted Auto Transport Agency </h2>
                     <p>Shawn Transport was a great vision brought into a successful reality decades ago. It was an idea
                         that could revolutionize the freight shipping business for the betterment of transportation
                         shippers.
                         <br>
                         Our directors, the founding pillars, believed that with the expert team, confidence in the business
                         model, a strong network, and great use of digitalization, we can support the B2B and common clients
                         in the shipping industry. As they will no longer need to have physical visits, wait for hours, and
                         face the neglectful behaviors of shipping brokers just for simple auto transport consignments. And
                         here we are, offering sustainable all-in-one transportation services in all fifty states of the
                         USA!
                     </p>
                     <br>
                 </div>
                 <div class="media">
                     <div class="media__img">
                         <img src="webImages/services/ST 1.jpg" alt="">
                     </div>
                     <div class="media__body">
                         <h2>How Are We the Best in the Auto Transport Market?</h2>
                         <p>We offer services that are admired not just by the common customers (car owners, travelers,
                             corporate offices, military personnel, and online buyers). Our digital shipping spot is also
                             famous in the B2B industry in the USA. Here is why we are the top choice in all fifty states:
                         </p>
                         <ul class="star">
                             <li>
                                 <h6>Quotes in Minutes </h6>
                                 <p>You can contact us and book the order in simple steps. The team is ready to serve you
                                     with a door-to-door delivery benefit.</p>
                             </li>
                             <li>
                                 <h6>Free Auto Shipping Consulting </h6>
                                 <p>Got any shipping confusion? Here is our team to suggest the best alternatives for bulk
                                     auto transport or the right deal for urgent shipping.
                                 </p>
                             </li>
                             <li>
                                 <h6>Not Average, But Best Transport Deals </h6>
                                 <p>Try us out - it takes no time. Our vehicle shipping charges are market challenging. Take
                                     advantage of lower shipping cost deals.
                                 </p>
                             </li>
                         </ul>
                     </div>
                 </div>
                 {{-- <div class="media">
                    <div class="media__img">
                        <img src="{{ asset('webImages/services/car.jpeg') }}" alt="">
                    </div>
                    <div class="media__body">
                        <h2>Car Transport Service</h2>
                        <p>Enjoy easeful and relaxed long-distance car shipping with our custom transport solutions.
                            Open, enclosed, and fast shipping. Shawn Transport’s dominance values quality,
                            affordability, and safety. Get an online quote and the comfort of knowing your vehicle is
                            safe, no matter the season or wherever you are going.</p>
                        <a href="{{ route('car.shipping.service') }}" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>
                <div class="media">
                    <div class="media__img">
                        <img src="{{ asset('webImages/services/moto.jpeg') }}" alt="">
                    </div>
                    <div class="media__body">
                        <h2>Motorcycle Shipping</h2>
                        <p>Motorcycle shipping with Shawn Transport is an easy and timely experience. Updated technology
                            and a team of expert carriers at your service. Select open or enclosed with live tracking.
                            Instant shipping price calculation, using your bike details on the internet. Need help? Our
                            helpful freight brokers are there for your queries all the time.</p>
                        <a href="{{ route('motorcycle.shipping.service') }}" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>
                <div class="media">
                    <div class="media__img">
                        <img src="{{ asset('webImages/services/atv.jpg') }}" alt="">
                    </div>
                    <div class="media__body">
                        <h2>ATV/UTV Transport</h2>
                        <p>Safely transport your ATV/UTV with specially designed trailers and professional maneuvering.
                            We ship at a flat rate, without hiccups with 100% nationwide reviews. Wash your ATV, check
                            for scratches, and report mechanical condition before shipping to make it safe to transport.
                            Shawn Transport is here for you to have an on-time, safe delivery.</p>
                        <a href="{{ route('atv.utv') }}" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>
                <div class="media">
                    <div class="media__img">
                        <img src="{{ asset('webImages/services/Transporting-Heavy-Equipment.jpg') }}" alt="">
                    </div>
                    <div class="media__body">
                        <h2>Construction Equipment</h2>
                        <p>Transport construction machinery with professional trailers and experienced operators. Good
                            weight and dimensions decide your best shipping company. We have the best technology for
                            reliable and affordable transportation. Get the best price and a top-notch service where you
                            can be sure your equipment will arrive safely and on time. Shawn Transport is your spot!</p>
                        <a href="{{ route('construction.equipment.transport.shipping') }}" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>
                <div class="media">
                    <div class="media__img">
                        <img src="{{ asset('webImages/services/farm-transportation.png') }}" alt="">
                    </div>
                    <div class="media__body">
                        <h2>Farm Transport</h2>
                        <p>Need farm equipment transport for oversized heavy machines? Shawn Transport got you covered
                            at highly competitive rates. Our expert drivers get your cargo delivered safely and on time.
                            Verify your equipment with precise details. You can get a quote via the web, and our agents
                            will take care of the whole process.</p>
                        <a href="{{ route('farm.transport.services') }}" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>
                <div class="media">
                    <div class="media__img">
                        <img src="{{ asset('webImages/services/excavator-shipping-1.jpg') }}" alt="">
                    </div>
                    <div class="media__body">
                        <h2>Excavator Shipping</h2>
                        <p>The on-road journeys of these excavators require expert handling. Open carrier transport is
                            trustworthy, with no problem dealing with large sizes and weights. Our 24/7 active agents
                            can also get you cost estimates. Look to Shawn Transport for personalized and efficient
                            service with competitive rates. Contact us anytime for shipping consulting assistance or
                            quotes.</p>
                        <a href="{{ route('excavator.shipping.services') }}" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>
                <div class="media">
                    <div class="media__img">
                        <img src="{{ asset('webImages/services/Commercial.jpg') }}" alt="">
                    </div>
                    <div class="media__body">
                        <h2>Commercial Truck Transport</h2>
                        <p>No doubt our commercial truck transport is quick, safe, and trusted throughout the US. Get
                            instant quotes using our shipping calculator. We've partnered with trusted carriers for
                            lightning and stress-free delivery. Costs depend on the distance, weight, and shipping
                            season. Let Shawn Transport offer you the best offers in each freight season.</p>
                        <a href="{{ route('commercial.truck.transport') }}" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>
                <div class="media">
                    <div class="media__img">
                        <img src="{{ asset('webImages/services/Equipment-Hauling-scaled.jpeg') }}" alt="">
                    </div>
                    <div class="media__body">
                        <h2>Heavy Equipment Transport</h2>
                        <p>Transport your heavy equipment safely through specialized carriers like flatbeds. Cheap rates
                            and expert assistance await you. Accurate automated support brings you accurate quotes. Our
                            qualified staff guarantees your on-time, shipment, and high-tech security anywhere in the
                            nation.
                            Let us handle your shipping needs with professional care.</p>
                        <a href="{{ route('heavy.equipment.shipping.services') }}" class="btn btn-primary">READ MORE</a>
                    </div>
                </div> --}}

             </div>
         </section>

         <section class="section4 section2 grid grid-col90" id="about">
             <div class="block__inner">
                 <div class="">
                     <h2 style="margin-bottom: 0;">What Makes Us Offer Reliable Auto Shipping Service </h2>
                     <p>There are reasons for our professionalism, commitment, and fast shipping services.</p>
                     <br>
                 </div>
                 <ul class="list services grid grid_4">
                     <li class="services__item">
                         <h3>Our Mission</h3>
                         <p>We aim to be a super-fast agency, offering all logistics freight-related solutions beyond NANP
                             borders with the help of AI and automation.</p>
                     </li>
                     <li class="services__item">
                         <h3>Our Vision </h3>
                         <p>We envision being the leading vehicle transport brand to bring a customized and automated
                             platform for B2B and B2C marketplaces in the shipping industry.</p>
                     </li>
                     <li class="services__item">
                         <h3>Safety Support</h3>
                         <p>The agency is licensed, and the team is certified. No compliance or security issues during every
                             auto shipping consignment, only secured transport for all. </p>
                     </li>
                     <li class="services__item">
                         <h3>Strong Network </h3>
                         <p>Shawn Transport is a modern world auto shipping broker. The team is connected with 500+
                             shippers, carriers, and consignees in the USA. </p>
                     </li>
                 </ul>
             </div>
         </section>
         <div class="container-m innerServices__left px-5 mx-5">
             <h4>Choose Shawn Transport As Your First Pick</h4>
             <ul class="click_style">
                 <li>
                     <h6>Trained Crew</h6>
                     <p>
                         The team of carriers is trained enough to transport, track, maintain, and communicate at the same
                         time during consignment delivery.
                     </p>
                 </li>
                 <li>
                     <h6>Advanced Trailers </h6>
                     <p>
                         Choose the trailer type on your own. Flatbed, open, enclosed, lowboy, and many more. It’s all about
                         your customized needs.
                     </p>
                 </li>
                 <li>
                     <h6>Full Insurance Support </h6>
                     <p>
                         Don’t worry about your costly, classic, and vintage vehicles. Our team has got your back with
                         high-tech protection and strong insurance coverage.
                     </p>
                 </li>

             </ul>
             <br />
         </div>

         <section class="section5 grid grid_2">
             <div class="section5__left">
                 <img src="{{ asset('webImages/1.jpg') }}" alt="">
             </div>
             <div class="section5__right">
                 <h3>Wanna Transport A Vehicle Today? </h3>
                 <p>Our auto transport carriers are geared up for your vehicle shipping. Hire us by pressing the Get Quote
                     button!</p>
                 <form action="#" method="post">
                     <div class="call-newsletter">
                         <i class="fa fas fa-envelope"></i>
                         <input type="email" name="email" id="email" placeholder="Your Email" required="">
                         <button type="submit">SUBSCRIBE</button>
                     </div>
                 </form>
             </div>
         </section>

     </main>
 @endsection
