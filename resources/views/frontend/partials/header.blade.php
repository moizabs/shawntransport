<style>
    /* .header__logo:before {
        position: absolute;
        background: linear-gradient(359deg, #2bdadc, #0067f4);
        content: '';
        width: 2000px;
        height: 100%;
        transform: skew(324deg);
        z-index: 0;
        top: -18px;
        right: -45px;
        height: 95px;
    } */
</style>
<header class="header grid grid-col90">
    
    <div class="block__inner">
        <div class="header__logo" style="  position: relative; color: white;">
            <a href="{{ route('index') }}"  style="  position: relative; color: white; ">
                {{-- <h3>Shawn Transport</h3> --}}
                <img src="https://i.ibb.co/LzmX0ftf/Shawn-Transport-Logo-removed-background.png"  style="height: 60px; width:200px;" alt="">
            </a>
            {{-- <a href="https://imgbb.com/"><img src="https://i.ibb.co/vxWXw7G9/new-white-logo.png" alt="new-white-logo" border="0"></a> --}}
            {{-- <a href="https://imgbb.com/"><img src="https://i.ibb.co/zhjwqN4X/new-white-logo.png" alt="new-white-logo" border="0"></a> --}}
            {{-- <a href="https://imgbb.com/"><img src="https://i.ibb.co/Rp7VctKN/Untitled-design-6.png" alt="Untitled-design-6" border="0"></a> --}}
            {{-- <a href="https://imgbb.com/"><img src="https://i.ibb.co/LzmX0ftf/Shawn-Transport-Logo-removed-background.png" alt="Shawn-Transport-Logo-removed-background" border="0"></a> --}}
        </div>
        <!-- close logo -->
        <a href="#" class="nav_toggle">
            <i class="fa-solid fa-bars"></i>
        </a>
        <nav class="header__menu flex_">
            <a class="closeNav"> <i class="fa-solid fa-xmark"></i></a>
            <!--<ul class="header__menu-m list list-inline">-->
            <!--    <li class="list__item">-->
            <!--        <div class="sideMenuinner flex_ flex_space">-->
            <!--            <a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'active' : '' }}">Home</a>-->
            <!--            <a href="#" class="dropdown"><i class="fa-solid fa-chevron-down"></i></a>-->
            <!--        </div>-->
            <!--    </li>-->
            <!--    <li class="list__item">-->
            <!--        <div class="sideMenuinner flex_ flex_space">-->
            <!--            <a href="#">Get Quote</a>-->
            <!--            <a href="#" class="dropdown"><i class="fa-solid fa-chevron-down"></i></a>-->
            <!--        </div>-->
            <!--        <ul>-->
            <!--            <li><a href="{{ route('atvutv-quote') }}">ATV/UTV</a></li>-->
            <!--            <li><a href="{{ route('car') }}">Car</a></li>-->
            <!--            <li><a href="{{ route('construction') }}">Construction</a></li>-->
            <!--            <li><a href="{{ route('commercial') }}">Commercial Truck</a></li>-->
            <!--            <li><a href="{{ route('excavator') }}">Excavator</a></li>-->
            <!--            <li><a href="{{ route('farm') }}">Farm</a></li>-->
            <!--            <li><a href="{{ route('heavy') }}">Heavy Equipment</a></li>-->
            <!--            <li><a href="{{ route('motorcycle') }}">Motorcycle</a></li>-->
            <!--        </ul>-->
            <!--    </li>-->
            <!--    <li class="list__item">-->
            <!--        <div class="sideMenuinner flex_ flex_space">-->
            <!--            <a href="#">SERVICES</a>-->
            <!--            <a href="#" class="dropdown"><i class="fa-solid fa-chevron-down"></i></a>-->
            <!--        </div>-->
            <!--        <ul>-->
            <!--            <li><a href="{{ route('atv.utv') }}">ATV/UTV</a></li>-->
            <!--            <li><a href="{{ route('car.shipping.service') }}">Car Transport Service</a></li>-->
            <!--            <li><a href="{{ route('commercial.truck.transport') }}">Commercial Truck Transport</a></li>-->
            <!--            <li><a href="{{ route('construction.equipment.transport.shipping') }}">Construction Transport</a></li>-->
            <!--            <li><a href="{{ route('heavy.equipment.shipping.services') }}">Heavy Equipment</a></li>-->
            <!--            <li><a href="{{ route('motorcycle.shipping.service') }}">Motorcycle Shipping</a></li>-->
            <!--            <li><a href="{{ route('excavator.shipping.services') }}">Excavator Shipping</a></li>-->
            <!--            <li><a href="{{ route('farm.transport.services') }}">Farm Transport</a></li>-->
            <!--            <li><a href="{{ route('roro.shipping.international') }}">RoRo (International)</a></li>-->
            <!--        </ul>-->
            <!--    </li>-->
            <!--    <li class="list__item"><a href="{{ route('auctions.car.transport') }}">Auto Auctions</a></li>-->
                <!--<li class="list__item"><a href="{{ route('blog') }}">BLOG</a></li>-->
            <!--    <li class="list__item"><a href="{{ route('contactUs') }}">Contact</a></li>-->
            <!--</ul>-->
            <ul class="header__menu-m list list-inline">
                <li class="list__item">
                    <div class="sideMenuinner flex_ flex_space">
                        <a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'active' : '' }}">Home</a>
                        <a href="#" class="dropdown"><i class="fa-solid fa-chevron-down"></i></a>
                    </div>
                </li>
                <li class="list__item">
                    <div class="sideMenuinner flex_ flex_space">
                        <a href="{{ route('quote.index') }}" class="{{ request()->routeIs('quote-index') ? 'active' : '' }}">Get Quote</a>
                        <a href="#" class="dropdown"><i class="fa-solid fa-chevron-down"></i></a>
                    </div>
                    <ul>
                        <li><a href="{{ route('atvutv-quote') }}" class="{{ request()->routeIs('atvutv-quote') ? 'active' : '' }}">ATV/UTV</a></li>
                        <li><a href="{{ route('car') }}" class="{{ request()->routeIs('car') ? 'active' : '' }}">Car</a></li>
                        <li><a href="{{ route('construction') }}" class="{{ request()->routeIs('construction') ? 'active' : '' }}">Construction</a></li>
                        <li><a href="{{ route('commercial') }}" class="{{ request()->routeIs('commercial') ? 'active' : '' }}">Commercial Truck</a></li>
                        <li><a href="{{ route('excavator') }}" class="{{ request()->routeIs('excavator') ? 'active' : '' }}">Excavator</a></li>
                        <li><a href="{{ route('farm') }}" class="{{ request()->routeIs('farm') ? 'active' : '' }}">Farm</a></li>
                        <li><a href="{{ route('heavy') }}" class="{{ request()->routeIs('heavy') ? 'active' : '' }}">Heavy Equipment</a></li>
                        <li><a href="{{ route('motorcycle') }}" class="{{ request()->routeIs('motorcycle') ? 'active' : '' }}">Motorcycle</a></li>
                    </ul>
                </li>
                <li class="list__item">
                    <div class="sideMenuinner flex_ flex_space">
                        <a href="#" class="{{ request()->routeIs('atv.utv', 'car.shipping.service', 'commercial.truck.transport', 'construction.equipment.transport.shipping', 'heavy.equipment.shipping.services', 'motorcycle.shipping.service', 'excavator.shipping.services', 'farm.transport.services', 'roro.shipping.international') ? 'active' : '' }}">SERVICES</a>
                        <a href="#" class="dropdown"><i class="fa-solid fa-chevron-down"></i></a>
                    </div>
                    <ul>
                        <li><a href="{{ route('atv.utv') }}" class="{{ request()->routeIs('atv.utv') ? 'active' : '' }}">ATV/UTV</a></li>
                        <li><a href="{{ route('car.shipping.service') }}" class="{{ request()->routeIs('car.shipping.service') ? 'active' : '' }}">Car Transport Service</a></li>
                        <li><a href="{{ route('commercial.truck.transport') }}" class="{{ request()->routeIs('commercial.truck.transport') ? 'active' : '' }}">Commercial Truck Transport</a></li>
                        <li><a href="{{ route('construction.equipment.transport.shipping') }}" class="{{ request()->routeIs('construction.equipment.transport.shipping') ? 'active' : '' }}">Construction Transport</a></li>
                        <li><a href="{{ route('heavy.equipment.shipping.services') }}" class="{{ request()->routeIs('heavy.equipment.shipping.services') ? 'active' : '' }}">Heavy Equipment</a></li>
                        <li><a href="{{ route('motorcycle.shipping.service') }}" class="{{ request()->routeIs('motorcycle.shipping.service') ? 'active' : '' }}">Motorcycle Shipping</a></li>
                        <li><a href="{{ route('excavator.shipping.services') }}" class="{{ request()->routeIs('excavator.shipping.services') ? 'active' : '' }}">Excavator Shipping</a></li>
                        <li><a href="{{ route('farm.transport.services') }}" class="{{ request()->routeIs('farm.transport.services') ? 'active' : '' }}">Farm Transport</a></li>
                        <li><a href="{{ route('roro.shipping.international') }}" class="{{ request()->routeIs('roro.shipping.international') ? 'active' : '' }}">RoRo (International)</a></li>
                    </ul>
                </li>
                <li class="list__item">
                    <a href="{{ route('auctions.car.transport') }}" class="{{ request()->routeIs('auctions.car.transport') ? 'active' : '' }}">Auto Auctions</a>
                </li>
                <!--<li class="list__item"><a href="{{ route('blog') }}">BLOG</a></li>-->
                <li class="list__item">
                    <a href="{{ route('contactUs') }}" class="{{ request()->routeIs('contactUs') ? 'active' : '' }}">Contact</a>
                </li>
            </ul>
            <div class="header__contact">
                <div class="right flex_">
                    <div class="call flex_">
                        <div class="left"><i class="fa-solid fa-phone fa-shake"></i></div>
                        <div class="right">
                            <h5>Toll free</h5>
                            <h3><a href="tel:18444744721">1 (844) 474-4721</a></h3>
                            <h3><a href="mailto:info@shawntransport.com">info@shawntransport.com</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>