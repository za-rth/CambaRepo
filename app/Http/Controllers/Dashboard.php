<?php

namespace App\Http\Controllers;

use App\Models\Registers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class Dashboard extends Controller
{
    // Dashboard Controllers

    public function main(Request $request){
        
        
        return view('dashboard.dashboard');
        
    }

    public function deleteAccount($id){
        $query = Registers::findOrFail($id);
        $query->delete();
        return redirect(route('login'))->with('Status','Account deleted Successfully');
    }
    
    public function profile(Request $request){
        return view('dashboard.profile');
    }
}
