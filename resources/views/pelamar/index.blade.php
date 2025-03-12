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
<h4 class="card-title">Data Pribadi</h4>

<div class="card-tools ms-auto">
{{-- <form onsubmit="return handleSubmit(event)" action="/form-a21/insert" id="form_master" class="form-horizontal" method="POST" > --}}
{{-- <a class="btn btn-primary btn-sm" href="/form-a21"><i class="fa fa-sign-out"></i> Back</a> --}}

</div>
</div>



<div class="card-body table-responsive">



<form action="#" method="POST" id="form" class="form-body table-responsive">

@csrf
<div class="form-group row">
    <label class="control-label col-md-3 has-star text-dark"><b>Nama</b></label>
    <div class="col-md-5">
        <input  style="border-color: rgb(58, 56, 56)" name="nama" id="nama" class="form-control" type="text" >
        
   </div>
</div>

<div class="form-group row">
    <label class="control-label col-md-3 has-star text-dark"><b>Tempat Lahir</b></label>
    <div class="col-md-5">
        <input style="border-color: rgb(58, 56, 56)" name="tempat_lahir" id="tempat_lahir" placeholder="" class="form-control" type="text" >
   </div>
</div>


<div class="form-group row">
    <label class="control-label col-md-3 has-star text-dark"><b>Tanggal Lahir</b></label>
    <div class="col-md-5">
        <input style="border-color: rgb(58, 56, 56)" name="tgl_lahir" id="tgl_lahir" placeholder="" class="form-control" type="text" >
   </div>
</div>

<div class="form-group row">
    <label class="control-label col-md-3 has-star text-dark"><b>Agama</b></label>
    <div class="col-md-5">
        <select name="agama" id="agama" style="border-color: rgb(58, 56, 56)" class="form-control">
            <option value="Islam">Islam</option>
            <option value="Protestan">Protestan</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Konghucu">Konghucu</option>
        </select>
   </div>
</div>

<div class="form-group row">
    <label class="control-label col-md-3 has-star text-dark"><b>Jenis Kelamin</b></label>
    <div class="col-md-2">
        <select name="jenis_kelamin" id="jenis_kelamin" style="border-color: rgb(58, 56, 56)" class="form-control">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <span class="help-block"></span>
    </div>
</div>


<div class="form-group row">
    <label class="control-label col-md-3 has-star text-dark"><b>Alamat </b></label>
    <div class="col-md-4 ">
        <textarea name="alamat" id="alamat" rows="5" placeholder="" class="form-control " style="border-color: rgb(58, 56, 56)" type="text" ></textarea>
        <span class="help-block"></span>
    </div>
</div>

<div class="form-group row">
    <label class="control-label col-md-3 has-star text-dark"><b>No Telpon</b></label>
    <div class="col-md-5">
        <input style="border-color: rgb(58, 56, 56)" name="no_telp" id="no_telp" placeholder="" class="form-control" type="text" >
   </div>
</div>

<div class="form-group row">
    <label class="control-label col-md-3 has-star text-dark"><b>Email</b></label>
    <div class="col-md-5">
        <input style="border-color: rgb(58, 56, 56)" name="email" id="email" placeholder="" class="form-control" type="text" >
   </div>
</div>


<hr>

<h4 class="card-title mb-5">Pendidikan</h4>
<button id="addFormBtn" type="button" class="btn btn-primary mb-3">Tambah Form</button>
<div class="row">
    
<div class="col-md-6" id="idMasuk">

    <div class="form-group row">
        <label class="control-label col-md-4 has-star text-dark"><b>Institution</b></label>
        <div class="col-md-8">
            <input name="pendidikan[]" id="petugas_pandu" class="form-control" style="border-color: rgb(58, 56, 56)" type="text" >
            <span class="help-block"></span>
        </div>

        <label class="control-label col-md-4 has-star text-dark mt-3"><b>Gelar</b></label>
        <div class="col-md-8 mt-3">
            <input name="gelar[]" id="gelar" class="form-control" style="border-color: rgb(58, 56, 56)" type="text" >
            <span class="help-block"></span>
        </div>

        <div class="d-flex mt-3">
            <label class="control-label col-md-4 has-star text-dark mt-1"><b>Awal Masuk</b></label>
            <div class="col-md-6 mt-1">
                <input name="awal_masuk[]" id="awal_masuk" class="form-control" style="border-color: rgb(58, 56, 56)" type="date" >
                <span class="help-block"></span>
            </div>

            <label class="control-label col-md-4 has-star text-dark mt-1"><b>Lulus</b></label>
            <div class="col-md-6 mt-1">
                <input name="lulus[]" id="lulus" class="form-control" style="border-color: rgb(58, 56, 56)" type="date" >
                <span class="help-block"></span>
            </div>
            
        </div>
       
    </div>


    <div id="formContainer"></div>
  

   
</div>

</div>





<hr>

<h4 class="card-title mb-5">Pengalaman Kerja</h4>
<button id="addFormBtn2" type="button" class="btn btn-primary mb-3">Tambah Form</button>
<div class="row">
    
    <div class="col-md-6" id="idMasuk">

        <div class="form-group row">
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
    
    
        <div id="formContainer2"></div>
      
    
       
    </div>




</div>




<hr>

<h4 class="card-title mb-5">Dokumen</h4>
<div class="row">
    
    <div class="col-md-6" id="idMasuk">

        <div class="form-group row">
            <label class="control-label col-md-12 has-star text-dark"><b>CV / Resume + KTP /Identitas Lain (Jadikan 1 PDF)</b></label>
            <div class="col-md-8">
                <input name="cv" id="cv"  style="border-color: rgb(58, 56, 56)" type="file" >
                <span class="help-block"></span>
            </div>
    
            <label class="control-label col-md-12 has-star text-dark mt-3"><b>Sertifikat pelatihan (Jadikan 1 PDF)</b></label>
            <div class="col-md-8 mt-3">
                <input name="sertifikat" id="sertifikat"  style="border-color: rgb(58, 56, 56)" type="file" >
                <span class="help-block"></span>
            </div>


            <label class="control-label col-md-12 has-star text-dark mt-3"><b>Ijazah (Jadikan 1 PDF)</b></label>
            <div class="col-md-8 mt-3">
                <input name="ijazah" id="ijazah"  style="border-color: rgb(58, 56, 56)" type="file" >
                <span class="help-block"></span>
            </div>


            <label class="control-label col-md-12 has-star text-dark mt-3"><b>Surat pengalaman kerja atau referensi (Jadikan 1 PDF)</b></label>
            <div class="col-md-8 mt-3">
                <input name="surat_pengalaman" id="surat_pengalaman"  style="border-color: rgb(58, 56, 56)" type="file" >
                <span class="help-block"></span>
            </div>
    
 
           
        </div>
    

      
    
       
    </div>




</div>






<button class="btn btn-warning btn-sm mt-5" onclick="save()" id="btnSave" type="button"><i class="fa fa-plus"></i> Proses Data</button>
</form>

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