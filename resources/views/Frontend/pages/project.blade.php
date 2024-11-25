@extends('Frontend.layout.app')
@section('content')
    <div class="py-5 mb-5 container-fluid page-header">
        <div class="container py-5">
            <h1 class="mb-3 text-white display-3 animated slideInDown">Projects</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                    <li class="text-white breadcrumb-item active" aria-current="page">Projects</li>
                </ol>
            </nav>
        </div>
    </div>


    <!-- Projects Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Our Projects</h6>
                <h1 class="mb-4">Visit Our Latest Solar And Renewable Energy Projects</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="text-center col-12">
                    <ul class="mb-5 list-inline" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">Solar Energy</li>
                        <li class="mx-2" data-filter=".second">IT Services</li>
                        <li class="mx-2" data-filter=".third">Software</li>
                        <li class="mx-2" data-filter=".fourth">Electric Fence</li>
                        <li class="mx-2" data-filter=".fifth">CCTV System</li>
                        <li class="mx-2" data-filter=".sixth">A/C System</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="overflow-hidden rounded portfolio-img">
                        <img class="img-fluid" src="{{ asset('assets/Frontend/img/img-600x400-6.jpg') }}" alt="">
                        <div class="portfolio-btn">
                            <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href="{{ asset('assets/Frontend/img/img-600x400-6.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="mb-0 text-primary">Solar Panels</p>
                        <hr class="my-2 text-primary w-25">
                        <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="overflow-hidden rounded portfolio-img">
                        <img class="img-fluid" src="{{ asset('assets/Frontend/img/img-600x400-5.jpg') }}" alt="">
                        <div class="portfolio-btn">
                            <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href="{{ asset('assets/Frontend/img/img-600x400-5.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="mb-0 text-primary">Wind Turbines</p>
                        <hr class="my-2 text-primary w-25">
                        <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="overflow-hidden rounded portfolio-img">
                        <img class="img-fluid" src="{{ asset('assets/Frontend/img/img-600x400-4.jpg') }}" alt="">
                        <div class="portfolio-btn">
                            <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href="{{ asset('assets/Frontend/img/img-600x400-4.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="mb-0 text-primary">Hydropower Plants</p>
                        <hr class="my-2 text-primary w-25">
                        <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="overflow-hidden rounded portfolio-img">
                        <img class="img-fluid" src="{{ asset('assets/Frontend/img/img-600x400-3.jpg') }}" alt="">
                        <div class="portfolio-btn">
                            <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href="{{ asset('assets/Frontend/img/img-600x400-3.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="mb-0 text-primary">Solar Panels</p>
                        <hr class="my-2 text-primary w-25">
                        <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="overflow-hidden rounded portfolio-img">
                        <img class="img-fluid" src="{{ asset('assets/Frontend/img/img-600x400-2.jpg') }}" alt="">
                        <div class="portfolio-btn">
                            <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href="{{ asset('assets/Frontend/img/img-600x400-2.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="mb-0 text-primary">Wind Turbines</p>
                        <hr class="my-2 text-primary w-25">
                        <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="overflow-hidden rounded portfolio-img">
                        <img class="img-fluid" src="{{ asset('assets/Frontend/img/img-600x400-1.jpg') }}" alt="">
                        <div class="portfolio-btn">
                            <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href="{{ asset('assets/Frontend/img/img-600x400-1.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="mb-0 text-primary">Hydropower Plants</p>
                        <hr class="my-2 text-primary w-25">
                        <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->
@endsection
