@extends('frontend.master')

@section('title')
  Gallery
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark services-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 pt-5 mt-5">
                        <h1 class="display-5 fw-bold">Our gallery</h1>
                        <p class="lead">Explore our gallery to see featured clients, collaborations, and the projects we are proud to have delivered.</p>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div>
        </section>
        <!--page header section end-->

        
        <section class="gallery-section ptb-75 bg-light">
            <div class="container">
                <div class="section-heading text-center mb-5">
                    <h2>Explore our curated collection of images and moments.</h2>
                </div>

                <div class="row g-4">
                    <!-- Each image -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/gal_1.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/gal_1.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/gal_2.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/gal_2.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/bkash.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/bkash.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/nagad.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/nagad.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bootstrap Modal for Lightbox -->
        <div class="modal fade" style="margin-top: 7vh" id="lightboxModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content bg-transparent border-0 position-relative">
                    <!-- Overlay to make the button always visible -->
                    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; pointer-events: none;"></div>

                    <div class="modal-body p-0 position-relative">
                        <img src="" id="lightboxImage" class="img-fluid w-100" alt="Expanded Image">
                    </div>

                    <!-- Close button on overlay -->
                    <button type="button" 
                            data-bs-dismiss="modal" 
                            aria-label="Close" 
                            style="
                                position: absolute; 
                                top: 10px; 
                                right: 10px; 
                                width: 45px; 
                                height: 45px; 
                                font-size: 1.8rem; 
                                color: white; 
                                background: rgba(255,0,0,0.8); 
                                border-radius: 50%; 
                                border: none; 
                                display: flex; 
                                align-items: center; 
                                justify-content: center; 
                                z-index: 1050;
                                pointer-events: auto;
                            ">
                        &times;
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection