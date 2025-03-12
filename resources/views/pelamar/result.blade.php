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
    <div class="text-center">
        @if ($datapelamar->jenis_kelamin == "Laki-laki")
        
                <img src="https://st4.depositphotos.com/5934840/25807/v/450/depositphotos_258078046-stock-illustration-man-portrait-faceless.jpg" class="rounded " style="max-width:15%;" alt="...">
                @else
                <img src="https://thumbs.dreamstime.com/b/woman-faceless-avatar-profile-vector-illustration-graphic-design-142358916.jpg" class="rounded " style="max-width:15%;" alt="...">
        @endif

      </div>

      <h4 class="card-title">Data Pribadi</h4>
      <p class="text-start text-dark mt-3">Nama               : {{$datapelamar->nama}}</p>
      <p class="text-start text-dark mt-1">Tanggal Lahir      : {{$datapelamar->tgl_lahir}}</p>
      <p class="text-start text-dark mt-1">Tempat Lahir       : {{$datapelamar->tempat_lahir}}</p>
      <p class="text-start text-dark mt-1">Alamat             : {{$datapelamar->alamat}}</p>
      <p class="text-start text-dark mt-1">Jenis Kelamin      : {{$datapelamar->jenis_kelamin}}</p>
      <p class="text-start text-dark mt-1">Agama              : {{$datapelamar->agama}}</p>
      <p class="text-start text-dark mt-1">No. Telepon        : {{$datapelamar->no_telp}}</p>
      <p class="text-start text-dark mt-1">Email              : {{$datapelamar->email}}</p>
      
      <hr>
      
      <h4 class="card-title">Pendidikan</h4>
      @foreach ($pendidikan as $p)
          <p class="text-start text-dark mt-3">
              <strong>Institution</strong> : {{$p->pendidikan}}
          </p>
          <p class="text-start text-dark">
              <strong>Gelar</strong>       : {{$p->gelar}}
          </p>
          <p class="text-start text-dark">
              <strong>Awal Masuk</strong>  : {{$p->awal_masuk}}
          </p>
          <p class="text-start text-dark">
              <strong>Lulus</strong>      : {{$p->lulus}}
          </p>
          <br><br>
      @endforeach
      
      <hr>
      
      <h4 class="card-title">Pengalaman</h4>
      @foreach ($pengalaman as $p)
          <p class="text-start text-dark mt-3">
              <strong>Perusahaan</strong> : {{$p->perusahaan}}
          </p>
          <p class="text-start text-dark">
              <strong>Posisi</strong>      : {{$p->posisi}}
          </p>
          <p class="text-start text-dark">
              <strong>Awal Masuk</strong>  : {{$p->awal_masuk}}
          </p>
          <p class="text-start text-dark">
              <strong>Keluar</strong>     : {{$p->keluar}}
          </p>
          <br><br>
      @endforeach
      



      <hr>
      <h4 class="card-title">Berkas / Dokumen</h4>


      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".cv">Lihat CV</button>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".ijazah">Lihat Ijazah</button>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".sertifikat">Lihat Sertifikat</button>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".surat_pengalaman">Lihat Surat Pengalaman</button>


    <div class="modal fade cv" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">CV</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <embed src="{{ asset('cv/'.$berkas_cv) }}" width="100%" height="600px" />
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade ijazah" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ijazah</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <embed src="{{ asset('ijazah/'.$berkas_ijazah) }}" width="100%" height="600px" />
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade sertifikat" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sertifikat</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <embed src="{{ asset('sertifikat/'.$berkas_sertifikat) }}" width="100%" height="600px" />
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade surat_pengalaman" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Surat Pengalaman</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <embed src="{{ asset('surat_pengalaman/'.$berkas_surat_pengalaman) }}" width="100%" height="600px" />
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
   

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