@extends('frontend.layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    .icon {
        font-size: 32px;
        font-weight: bold;
        letter-spacing: 32px;
        position: relative;
    }
    .confetti {
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        width: 100%;
        height: 200px;
        top: 0;
        left: 0;
        overflow: hidden;
        pointer-events: none;
    }
    .confetti-piece {
        position: absolute;
        width: 8px;
        height: 16px;
        top: 0;
        opacity: 0;
    }
    .confetti-piece:nth-child(odd) {
        background: #17d3ff;
    }
    .confetti-piece:nth-child(even) {
        z-index: 1;
    }
    .confetti-piece:nth-child(4n) {
        width: 5px;
        height: 12px;
        animation-duration: 2000ms;
    }
    .confetti-piece:nth-child(3n) {
        width: 3px;
        height: 10px;
        animation-duration: 2500ms;
        animation-delay: 1000ms;
    }
    .confetti-piece:nth-child(4n-7) {
        background: #ff4e91;
    }
    @keyframes makeItRain {
        from {
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
        to {
            transform: translateY(200px);
        }
    }
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-30px);
        }
        60% {
            transform: translateY(-15px);
        }
    }
    .confetti-piece:nth-child(1) {
        left: 7%;
        transform: rotate(-30deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 0ms;
        animation-duration: 1200ms;
    }
    .confetti-piece:nth-child(2) {
        left: 14%;
        transform: rotate(45deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 500ms;
        animation-duration: 700ms;
    }
    .confetti-piece:nth-child(3) {
        left: 21%;
        transform: rotate(-10deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 1000ms;
        animation-duration: 800ms;
    }
    .confetti-piece:nth-child(4) {
        left: 28%;
        transform: rotate(15deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 1500ms;
        animation-duration: 900ms;
    }
    .confetti-piece:nth-child(5) {
        left: 35%;
        transform: rotate(-45deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 200ms;
        animation-duration: 1100ms;
    }
    .confetti-piece:nth-child(6) {
        left: 42%;
        transform: rotate(25deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 400ms;
        animation-duration: 1300ms;
    }
    .confetti-piece:nth-child(7) {
        left: 49%;
        transform: rotate(-35deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 600ms;
        animation-duration: 900ms;
    }
    .confetti-piece:nth-child(8) {
        left: 56%;
        transform: rotate(50deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 800ms;
        animation-duration: 1100ms;
    }
    .confetti-piece:nth-child(9) {
        left: 63%;
        transform: rotate(-20deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 1000ms;
        animation-duration: 1200ms;
    }
    .confetti-piece:nth-child(10) {
        left: 70%;
        transform: rotate(35deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 1200ms;
        animation-duration: 1000ms;
    }
    .confetti-piece:nth-child(11) {
        left: 77%;
        transform: rotate(-50deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 1400ms;
        animation-duration: 800ms;
    }
    .confetti-piece:nth-child(12) {
        left: 84%;
        transform: rotate(30deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 1600ms;
        animation-duration: 900ms;
    }
    .confetti-piece:nth-child(13) {
        left: 91%;
        transform: rotate(-10deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 1800ms;
        animation-duration: 1000ms;
    }
    .custom-flex-layout {
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    }
    
    @media (min-width: 768px) {
        .custom-flex-layout {
            flex-direction: row;
        }
    }
</style>
<section class="banner relative" style="max-height:10rem; min-height:10rem; ">
</section>
<section class="thank-you-section pt-5 pb-0 px-2 position-relative">
    <div class="confetti">
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
    </div>
    <div class="container text-center my-4">
        <div class="row" style="background-image: url(http://www.transparenttextures.com/patterns/brushed-alum.png);border:1px solid #ebe8e8;box-shadow: 0px 0px 51px -5px rgba(0,0,0,1) inset;-webkit-box-shadow: 0px 0px 51px -5px rgb(233 236 239) inset;-moz-box-shadow: 0px 0px 51px -5px rgba(0,0,0,1) inset;border-radius: 25px;padding: 35px;">
            <div class="col-12 mb-4">
                <i class="fas fa-thumbs-up fa-5x mb-4" style="background: linear-gradient(to right, #0067f4, #2bdbdc);  -webkit-background-clip: text;  -webkit-text-fill-color: transparent; animation: bounce 2s infinite;"></i>
                <h2 class="thank-you-title">Thank You!</h2>
                @if (isset($price))
                    <h2 class="thank-you-title">{{ $price }}</h2>
                @endif
                <p class="thank-you-message">
                    We have acknowledged confirmation of your request and will provide your quotation to you shortly on email. In a matter of minutes, a transport specialist will get in touch with you to further explore your requirements.
                </p>
            </div>
            <div class="col-12 custom-flex-layout">
                <div class="mb-3 mb-md-0">
                    <div class="price__cta-btn">
                        <a href="{{ route('index') }}">
                           <button class="btn btn-primary">
                               Back Home
                           </button>
                           </a>
                        </div>
                </div>
                <div>
                    <div class="price__cta-btn">
                        <a href="{{ route('quote.index') }}">
                      <button class="btn btn-primary" type="button">
                          Get New Quote
                      </button>
                      </a>
                  </div>
                </div>
            </div>
        </div> 
    </div>
</section>
<br/>
        <!--<div class="swiper-container swiper-new-1">-->
        <!--    <div class="swiper-wrapper">-->
                
        <!--        <div class="swiper-slide">-->
        <!--            <div class="row">-->
        <!--                <div class="col-lg-12">-->
        <!--                    <div class="card-2 mb-3">-->
        <!--                        <div class="row g-0">-->
        <!--                            <div class="col-sm-6 d-flex align-items-center justify-content-center">-->
        <!--                                <img src="{{ asset('public/webImages/re.png') }}" class="img-fluid rounded-start" alt="Google Reviews">-->
        <!--                            </div>-->
        <!--                            <div class="col-sm-6 d-flex align-items-center justify-content-center">-->
        <!--                                <div class="card-body tj-section-heading mb-0">-->
        <!--                                    <h5 class="card-title sub-title active-shape">John Doe</h5>-->
        <!--                                    <p class="card-text text-dark">"The enclosed transport service was fantastic!........"</p>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
                
        <!--        <div class="swiper-slide">-->
        <!--            <div class="row">-->
        <!--                <div class="col-lg-12">-->
        <!--                    <div class="card-2 mb-3">-->
        <!--                        <div class="row g-0">-->
        <!--                            <div class="col-sm-6 d-flex align-items-center justify-content-center">-->
        <!--                                <img src="{{ asset('public/webImages/re.png') }}" class="img-fluid rounded-start" alt="Trustpilot Reviews">-->
        <!--                            </div>-->
        <!--                            <div class="col-sm-6 d-flex align-items-center justify-content-center">-->
        <!--                                <div class="card-body tj-section-heading mb-0">-->
        <!--                                    <h5 class="card-title sub-title active-shape">Jane Smith</h5>-->
        <!--                                    <p class="card-text text-dark">"Open transport was the best budget-friendly choice for me...."</p>-->
        <!--                                </div>-->
        <!--                            </div>-->
                                    
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
                
        <!--        <div class="swiper-slide">-->
        <!--            <div class="row">-->
        <!--                <div class="col-lg-12">-->
        <!--                    <div class="card-2 mb-3">-->
        <!--                        <div class="row g-0">-->
        <!--                            <div class="col-sm-6 d-flex align-items-center justify-content-center">-->
        <!--                                <img src="{{ asset('public/webImages/re.png') }}" class="img-fluid rounded-start" alt="BBB Reviews">-->
        <!--                            </div>-->
        <!--                            <div class="col-sm-6 d-flex align-items-center justify-content-center">-->
        <!--                                <div class="card-body tj-section-heading mb-0">-->
        <!--                                    <h5 class="card-title sub-title active-shape">Mark Johnson</h5>-->
        <!--                                    <p class="card-text text-dark">"I used their flatbed trailer service for my truck shipment.............."</p>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
                
        <!--        <div class="swiper-slide">-->
        <!--            <div class="row">-->
        <!--                <div class="col-lg-12">-->
        <!--                    <div class="card-2 mb-3">-->
        <!--                        <div class="row g-0">-->
        <!--                            <div class="col-sm-6 d-flex align-items-center justify-content-center">-->
        <!--                                <img src="{{ asset('public/webImages/re.png') }}" class="img-fluid rounded-start" alt="Google Reviews">-->
        <!--                            </div>-->
        <!--                            <div class="col-sm-6 d-flex align-items-center justify-content-center">-->
        <!--                                <div class="card-body tj-section-heading mb-0">-->
        <!--                                    <h5 class="card-title sub-title active-shape">Emily Davis</h5>-->
        <!--                                    <p class="card-text text-dark">"The customer support team was excellent!......"</p>-->
        <!--                                </div>-->
        <!--                            </div>-->
                                    
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
                
        <!--    </div>-->
        <!--</div>-->
    </div>
</section>
<script>
    // document.addEventListener("DOMContentLoaded", (function() {
    //     const e = ".swiper-new-1",
    //         i = document.querySelector(e);
    //     if (i) {
    //         new Swiper(e, {
    //             slidesPerView: 2, // Show 2 slides by default
    //             loop: !0,
    //             spaceBetween: 10,
    //             autoplay: {
    //                 delay: 3000,
    //                 disableOnInteraction: !1
    //             },
    //             speed: 800,
    //             effect: "fade",
    //             fadeEffect: {
    //                 crossFade: !0
    //             },
    //             breakpoints: {
    //                 0: {
    //                     slidesPerView: 1
    //                 },
    //                 600: {
    //                     slidesPerView: 2
    //                 },
    //                 1000: {
    //                     slidesPerView: 2 // Show 2 slides on larger screens
    //                 }
    //             }
    //         });
    //         i.style.cssText = "opacity: 1; visibility: visible;";
    //     }
    // }));
    
    
    // document.addEventListener("DOMContentLoaded", function() {
    //     const swiperContainer = document.querySelector('.swiper-new-1');
    //     const swiper = new Swiper('.swiper-new-1', {
    //         slidesPerView: 3, 
    //         loop: true,
    //         spaceBetween: 10, 
    //         autoplay: {
    //             delay: 3000,
    //             disableOnInteraction: false,
    //         },
    //         speed: 800,
    //         breakpoints: {
    //             0: { 
    //                 slidesPerView: 1 
    //             }, 
    //             600: { 
    //                 slidesPerView: 2 
    //             },
    //             1000: { 
    //                 slidesPerView: 2 
    //             }, 
    //         }
    //     });
    //     swiperContainer.style.opacity = '1';
    //     swiperContainer.style.visibility = 'visible';
    // });
</script>

@endsection