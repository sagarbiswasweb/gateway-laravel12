@extends('frontend.master')

@section('title')
  Clients
@endsection

@section('content')
    @push('styles')
        <style>
            .client-list li .single-integration img {
                max-width: 150px;
                max-height: 100px;
            }
        </style>
    @endpush
    <div>
        <!--page header section start-->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark clients-bg ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 pt-5 mt-5">
                        <h1 class="display-5 fw-bold">Our Clients</h1>
                        <p class="lead">Welcome to the forefront of innovation in the ICT sector. Introducing Gateway Automation Ltd, a trailblazer in software solutions and IT-enabled services. </p>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div>
        </section>
        <!--page header section end-->
        <section class="integration-section ptb-120">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-heading">
                            <h2 class="text-center" style="color: rgb(34, 36, 39)">Some of Our Valuable Clients</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="integration-wrapper position-relative w-100">
                                <!--animated shape start-->
                                <ul class="position-absolute animate-element parallax-element shape-service z--1 mt-5">
                                    <li class="layer" data-depth="0.03">
                                        <img src="{{asset('frontend/assets/img/shape/dot-dot-wave-shape.svg')}}" alt="shape" class="img-fluid position-absolute color-shape-3">
                                    </li>
                                    <li class="layer" data-depth="0.03">
                                        <img src="{{asset('frontend/assets/img/color-shape/feature-3.svg')}}" alt="shape" class="img-fluid position-absolute color-shape-3">
                                    </li>
                                </ul>
                                <!--animated shape end-->

                                <!-- Clients Grid -->
                                <div class="row g-4 justify-content-center client-wrapper">
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/ramkrisna.jpg')}}" alt="Ramakrishna Math & Mission Dhaka" class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">Ramakrishna Math & Mission Dhaka</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/jcx.jpg')}}" alt="JCX Developments Ltd" class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">JCX Developments Ltd</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/royal-gold.jpg')}}" alt="Royal Gold Pvt Ltd" class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">Royal Gold Pvt Ltd</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/RI.jpg')}}" alt="Royal International" class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">Royal International</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/.jpg')}}" alt="Chittagong Agro Machinery" class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">Chittagong Agro Machinery</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/ril.jpg')}}" alt="KB Interlining Ltd." class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">KB Interlining Ltd.</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/.jpg')}}" alt="Parts Zone" class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">Parts Zone</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/mazidsons.jpg')}}" alt="Mazid Sons Construction Ltd" class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">Mazid Sons Construction Ltd</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/Momenuddin3.jpg')}}" alt="Momen Uddin Ahmed & Co. Ltd." class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">Momen Uddin Ahmed & Co. Ltd.</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/assu.png')}}" alt="Assurance Developments Ltd" class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">Assurance Developments Ltd</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/merine-city.jpg')}}" alt="Atlantic Properties & Development Ltd" class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">Atlantic Properties & Development Ltd</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/gorai-flims.jpg')}}" alt="Gorai Films" class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">Gorai Films</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/creation.jpg')}}" alt="Creation Developments Ltd" class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">Creation Developments Ltd</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/ramkrisna.jpg')}}" alt="Ramakrishna Math & Mission Dinajpur" class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">Ramakrishna Math & Mission Dinajpur</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/saifan.jpg')}}" alt="Saifan Properties Limited" class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">Saifan Properties Limited</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/mya.jpg')}}" alt="MYA Trading International" class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">MYA Trading International</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/kk.jpg')}}" alt="KK Trade" class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">KK Trade</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/wasa.jpg')}}" alt="W.Rahman & Co." class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">W.Rahman & Co.</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/rkmr.jpg')}}" alt="Ramakrishna Sevashrama Uttara Rowali" class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">Ramakrishna Sevashrama Uttara Rowali</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/doreen-logo.png')}}" alt="Doreen Developments Limited" class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">Doreen Developments Limited</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/ramkrisna.jpg')}}" alt="Ramakrishna Ashrama & Mission Baliati, Manikgonj" class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">Ramakrishna Ashrama & Mission Baliati, Manikgonj</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/infinity.jpg')}}" alt="Infinity Homes Ltd." class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">Infinity Homes Ltd.</h6>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                            <img src="{{asset('frontend/assets/img/clients/modhucity.jpg')}}" alt="Modhu City" class="img-fluid mb-2">
                                            <h6 class="client-name mb-0">Modhu City</h6>
                                        </div>
                                    </div>

                                    <!-- Repeat for remaining clients -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    @push('scripts')

    @endpush
@endsection