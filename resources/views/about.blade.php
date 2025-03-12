@extends('layouts.main')

@section('content')


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(assets/img/kapal.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                {{-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                    </ol>
                </nav> --}}
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets/img/kpl.jpg')}}" style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">4 <span class="fs-4">Years</span></h1>
                            <h4 class="text-white">Experience</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase" style="color: #035A8F !important">// About Us //</h6>
                    <h1 class="mb-4"><span class="text-primary" style="color: #0b0b0b !important">PT</span> <span style="color: #035A8F !important">Biru Arnawama Timur</span></h1>
                    <p class="mb-4">Perseroan Terbatas (PT) Biru Arnawama Timur didirikan di Sangkulirang, dengan fokus pada layanan kepelabuhanan. Perusahaan ini bertujuan untuk mendukung perkembangan infrastruktur pelabuhan di Kalimantan Timur, khususnya di wilayah Sangatta Utara, Kabupaten Kutai Timur. Dengan dedikasi tinggi, PT Biru Arnawama Timur berkomitmen memberikan pelayanan profesional untuk mendukung aktif dalam pembangunan ekonomi daerah.</p>
                 
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->





@endsection