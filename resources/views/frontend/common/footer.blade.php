        <!--footer section start-->
        <footer class="footer-section text-white position-relative">
            <!--footer top start-->
            <div class="footer-top ptb-75" style="background: #0B163F; position: relative; overflow: hidden;">
                <div class="container">
                    <div class="row justify-content-between">
                        <!-- Logo & Description -->
                        <div class="col-md-8 col-lg-3 mb-5 mb-lg-0">
                            <div class="footer-single-col">
                                <a href="{{ route('home') }}" class="d-block mb-3">
                                    <img src="{{asset('frontend/assets/img/logo-white.png')}}" alt="logo" class="img-fluid logo-white" width="150">
                                    {{-- <img src="{{asset('frontend/assets/img/logo-color.png')}}" alt="logo" class="img-fluid logo-color" width="150"> --}}
                                </a>
                                <p class="text-muted">Gateway Automation Ltd is a private limited company, specializing in ERP management systems, software & ITES support.</p>
                                <img src="{{asset('frontend/assets/img/gr-code.jpeg')}}" class="img-fluid mt-3" width="150" alt="QR Code">
                            </div>
                        </div>

                        <!-- About Links -->
                        <div class="col-md-4 mt-lg-3 col-lg-2 mb-4 mb-md-0">
                            <h5 class="footer-title mb-3">About</h5>
                            <ul class="list-unstyled about footer-nav-list mb-0">
                                <li><a href="{{ route('about') }}" class="footer-link">About Us</a></li>
                                <li><a href="{{ route('contact') }}" class="footer-link">Contact</a></li>
                                <li><a href="{{ route('payment') }}" class="footer-link">Online Payment</a></li>
                                <li><a href="{{ route('gallery') }}" class="footer-link">Gallery</a></li>
                            </ul>
                        </div>

                        <!-- Services Links -->
                        <div class="col-md-5 mt-lg-3 col-lg-5 mb-4 mb-md-0">
                            <h5 class="footer-title mb-3">Services</h5>
                            <ul class="list-unstyled footer-nav-list mb-0 row">
                                <div class="col-6">
                                    <li><a href="{{ route('service.account-and-finance') }}" class="footer-link">Account & Finance Management System</a></li>
                                    <li><a href="{{ route('service.hr-and-payroll') }}" class="footer-link">HR Administration & Payroll</a></li>
                                    <li><a href="{{ route('service.real-estate-and-property') }}" class="footer-link">Real Estate & Property</a></li>
                                    <li><a href="{{ route('service.trading-business') }}" class="footer-link">Trading Business</a></li>
                                    <li><a href="{{ route('service.supply-chain-management') }}" class="footer-link">Supply Chain Management</a></li>
                                    <li><a href="{{ route('service.mobile-management-service') }}" class="footer-link">Mobile Phone Management System</a></li>
                                    <li><a href="{{ route('service.procurement-inventory') }}" class="footer-link">Procurement & Inventory Management System</a></li>
                                    <li><a href="{{ route('service.vehicle-management') }}" class="footer-link">Vehicle Management System</a></li>
                                </div>
                                <div class="col-6">
                                    <li><a href="{{ route('service.manufacturing') }}" class="footer-link">Manufacturing</a></li>
                                    <li><a href="{{ route('service.education-management') }}" class="footer-link">Education Management</a></li>
                                    <li><a href="{{ route('service.tea-estate-management') }}" class="footer-link">Tea Estate Management</a></li>
                                    <li><a href="{{ route('service.app-website') }}" class="footer-link">Mobile App & Website</a></li>
                                    <li><a href="{{ route('service.customer-service') }}" class="footer-link">Customer Service & Registration</a></li>
                                    <li><a href="{{ route('service.architectural-eng') }}" class="footer-link">Architectural & Engineering Management System</a></li>
                                    <li><a href="{{ route('service.sales-telesales') }}" class="footer-link">Sales & Telesales Management System</a></li>
                                </div>
                            </ul>
                        </div>

                        <!-- Contact Info -->
                        <div class="col-md-5 mt-lg-3 col-lg-2 mb-4 mb-md-0">
                            <h5 class="footer-title mb-3">Contact</h5>
                            <p class="text-muted mb-1"><strong>TNT:</strong> +8802 41022561</p>
                            <p class="text-muted mb-1"><strong>Hotline:</strong> +880 1324 258751</p>
                            <p class="text-muted mb-1 contact-address"><strong>Address:</strong> Flat# E8, House# 3/43/A, Nirban Shantikunja, Sharakunja, Sultanganj, Rayer Bazar, Dhaka-1209, Bangladesh</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer top end-->

            <!--footer bottom start-->
            <div class="footer-bottom py-4" style="background: #050c25;">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <p class="mb-0 text-muted">&copy; {{ date('Y') }} Gateway Automation Limited. All rights reserved.</p>
                        </div>
                        <div class="col-md-4 col-lg-4 text-md-end text-lg-end mt-3 mt-md-0">
                            <ul class="list-unstyled list-inline mb-0 footer-social-list">
                                <li class="list-inline-item"><a target="_blank" href="https://www.facebook.com/erpgateway" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a target="_blank" href="https://www.instagram.com/gatewayautomationltd/" class="social-link"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a target="_blank" href="https://twitter.com/GatewayAutomat1" class="social-link"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a target="_blank" href="https://www.linkedin.com/in/gateway-automation-ltd-ab2156210" class="social-link"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer bottom end-->
        </footer>

        <!--footer section end-->
        <!--footer section end-->

    </div>
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
        </svg>
    </a>



    <!--build:js-->
    <script src="{{asset('frontend/assets/js/vendors/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendors/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendors/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendors/parallax.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendors/aos.js')}}"></script>
    <script src="{{asset('frontend/assets/js/app.js')}}"></script>
    <script>
        // Get the button
        let mybutton = document.getElementById("back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!--endbuild-->




    {{-- for galleries light box effect or zoom effect  --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const lightboxImage = document.getElementById('lightboxImage');
            const galleryCards = document.querySelectorAll('.gallery-card');

            let scale = 1;
            let isDragging = false;
            let startX, startY;
            let currentX = 0, currentY = 0;

            // Open image in modal
            galleryCards.forEach(card => {
                card.addEventListener('click', function() {
                    const imgSrc = this.getAttribute('data-img');
                    lightboxImage.src = imgSrc;
                    scale = 1;
                    currentX = 0;
                    currentY = 0;
                    lightboxImage.style.transform = `scale(${scale}) translate(0px, 0px)`;
                });
            });

            // Zoom on mouse wheel
            const modal = document.getElementById('lightboxModal');
            modal.addEventListener('wheel', function(e) {
                e.preventDefault();
                const zoomStep = 0.1;
                if (e.deltaY < 0) {
                    scale += zoomStep;
                } else {
                    scale -= zoomStep;
                    if (scale < 1) scale = 1;
                }
                lightboxImage.style.transform = `scale(${scale}) translate(${currentX}px, ${currentY}px)`;
            });

            // Drag to move (left mouse button only)
            lightboxImage.addEventListener('mousedown', function(e) {
                if (e.button !== 0) return; // Only left button
                if (scale <= 1) return; // only allow drag if zoomed in
                isDragging = true;
                startX = e.clientX - currentX;
                startY = e.clientY - currentY;
                lightboxImage.style.cursor = 'grabbing';
                e.preventDefault(); // prevent text/image selection
            });

            document.addEventListener('mousemove', function(e) {
                if (!isDragging) return;
                currentX = e.clientX - startX;
                currentY = e.clientY - startY;
                lightboxImage.style.transform = `scale(${scale}) translate(${currentX}px, ${currentY}px)`;
            });

            document.addEventListener('mouseup', function() {
                isDragging = false;
                lightboxImage.style.cursor = 'grab';
            });

            // Set initial cursor
            lightboxImage.style.cursor = 'grab';
        });
    </script>









    {{-- @livewireScripts --}}
    @stack('scripts')
</body>

</html>