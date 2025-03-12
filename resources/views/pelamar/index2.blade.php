@extends('layout-pelamar.main')

@section('contents')
<link rel="stylesheet" href="{{asset('assets/dashboard/notiflix/dist/notiflix-3.2.7.min.css')}}" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Main content -->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
<h1 class="text-dark">Form Lamaran</h1>

<div class="card">
<div class="card-header d-flex">

<div class="card-tools ms-auto">

</div>
</div>



<div class="card-body">
    <h5 class="card-title">Data Anda Berhasil Dikirim</h5>
    <p class="card-text text-dark">Terima kasih sudah mengirim CV dan berkas anda, Kami akan segera menghubungi anda jika tertarik dengan anda</p>
    <a href="/dashboard" class="btn btn-primary">Lihat Hasil</a>
  </div>




</div>
</div>
</div>





  <script src="{{asset('/assets/dashboard/notiflix/dist/notiflix-3.2.7.min.js')}}"></script>
  <script src="{{asset('/assets/dashboard/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery Scrollbar -->


<script>
    function save()
   {
       $('#btnSave').text('Memeriksa...'); //change button text
       $('#btnSave').attr('disabled',true); //set button disable 
       var url = '/save-data-pelamar';
    
       // ajax adding data to database
       var formData = new FormData($('#form')[0]);
       $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
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
'Eror',
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

</script>
<script>
    document.getElementById('addFormBtn').addEventListener('click', function() {
        // Membuat form baru
        const formHTML = `
            <div class="form-group row mt-5">
                <label class="control-label col-md-4 has-star text-dark"><b>Institution</b></label>
                <div class="col-md-8">
                    <input name="pendidikan[]" class="form-control" style="border-color: rgb(58, 56, 56)" type="text" >
                    <span class="help-block"></span>
                </div>

                <label class="control-label col-md-4 has-star text-dark mt-3"><b>Gelar</b></label>
                <div class="col-md-8 mt-3">
                    <input name="gelar[]" class="form-control" style="border-color: rgb(58, 56, 56)" type="text" >
                    <span class="help-block"></span>
                </div>

                <div class="d-flex mt-3">
                    <label class="control-label col-md-4 has-star text-dark mt-1"><b>Awal Masuk</b></label>
                    <div class="col-md-6 mt-1">
                        <input name="awal_masuk[]" class="form-control" style="border-color: rgb(58, 56, 56)" type="date" >
                        <span class="help-block"></span>
                    </div>

                    <label class="control-label col-md-4 has-star text-dark mt-1"><b>Lulus</b></label>
                    <div class="col-md-6 mt-1">
                        <input name="lulus[]" class="form-control" style="border-color: rgb(58, 56, 56)" type="date" >
                        <span class="help-block"></span>
                    </div>
                </div>
            </div>
        `;

        // Menambahkan form ke dalam container
        document.getElementById('formContainer').insertAdjacentHTML('beforeend', formHTML);
    });


    document.getElementById('addFormBtn2').addEventListener('click', function() {
        // Membuat form baru
        const formHTML = `
                 <div class="form-group row mt-5">
            <label class="control-label col-md-4 has-star text-dark"><b>Perusahaan</b></label>
            <div class="col-md-8">
                <input name="perusahaan[]" id="petugas_pandu" class="form-control" style="border-color: rgb(58, 56, 56)" type="text" >
                <span class="help-block"></span>
            </div>
    
            <label class="control-label col-md-4 has-star text-dark mt-3"><b>Posisi</b></label>
            <div class="col-md-8 mt-3">
                <input name="posisi[]" id="posisi" class="form-control" style="border-color: rgb(58, 56, 56)" type="text" >
                <span class="help-block"></span>
            </div>

            <label class="control-label col-md-4 has-star text-dark mt-3"><b>Deskripsi Pekerjaan</b></label>
            <div class="col-md-8 mt-3">
               <textarea name="desk[]" class="form-control" rows="3" style="border-color: rgb(58, 56, 56)" ></textarea>
                <span class="help-block"></span>
            </div>
    
            <div class="d-flex mt-3">
                <label class="control-label col-md-4 has-star text-dark mt-1"><b>Awal Masuk</b></label>
                <div class="col-md-6 mt-1">
                    <input name="awal_masuk[]" id="awal_masuk" class="form-control" style="border-color: rgb(58, 56, 56)" type="date" >
                    <span class="help-block"></span>
                </div>
    
                <label class="control-label col-md-4 has-star text-dark mt-1"><b>Keluar</b></label>
                <div class="col-md-6 mt-1">
                    <input name="keluar[]" id="keluar" class="form-control" style="border-color: rgb(58, 56, 56)" type="date" >
                    <span class="help-block"></span>
                </div>
                
            </div>
           
        </div>
        `;

        // Menambahkan form ke dalam container
        document.getElementById('formContainer2').insertAdjacentHTML('beforeend', formHTML);
    });

</script>




    
@endsection