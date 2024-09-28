<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Registers;
use Illuminate\Http\Request;

class Authentications extends Controller
{
   //View Login
    public function authView(){
        return view('loginFormality');
    }
    public function registerView(){
        return view('registrationForm');
    }
    public function registerAll(Request $request){
        $data = $request->validate([
            'firstname' => 'required'
            , 'lastname' => 'required'
            , 'birthdate' => 'required'  
            , 'nationality' => 'required'  
            , 'country' => 'required'  
            , 'state' => 'required'  
            , 'zip_code' => 'required|numeric'  
            , 'gender' => 'required'  
            , 'user_type' => 'required'  
            , 'email' => 'required|email|unique:registers,email'      
            , 'password' => 'required'  
        ]);

        $insertData = Registers::create($data);
        if(!$insertData){
            return redirect(route('welcome'))->with("Error", "Error Database not triggered");
        }
        return redirect(route('login'));
    }

    public function loginEntry(Request $request){
        $data = $request->validate([
            'email' => 'required|email'
            ,'password' => 'required|string'
        ]);
        $query = DB::table('registers')
        ->select('email','password')
        ->where('email', 'like', $data['email'])
        ->where('password', 'like', $data['password'])
        ->get();
        
        
        if ($query->isEmpty()) {
            return back()->with('error', 'Invalid credentials');
        }

        return redirect()->route('dashboard',['email'=>$query])->with('status', 'Login successful');

    }
}
