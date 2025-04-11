<footer>
    <div class="footer">
        <div class="footer_box_main grid grid-col90">
            <div class="block__inner grid footer_m">
                
                <!-- Company Information -->
                <div class="footer_box">
                    <h2>Shawn Transport</h2>
                    <ul class="list">
                        <li class="flex_">
                            <b>Call: Toll-free</b> 
                            <a href="tel:18444744721">1 (844) 474-4721</a>
                        </li>
                        <li class="flex_">
                            <b>Email:</b> 
                            <a href="mailto:info@shawntransport.com">info@shawntransport.com</a>
                        </li>
                    </ul>
                    <ul class="list list-inline socialIcon">
                        <li class="list__item">
                            <a href="#" target="_blank" title="Follow us on Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="#" target="_blank" title="Follow us on Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="#" target="_blank" title="Follow us on Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="#" target="_blank" title="Connect with us on LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Company Links -->
                <div class="footer_box">
                    <h2>Company</h2>
                    <ul class="foterm">
                        <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                        <li><a href="{{ route('contactUs') }}">Contact</a></li>
                         <li><a href="{{ route('track.order') }}">Track Order</a></li>
                        <!--<li><a href="{{ route('blog') }}">Blog</a></li>-->
                        <!--<li><a href="#faq">FAQ</a></li>-->
                        <li><a href="{{ route('frontend.pages.privacy-policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('frontend.pages.term-condition') }}">Terms of Service</a></li>
                    </ul>
                </div>

                <!-- Services Section -->
                <div class="footer_box">
                    <h2>Our Services</h2>
                    <ul class="foterm">
                        <li><a href="{{ route('car.shipping.service') }}">Car Shipping</a></li>
                        <li><a href="{{ route('motorcycle.shipping.service') }}">Motorcycle Shipping</a></li>
                        <li><a href="{{ route('heavy.equipment.shipping.services') }}">Heavy Equipment Transport</a></li>
                        <li><a href="{{ route('roro.shipping.international') }}">Roro Shipping International</a></li>
                    </ul>
                </div>

                <!-- Newsletter Subscription -->
                <div class="footer_box">
                    <h2>Subscribe to Our Newsletter</h2>
                    <p>Stay updated with our latest news, offers, and transport solutions.</p>
                    <form action="/">
                        <label for="email" class="sr-only">Enter your email address</label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Enter your email" required>
                        <button type="submit">
                            <i class="fa-solid fa-angles-right"></i>
                        </button>
                    </form>
                    <p class="small-text">We respect your privacy. No spam, just valuable updates.</p>
                </div>

            </div> <!-- close footer_box_main -->
        </div>

        <!-- Footer Bottom -->
        <div class="footer_bottom grid grid-col90">
            <div class="block__inner">
                <div class="footer_main flex_ flex_center">
                    <div class="footer_bottom_">
                        <div class="footer_bottom_txt">
                            <h3 class="flex_">
                                <span>© 2025</span> 
                                <a href="/">Shawn Transport</a> 
                                <span> | All Rights Reserved.</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div> 
        </div> <!-- close footer_bottom -->
    </div>
</footer>
