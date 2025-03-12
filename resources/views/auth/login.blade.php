


<!doctype html>
<html lang="en">
  <head>
  	<title>Recruitment BAT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('assets/login-form/css/style.css')}}">
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/dashboard/notiflix/dist/notiflix-3.2.7.min.css')}}" />

	</head>
	<body>
    <!-- Login 5 - Bootstrap Brain Component -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-3" style="position: sticky !important; top: 0 !important; z-index: 9999 !important;">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
    <img src="{{asset('assets/img/logo_bat_edited.png')}}" width="150px" alt="" srcset="">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : ''}} {{ request()->is('home') ? 'active' : ''}}">Home</a>
            <a href="/about" class="nav-item nav-link {{ request()->is('about') ? 'active' : ''}}">About</a>
            <a href="/service" class="nav-item nav-link {{ request()->is('service') ? 'active' : ''}}">Services</a>
            <a href="/contact" class="nav-item nav-link {{ request()->is('contact') ? 'active' : ''}}">Contact</a>
            <a href="/login" target="_blank" class="nav-item nav-link {{ request()->is('login') ? 'active' : ''}}">Recruitment</a>
        </div>
        <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block" style="background-color: #035A8F; border-color: #035A8F;">LIBAT<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>


     
<!-- Navbar End -->
	<section class="ftco-section">
    <div class="col-lg-6 mx-auto mb-3">
      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
      </div>
      @endif
    </div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url('https://stockwatch.id/wp-content/uploads/2024/06/TCPI07Jun24.jpg'); ">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="mb-3">	      	
			      			<h3 >Hai, Selamat Datang!</h3>
                  <h6 class="text-dark">Silakan masuk dengan akun anda.</h6>
			      	</div>
							<form action="#" method="POST" id="form" class="signin-form">
                @csrf
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Email</label>
			      			<input type="text" class="form-control" placeholder="Email" name="email" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>

                  <div class="d-flex">
                    <input type="password" name="password" class="form-control" id="password-input" placeholder="Password" required>
                    <span class="input-group-text" id="toggle-password">
                      <i class="fas fa-eye-slash" id="eye-icon"></i>
                  </span>
                  </div>
   
		            </div>
                <div class="text-left mb-2">
                  <a href="#">Forgot Password</a>
                </div>
		            <div class="form-group">
		            	<button type="button" id="btnSave" onclick="sign()" class="form-control btn btn-primary rounded submit px-3" style="background-color: #035A8F !important;">Sign In</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="text-left">
                    <p class="text-dark">Belum memiliki akun? <a data-toggle="tab" class="text-primary" href="/register-recruitment">Daftar disini</a></p>
									</div>
									{{--  --}}
                  
		            </div>
                
		          </form>
		      
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>



	</body>
</html>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{asset('assets/dashboard/notiflix/dist/notiflix-3.2.7.min.js')}}"></script>
    <script>

function sign()
   {
       $('#btnSave').text('Memeriksa...'); //change button text
       $('#btnSave').attr('disabled',true); //set button disable 
       var url = '/login-recruitment';
    
       // ajax adding data to database
       var formData = new FormData($('#form')[0]);
       $.ajax({
            url : url,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
           success: function(data)
           {
            console.log(data);
            
               if(data.error ) //if success close modal and reload ajax table
               {   
                Notiflix.Report.failure(
'Failure',
'Password / Username Salah!!!',
'Okay',
);
               }
               else
               {
                
                window.location = "/dashboard";
             
               }

               $('#btnSave').text('Simpan'); //change button text
               $('#btnSave').attr('disabled',false); //set button enable 
    
    
           },
           error: function (jqXHR, textStatus, errorThrown)
           {
            Notiflix.Notify.success('Gagal Login');
               $('#btnSave').text('Simpan'); //change button text
               $('#btnSave').attr('disabled',false); //set button enable 
    
           }
       });
   }


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
 