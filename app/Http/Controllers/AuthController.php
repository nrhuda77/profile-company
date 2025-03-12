<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function authenticate(Request $request){
        $validated =  $request->validate([
              'email' => 'required',
              'password' => 'required'
          ]);
          if(Auth::guard('pelamar')->attempt($validated)){
              $request->session()->regenerate();
              return response()->json($request);
          }else{
            return response()->json(['error'=> 'erors']);
          }
          
      }

      public function logout(Request $request){
        Auth::guard('pelamar')->logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }

    public function store(Request $request){


        $validator =FacadesValidator::make($request->all(),[
            'nama' => 'required',
            'password' => 'required',
            'tgl_lahir' => 'required',
            'email' => 'required |email',
        ]);

        if ($validator->passes()) {
            $input = $request->all();
            $input['password']=  Hash::make($request['password']);

            Pelamar::create([
                'nama' => $request->nama,
                'password' => $input['password'],
                'tgl_lahir' => $request->tgl_lahir,
                'email' => $request->email
            ]);
        }
        return redirect('/login');
      
    }
}
