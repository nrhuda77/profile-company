


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
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-12">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url('https://stockwatch.id/wp-content/uploads/2024/06/TCPI07Jun24.jpg'); ">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="mb-3">	      	
			      			<h3 >Hai, Selamat Datang!</h3>
                  <h6 class="text-dark">Silakan daftar untuk membuat akun Anda.</h6>
			      	</div>
							<form action="/create-register" method="POST" id="myForm" class="signin-form">
                @csrf
			      		<div class="form-group mb-3">
                  <div class="d-flex justify-content-start">
                    <div class="mr-3">
                      <label class="label" for="nama">Nama</label>
                      <input type="text" name="nama" class="form-control" placeholder="Nama" required size="25">
                    </div>
                    <div>
                      <label class="label" for="telp">No Telepon</label>
                      <input type="text" name="telp" class="form-control" placeholder="No Telepon" required  size="25">
                    </div>
                  </div>
			      		</div>

                <div class="form-group mb-3">
                  <div class="d-flex justify-content-start">
                    <div class="mr-3">
                      <label class="label" for="nama">Email</label>
                      <input type="email" id="email" name="email" class="form-control" placeholder="Email" required size="25">
                    </div>
                    
                    <div>
                      <label class="label" for="telp">Tanggal Lahir</label>
                      <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required  size="25">
                    </div>
                  </div>
                  <p id="error-messages" style="color: red;"></p>
			      		</div>

                <div class="form-group mb-3">
                  <div class="d-flex justify-content-start">
                    <div class="mr-3">
                      <label class="label" for="password">Password</label>
                      <div class="d-flex">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required size="25">
                        <span class="input-group-text" id="toggle-password">
                          <i class="fas fa-eye-slash" id="eye-icon"></i>
                      </span>
                      </div>
                      </div>

                    <div>
                      <label class="label" for="telp">Konfirmasi Password</label>
                      <div class="d-flex">
                      <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Konfirmasi Password" required  size="25">
                      <span class="input-group-text" id="toggle-password2">
                        <i class="fas fa-eye-slash" id="eye-icon2"></i>
                    </span>
                     
                    </div>
                    <span class="error-message text-danger" id="error-message" style="display: none;">Password tidak sama <i class="fas fa-exclamation-circle"></i></span>
                   </div>
                  </div>     		
			      		</div>


                <div class="text-left mb-2">
                  <a href="#">Forgot Password</a>
                </div>
		            <div class="form-group">
		            	<button type="submit" id="submit-btn" disabled class="form-control btn btn-primary rounded submit px-3" style="background-color: #035A8F !important;">Sign In</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="text-left">
                    <p class="text-dark">Sudah memiliki akun? <a data-toggle="tab" class="text-primary" href="/login-recruitment">Masuk disini</a></p>
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


<script>
  $(document).ready(function() {
    $('#confirm_password').on('input', function() {
      var password = $('#password').val();
      var confirmPassword = $('#confirm_password').val();

      if (password !== confirmPassword) {
        $('#error-message').show();
        $('#submit-btn').prop('disabled', true);
      } else {
        $('#error-message').hide();
        $('#submit-btn').prop('disabled', false);
      }
    });
  });

  document.getElementById('toggle-password').addEventListener('click', function () {
    var passwordField = document.getElementById('password');
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

document.getElementById('toggle-password2').addEventListener('click', function () {
    var passwordField = document.getElementById('confirm_password');
    var eyeIcon = document.getElementById('eye-icon2');
    
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

$(document).ready(function() {
    $('#email').on('input', function() {
        var email = $(this).val();
        
        // Ekspresi reguler untuk memvalidasi format email
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zAZ0-9.-]+\.[a-zA-Z]{2,4}$/;
        
        if (!emailPattern.test(email)) {
            // Jika email tidak valid, tampilkan pesan kesalahan
            $('#error-messages').text('Email tidak valid!');
        } else {
            // Jika email valid, hilangkan pesan kesalahan
            $('#error-messages').text('');
        }
    });
});


</script>

   
  </body>
</html> 