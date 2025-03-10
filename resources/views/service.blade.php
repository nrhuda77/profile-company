@extends('layouts.main')

@section('content')


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(assets/img/kapal.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Service</h1>
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


   <!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" >
                <div class="d-flex bg-light py-5 px-4" style="height: 160px !important;">
                    <i class="fa fa-ship fa-3x text-info flex-shrink-0" style="color: #035A8F !important;"></i>
                    <div class="ps-4">
                        <h5 class="mb-3"> Jasa pemanduan kapal</h5>
                       
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" >
                <div class="d-flex bg-light py-5 px-4" style="height: 160px !important;">
                    <i class="fas fa-ship fa-3x text-info flex-shrink-0" style="color: #035A8F !important;"></i>
                    <div class="ps-4">
                        <h5 class="mb-3"> Jasa penundaan kapal</h5>
                       
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fas fa-gas-pump  fa-3x text-info flex-shrink-0" style="color: #035A8F !important;"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Pengisian bahan bakar dan pelayanan air bersih</h5>
                     
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" >
                <div class="d-flex bg-light py-5 px-4" style="height: 160px !important;">
                    <i class="fas fa-pallet fa-3x text-info flex-shrink-0" style="color: #035A8F !important;"></i>
                    <div class="ps-4">
                        <h5 class="mb-3"> Jasa Bongkar Muat</h5>
                       
                    </div>
                </div>
            </div>
         
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" >
                <div class="d-flex bg-light py-5 px-4" style="height: 160px !important;">
                    <i class="fas fa-anchor fa-3x text-info flex-shrink-0" style="color: #035A8F !important;"></i>
                    <div class="ps-4">
                        <h5 class="mb-3"> Jasa Dermaga untuk bertambat</h5>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->





    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">5</h2>
                    <p class="text-white mb-0">Agen</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-ship fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1</h2>
                    <p class="text-white mb-0">Kapal Pandu</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-ship fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">2</h2>
                    <p class="text-white mb-0">Kapal Tunda</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-ship fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">612</h2>
                    <p class="text-white mb-0">Kedatangan Kapal</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->





@endsection