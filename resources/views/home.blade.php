@extends('layouts.main')

@section('content')

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('assets/img/foto.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-12 text-center text-lg-start">
                            
                                <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">PT. <span style="color: #035A8F ">BIRU</span> <span style="color: #2AB0E9 ">ARNAWAMA</span> <span style="color: #035A8F ">TIMUR</span></h1>
                            </div>
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                <h6 class="text-white mb-3 animated slideInDown">Perseroan Terbatas (PT) Biru Arnawama Timur didirikan oleh Putra Daerah Sangkulirang, Dr. Irwan, M.P., dengan fokus pada layanan kepelabuhanan. Perusahaan ini bertujuan untuk mendukung perkembangan infrastruktur pelabuhan di Kalimantan Timur, khususnya di wilayah Sangatta Utara, Kabupaten Kutai Timur. Dengan dedikasi tinggi, PT Biru Arnawama Timur berkomitmen memberikan pelayanan profesional untuk mendukung aktif dalam pembangunan ekonomi daerah.</h6>
                                <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                            <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
       
    </div>
</div>
<!-- Carousel End -->




<!-- Service Start -->
<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Our Services //</h6>
            <h1 class="mb-5">Explore Our Services</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                        <i class="fa fa-car-side fa-2x me-3"></i>
                        <h4 class="m-0">Pandu</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                        <i class="fa fa-car fa-2x me-3"></i>
                        <h4 class="m-0">Tunda</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                        <i class="fa fa-cog fa-2x me-3"></i>
                        <h4 class="m-0">Muat</h4>
                    </button>
                   
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="https://ipcmarine.co.id/wp-content/uploads/2021/09/Abimanyu-II-034-1-scaled-1170x640.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Jasa Pemanduan Kapal</h3>
                                <p class="mb-4">PT Biru Arnawama Timur menyediakan jasa pemanduan kapal untuk memastikan kapal dapat berlabuh atau berlayar dengan aman di perairan yang terbatas. Dengan pemandu kapal berlisensi dan berpengalaman, perusahaan ini mengarahkan kapal melalui rute yang aman, menghindari bahaya, serta memastikan kelancaran operasional di pelabuhan. PT Biru Arnawama Timur berkomitmen untuk memberikan layanan pemanduan yang profesional demi keselamatan kapal dan muatan.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="https://maritimenews.id/wp-content/uploads/2022/03/Foto-2-scaled.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Jasa Penundaan Kapal</h3>
                                <p class="mb-4">PT Biru Arnawama Timur menyediakan layanan manajemen penundaan kapal untuk memastikan kelancaran operasional di pelabuhan. Perusahaan ini mengelola penundaan yang disebabkan oleh faktor seperti cuaca buruk, antrian kapal, atau keterbatasan fasilitas, dengan tujuan meminimalkan dampak terhadap jadwal kapal dan memastikan keselamatan serta efisiensi dalam proses berlabuh.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets/img/muat.jpg')}}"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Muat Batubara (Coming Soon)</h3>
                                <p class="mb-4">PT Biru Arnawama Timur berencana untuk segera mengembangkan layanan pemuatan batu bara ke kapal-kapal. Meskipun layanan ini belum dijalankan saat ini, perusahaan tengah berupaya untuk mewujudkan proses pemuatan batu bara yang efisien dan aman di pelabuhan. Dengan pengalaman dan komitmen tinggi, PT Biru Arnawama Timur berfokus pada persiapan fasilitas dan sumber daya untuk mendukung kelancaran distribusi batu bara.</p>
                            </div>
                        </div>
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



<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" >
                <div class="d-flex bg-light py-5 px-4" style="height: 160px !important;">
                    <i class="fa fa-certificate fa-3x text-info flex-shrink-0" style="color: #035A8F !important;"></i>
                    <div class="ps-4">
                        <h5 class="mb-3"> Jasa penundaan kapal</h5>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-users-cog fa-3x text-info flex-shrink-0" style="color: #035A8F !important;"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Pengisian bahan bakar dan pelayanan air bersih</h5>
                     
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-tools fa-3x text-info flex-shrink-0" style="color: #035A8F !important;"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">...........</h5>
                        <!-- <p>....................</p> -->
                        <a class="text-secondary border-bottom" href="/service">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


@endsection