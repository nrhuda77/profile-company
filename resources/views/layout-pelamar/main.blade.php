
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Recruitment BAT </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/dashboard/image/logo-bat.png') }}">
    <!-- Chartist -->
    <link  type="text/css" rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/chartist/css/chartist.min.css') }}">
    <link  type="text/css" rel="stylesheet" href="{{ asset('/assets/dashboard/plugins/fontawesome-free/css/all.min.css') }}">
    <link href="{{ asset('/assets/dashboard/css/style.css') }}"   rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        @include('layout-pelamar.navbar')

        @include('layout-pelamar.sidebar')


        <!--**********************************
            Content body start
        ***********************************-->
        @yield('contents')
        <!--**********************************
            Content body end
        ***********************************-->

   <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
  
        <!--**********************************
           Support ticket button start
        ***********************************-->
  
        <!--**********************************
           Support ticket button end
        ***********************************-->
  
        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
  
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->

    @include('layout-pelamar.footer')
  