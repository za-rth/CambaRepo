<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Registers;
use Illuminate\Http\Request;
use Session;

class Authentications extends Controller
{
    //View Login
    public function authView()
    {
        return view('loginFormality');
    }

    public function registration(Request $request)
    {
        

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
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
            
            return redirect(route('login'))->with('status','Success');
        }

    }

    public function loginEntry(Request $request)
    {
        if($_SERVER['REQUEST_METHOD']=== 'POST'){

            $data = $request->validate([
                'email' => 'required|email'
                ,'password' => 'required|string'
            ]);
            $query = DB::table('registers')
                ->select('email', 'password')
                ->where('email', 'like', $data['email'])
                ->where('password', 'like', $data['password'])
                ->get();
    
            if ($query->isEmpty()) {
                return redirect(route('login'))->with('error', 'Invalid Credentials');
            }
            return redirect()->route('dashboard', ['email' => $query])->with('status', 'Login successful');
        }

    }
    public function process(Request $request)
    {
        if ($request->form_type === 'login') {
            return $this->loginEntry($request);
        } elseif ($request->form_type === 'register') {
            return $this->registration($request);
        }
        
    }
    
}
