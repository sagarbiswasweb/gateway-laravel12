@extends('frontend.master')

@section('title')
  Contact
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark contact-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mt-5 pt-5">
                        <h1 class="display-5 fw-bold">Contact Us</h1>
                        <p class="lead">At Gateway, we’re always here to help — whether you have questions, are interested in a partnership, or wish to connect as an affiliate. Choose one of the options below to get in touch with us.</p>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div>
        </section>
        <!--page header section end-->


        <!--contact us form start-->
        <section class="contact-us-form pt-60 pb-120" style="background: url('assets/img/shape/contact-us-bg.svg')no-repeat center bottom">
            <div class="container">
                <div class="row justify-content-lg-between align-items-start g-5">

                    <!-- Contact Info -->
                    <div class="col-lg-5 col-md-10 order-2 order-lg-1">
                        
                        <!-- Address -->
                        <div class="contact-us-promo p-4 mb-4 bg-white rounded-4 shadow-sm text-center hover-card">
                            <div class="icon-wrapper mb-3">
                                <img src="{{asset('frontend/assets/img/icon/chat.png')}}" class="img-fluid" width="55" alt="Address Icon" />
                            </div>
                            <h5 class="fw-bold mb-2" style="color: rgb(34, 36, 39)">Address</h5>
                            <p class="text-muted mb-0">
                                Flat# E8, House# 3/43/A <br>
                                Nirban Shantikunja, Sharakunja, Sultanganj <br>
                                Rayer Bazar, Dhaka-1209, Bangladesh
                            </p>
                        </div>

                        <!-- Email -->
                        <div class="contact-us-promo p-4 mb-4 bg-white rounded-4 shadow-sm text-center hover-card">
                            <div class="icon-wrapper mb-3">
                                <img src="{{asset('frontend/assets/img/icon/email.png')}}" class="img-fluid" width="55" alt="Email Icon" />
                            </div>
                            <h5 class="fw-bold mb-2" style="color: rgb(34, 36, 39)">Email Us</h5>
                            <p class="text-muted">
                                Drop us an email at <br>
                                <a href="mailto:info@gatewayautomations.com" class="fw-bold" style="color:#f25767;">
                                    info@gatewayautomations.com
                                </a>
                                <br> We usually respond within 24 hours.
                            </p>
                        </div>

                        <!-- Call -->
                        <div class="contact-us-promo p-4 bg-white rounded-4 shadow-sm text-center hover-card">
                            <div class="icon-wrapper mb-3">
                                <img src="{{asset('frontend/assets/img/icon/call.png')}}" class="img-fluid" width="55" alt="Call Icon" />
                            </div>
                            <h5 class="fw-bold mb-2" style="color: rgb(34, 36, 39)">Call Us</h5>
                            <p class="text-muted mb-3">
                                Our experts are available <br>
                                <strong>Saturday – Thursday</strong><br>
                                <strong>10:00 AM – 6:00 PM (UTC)</strong>
                            </p>
                            <a href="tel:+880241022561" class="d-block fw-bold text-dark mb-1">TNT: +8802 41022561</a>
                            <a href="tel:+8801324258751" class="d-block fw-bold text-dark">Hotline: +880 1324 258751</a>
                        </div>
                    </div>
                    <!-- Contact Form -->
                    <div class="col-lg-6 col-md-8 order-1 order-lg-2" id="contact-form-section">
                        <div class="section-heading mb-4">
                            <h2 class="fw-bold" style="color: rgb(34, 36, 39)">Get in Touch</h2>
                            <p class="text-muted">Have a question or query? Fill out the form below and our team will get back to you as soon as possible.</p>
                        </div>

                        {{-- smooth scroll to the form section if there is any error message in the form --}}
                        @if ($errors->any())
                            <script>
                                document.getElementById('contact-form-section').scrollIntoView({ behavior: 'smooth' });
                            </script>
                        @endif
                        <form action="{{ route('store.message') }}" method="POST" id="contact-form" class="px-3 pb-4 bg-white rounded-4 shadow-lg">
                            @csrf
                            <div class="row g-4 mt-4 p-0">
                                
                                <!-- Name -->
                                <div class="col-sm-12">
                                    <label for="name" class="form-label fw-semibold">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-lg rounded-3 @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" placeholder="Enter your full name">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            <small>{{ $message }}</small>
                                        </div>
                                    @enderror
                                    
                                </div>

                                <!-- Phone -->
                                <div class="col-sm-6">
                                    <label for="phone" class="form-label fw-semibold">Phone</label>
                                    <input type="number" class="form-control form-control-lg rounded-3 @error('phone') is-invalid @enderror" value="{{ old('phone') }}" name="phone" id="phone" placeholder="Enter your phone number">
                                    @error('phone')
                                        <div class="invalid-feedback">
                                            <small>{{ $message }}</small>
                                        </div>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="col-sm-6">
                                    <label for="email" class="form-label fw-semibold">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control form-control-lg rounded-3 @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" id="email" placeholder="Enter your email address">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            <small>{{ $message }}</small>
                                        </div>
                                    @enderror
                                </div>

                                <!-- Message -->
                                <div class="col-12">
                                    <label for="message" class="form-label fw-semibold">Message <span class="text-danger">*</span></label>
                                    <textarea class="form-control form-control-lg rounded-3 @error('message') is-invalid @enderror"  name="message" id="message" placeholder="Write your message here..." rows="6">{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">
                                            <small>{{ $message }}</small>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="text-end">
                                <button type="submit" class="btn contact-submit-btn btn-danger w-100 mt-4 px-5 py-3 rounded-3 fw-semibold">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>

        <section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.0991293363095!2d90.36111540000002!3d23.7438442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf4fb975aad9%3A0x6b510e18b71190fb!2zR2F0ZXdheSBBdXRvbWF0aW9uIEx0ZCAo4KaX4KeH4Kaf4KaT4Kef4KeHIOCmheCmn-Cni-CmruCnh-CmtuCmqCDgprLgpr8uKQ!5e0!3m2!1sen!2sbd!4v1662978772071!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <!--contact us form end-->
    </div>
@endsection