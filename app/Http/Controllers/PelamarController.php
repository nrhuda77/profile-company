<?php

namespace App\Http\Controllers;

use App\Models\DataPribadiPelamar;
use App\Models\DokumenPelamar;
use Illuminate\Routing\Controller;
use App\Models\Pelamar;
use App\Models\PendidikanPelamar;
use App\Models\PengalamanKerjaPelamar;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id();
        $data = DataPribadiPelamar::where('id_pelamar',  $userId)->get()->count();
       if($data == null || $data == 0){
        return view('pelamar.index');
       }else{
        return view('pelamar.index2');
       }
       
    }


    public function dashboard(){
        $userId = Auth::id();
        $datapelamar = DataPribadiPelamar::where('id_pelamar',  $userId)->first();
        $pendidikan = PendidikanPelamar::where('id_pelamar',  $userId)->get();
        $pengalaman = PengalamanKerjaPelamar::where('id_pelamar',  $userId)->get();
        $berkas= DokumenPelamar::where('id_pelamar',  $userId)->first();
        return view('pelamar.result',[
            'datapelamar' => $datapelamar,
            'pendidikan' => $pendidikan,
            'pengalaman' => $pengalaman,
            'berkas_cv' => $berkas->cv,
            'berkas_ijazah' => $berkas->ijazah,
            'berkas_sertifikat' => $berkas->sertifikat,
            'berkas_surat_pengalaman' => $berkas->surat_pengalaman,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::id();
        
        $validator =FacadesValidator::make($request->all(),[
            'nama'            => 'required|string|max:255',
            'tempat_lahir'    => 'required|string|max:255',
            'tgl_lahir'       => 'required|date',
            'agama'           => 'required|string',
            'jenis_kelamin'   => 'required|string',
            'alamat'          => 'required|string|max:1000',
            'no_telp'         => 'required|string|max:15',
            'email'           => 'required|email|max:255',
            'cv'              => 'required|mimes:pdf|max:10120', // 5MB max for file upload
            'sertifikat'      => 'required|mimes:pdf|max:10120',
            'ijazah'          => 'required|mimes:pdf|max:10120',
            'surat_pengalaman'=> 'required|mimes:pdf|max:10120',
            'pendidikan'      => 'required|array',
            'gelar'           => 'required|array',
            'awal_masuk'      => 'required|array',
            'lulus'           => 'required|array',
            'perusahaan'      => 'required|array',
            'posisi'          => 'required|array',
            'desk'            => 'required|array',
            'awal_masuk'      => 'required|array',
            'keluar'          => 'required|array',
        ]);

        if ($validator->passes()) {

            $cv = $request->cv;
            $ijazah = $request->ijazah;
            $sertifikat = $request->sertifikat;
            $surat_pengalaman = $request->surat_pengalaman;

            if ($request->hasFile('cv')) {
                // Validasi file gambar
                $request->validate([
                    'cv'   => 'mimes:pdf|max:10120', // 5MB max for file upload
                ]);
            }
    
            if (  $cv != null) {       
                $imageName = time().'-'.'-cv.'.$cv->extension();
                  $cv->move(public_path('cv'), $imageName);
                $input_cv = $imageName;
               }else{
                $input_cv = null;
               }


            if ($request->hasFile('ijazah')) {
                // Validasi file gambar
                $request->validate([
                    'ijazah'   => 'mimes:pdf|max:10120', // 5MB max for file upload
                ]);
            }
    
            if (  $ijazah != null) {       
                $imageName = time().'-'.'-ijazah.'.$ijazah->extension();
                  $ijazah->move(public_path('ijazah'), $imageName);
                $input_ijazah = $imageName;
               }else{
                $input_ijazah = null;
               }


            if ($request->hasFile('sertifikat')) {
                // Validasi file gambar
                $request->validate([
                    'sertifikat'   => 'mimes:pdf|max:10120', // 5MB max for file upload
                ]);
            }
    
            if (  $sertifikat != null) {       
                $imageName = time().'-'.'-sertifikat.'.$sertifikat->extension();
                  $sertifikat->move(public_path('sertifikat'), $imageName);
                $input_sertifikat = $imageName;
               }else{
                $input_sertifikat = null;
               }



            if ($request->hasFile('surat_pengalaman')) {
                // Validasi file gambar
                $request->validate([
                    'surat_pengalaman'   => 'mimes:pdf|max:10120', // 5MB max for file upload
                ]);
            }
    
            if (  $surat_pengalaman != null) {       
                $imageName = time().'-'.'-surat_pengalaman.'.$surat_pengalaman->extension();
                  $surat_pengalaman->move(public_path('surat_pengalaman'), $imageName);
                $input_surat_pengalaman = $imageName;
               }else{
                $input_surat_pengalaman = null;
               }



               DataPribadiPelamar::create([
                'id_pelamar' => $userId,
                'nama' => $request->nama,
                'tgl_lahir' => $request->tgl_lahir,
                'tempat_lahir' => $request->tempat_lahir,
                'agama' => $request->agama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat' => $request->alamat,
                'no_telp' => $request->jenis_kelamin,
                'email' => $request->email,
               ]);

               
               $perusahaan = $request->input('perusahaan');
               $posisi = $request->input('posisi');
               $desk = $request->input('desk');
               $awal_masuk = $request->input('awal_masuk');
               $keluar = $request->input('keluar');
       
               // Simpan data ke dalam database
               foreach ($perusahaan as $index => $value) {
                   PengalamanKerjaPelamar::create([
                       'id_pelamar' => $userId,
                       'perusahaan' => $value,
                       'posisi' => $posisi[$index],
                       'desk' => $desk[$index],
                       'awal_masuk' => $awal_masuk[$index],
                       'keluar' => $keluar[$index],
                   ]);
               }




               $pendidikan = $request->input('pendidikan');
               $gelar = $request->input('gelar');
               $awal_masuk = $request->input('awal_masuk');
               $lulus = $request->input('lulus');
       
               // Simpan data ke dalam database
               foreach ($pendidikan as $index => $value) {
                   PendidikanPelamar::create([
                       'id_pelamar' => $userId,
                       'pendidikan' => $value,
                       'gelar' => $gelar[$index],
                       'awal_masuk' => $awal_masuk[$index],
                       'lulus' => $lulus[$index],
                   ]);
               }



               DokumenPelamar::create([
                'id_pelamar' => $userId,
                'cv' =>   $input_cv,
                'ijazah' =>   $input_ijazah,
                'sertifikat' =>   $input_sertifikat,
                'surat_pengalaman' =>   $input_surat_pengalaman,
                
               ]);
      return response()->json($request);
        }
        return response()->json(['error'=>$validator->errors()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function show(Pelamar $pelamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelamar $pelamar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelamar $pelamar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelamar $pelamar)
    {
        //
    }
}
