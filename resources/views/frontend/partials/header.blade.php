<header class="header grid grid-col90">
    <div class="block__inner">
        <div class="header__logo">
            <a href="{{ route('index') }}">
                <h3>Shawn Transport</h3>
            </a>
        </div>
        <!-- close logo -->
        <a href="#" class="nav_toggle">
            <i class="fa-solid fa-bars"></i>
        </a>
        <nav class="header__menu flex_">
            <a class="closeNav"> <i class="fa-solid fa-xmark"></i></a>
            <ul class="header__menu-m list list-inline">
                <li class="list__item">
                    <div class="sideMenuinner flex_ flex_space">
                        <a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'active' : '' }}">Home</a>
                        <a href="#" class="dropdown"><i class="fa-solid fa-chevron-down"></i></a>
                    </div>
                </li>
                <li class="list__item">
                    <div class="sideMenuinner flex_ flex_space">
                        <a href="#">Get Quote</a>
                        <a href="#" class="dropdown"><i class="fa-solid fa-chevron-down"></i></a>
                    </div>
                    <ul>
                        <li><a href="{{ route('car') }}">Car</a></li>
                        <li><a href="{{ route('motorcycle') }}">Motorcycle</a></li>
                        <li><a href="{{ route('heavy') }}">Heavy Equipment</a></li>
                        <li><a href="{{ route('roro.shipping.international') }}">RoRo (International)</a></li>
                        <li><a href="{{ route('atv.utv') }}">ATV/UTV</a></li>
                        <li><a href="{{ route('excavator.shipping.services') }}">Excavator</a></li>
                        <li><a href="{{ route('construction.equipment.transport.shipping') }}">Construction</a></li>
                        <li><a href="{{ route('farm.transport.services') }}">Farm</a></li>
                        <li><a href="{{ route('commercial.truck.transport') }}">Commercial Truck</a></li>
                    </ul>
                </li>
                <li class="list__item">
                    <div class="sideMenuinner flex_ flex_space">
                        <a href="#">SERVICES</a>
                        <a href="#" class="dropdown"><i class="fa-solid fa-chevron-down"></i></a>
                    </div>
                    <ul>
                        <li><a href="{{ route('car.shipping.service') }}">Car Transport Service</a></li>
                        <li><a href="{{ route('motorcycle.shipping.service') }}">Motorcycle Shipping</a></li>
                        <li><a href="{{ route('heavy.equipment.shipping.services') }}">Heavy Equipment</a></li>
                        <li><a href="{{ route('atv.utv') }}">ATV/UTV</a></li>
                        <li><a href="{{ route('excavator.shipping.services') }}">Excavator Shipping</a></li>
                        <li><a href="{{ route('construction.equipment.transport.shipping') }}">Construction Transport</a></li>
                        <li><a href="{{ route('farm.transport.services') }}">Farm Transport</a></li>
                        <li><a href="{{ route('commercial.truck.transport') }}">Commercial Truck Transport</a></li>
                    </ul>
                </li>
                <li class="list__item"><a href="{{ route('auctions.car.transport') }}">Auto Auctions</a></li>
                <li class="list__item"><a href="{{ route('blog') }}">BLOG</a></li>
            </ul>
            <div class="header__contact">
                <div class="right flex_">
                    <div class="call flex_">
                        <div class="left"><i class="fa-solid fa-phone"></i></div>
                        <div class="right">
                            <h5>Toll free</h5>
                            <h3><a href="#">1 (844) 474-4721</a></h3>
                            <h3><a href="mailto:info@shawntransport.com">info@shawntransport.com</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
