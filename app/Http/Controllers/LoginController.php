<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        
        return view('login.index');
        
    }
    public function login (Request $request) 
    {
        $validatedData = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $email    =  $request->input('email');
        $password =  $request->input('password');

        $user = Users::where('email',$email)->first();
        
        if ($user){
            if(Hash::check($password, $user -> password)){
                if($user->roleid == 1){
                    if (Auth::attempt($validatedData)) {
                        $request->session()->regenerate();
                        $request->session()->put('email', $email);

                        return redirect()->intended('informasi');
                    }else{
                        return redirect()->back()->with('error','Password atau Email Salah');
                    }

                }else{
                    if (Auth::attempt($validatedData)) {
                        $request->session()->regenerate();
                        $request->session()->put('email', $email);

                        return redirect()->intended('transaksi');
                    }else{
                        return redirect()->back()->with('error','Password atau Email Salah');
                    }

                }
            }else{
                return redirect()->back()->with('error','password anda salah');
            }

        }else{
             return redirect()->back()->with('error','Email tidak terdaftar');
        }  
        
   
    }

    public function register(){
        return view('login.register');
    }
    public function simpanregister(Request $request){
        // dd($request->all());
        users::create([
            'roleid'=>$request->roleid,
            'name' =>$request->name,
            'email' =>$request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('login')->with('success','Data berhasil di input');  
    }

}
