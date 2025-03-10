<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login Recruitment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/login/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/login/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/login/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/login/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/login/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/login/css/owl.theme.default.min.css')}}">
   <link rel="icon" type="image/x-icon" href="{{asset('assets/img/logo-bat.png')}}" />
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/login/css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/login/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('assets/login/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('assets/login/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('assets/login/css/style.css')}}">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
    <img class="" style="width: 145px !important; " src="{{asset('assets/img/logo_bat_edited.png')}}" >
{{-- <img class="me-4 site-logo mr-auto w-25" style="width: 100px !important;   margin-inline-start: 20px !important;" src="{{asset('assets/login/images/logo.png')}}" alt="" srcset=""> --}}
     
  

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">

              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url('{{asset('assets/img/TERMINAL 2-1.jpeg')}}');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1  data-aos="fade-up" data-aos-delay="100">Rekrutmen PT Biru Arnawama Timur</h1>
                  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Selamat Datang Rekrutment PT Biru Arnawama Timur Silahkan Login jika sudah memiliki akun, atau daftar jika belum memiliki akun</p>
                 

                </div>

                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
				<form class="login100-form validate-form" action="" method="POST">
                    <h3 class="h4  mb-4">Login</h3>
                    <div class="form-group">
                        <span>Email</span>
                      <input type="email" class="form-control" placeholder="Masukan Email" name="email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <span>Password</span>
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Masukan Password" name="pass" autocomplete="off" id="password-input">
                            <div class="input-group-append">
                                <span class="input-group-text" id="toggle-password">
                                    <i class="fas fa-eye-slash" id="eye-icon"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <p>Belum Punya Akun ? <a href="/register">Daftar</a></p>
                      </div>
                    <div class="form-group">
					<button class="btn btn-primary btn-pill">
							Login
						</button>
                      
                    </div>
                  </form>

                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    
  
  
    
  </div>

  <script src="{{asset('assets/login/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('assets/login/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('assets/login/js/jquery-ui.js')}}"></script>
  <script src="{{asset('assets/login/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/login/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/login/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/login/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('assets/login/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('assets/login/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('assets/login/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('assets/login/js/aos.js')}}"></script>
  <script src="{{asset('assets/login/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('assets/login/js/jquery.sticky.js')}}"></script>

  
  <script src="{{asset('assets/login/js/main.js')}}"></script>
    <script>
  document.getElementById('toggle-password').addEventListener('click', function () {
    var passwordField = document.getElementById('password-input');
    var eyeIcon = document.getElementById('eye-icon');
    
    // Toggle the type attribute
    if (passwordField.type === "password") {
        passwordField.type = "text"; // Tampilkan password
        eyeIcon.classList.remove('fas', 'fa-eye-slash'); // Hapus class fa-eye-slash
        eyeIcon.classList.add('fas', 'fa-eye'); // Tambahkan class fa-eye
    } else {
        passwordField.type = "password"; // Sembunyikan password
        eyeIcon.classList.remove('fas', 'fa-eye'); // Hapus class fa-eye
        eyeIcon.classList.add('fas', 'fa-eye-slash'); // Tambahkan class fa-eye-slash
    }
});


    </script>
  </body>
</html> 