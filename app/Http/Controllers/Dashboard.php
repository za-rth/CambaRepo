<?php

namespace App\Http\Controllers;

use App\Models\Registers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    // Dashboard Controllers

    public function main(){
        
        return view('dashboard');
    }

    /*public function deleteAccount($id){
        
        $user = Registers::findOrFail($id);
        $user -> delete();

        return redirect()->route('splash');
    }*/

    
}
