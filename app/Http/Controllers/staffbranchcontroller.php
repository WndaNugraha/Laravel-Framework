<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staffbranch;
use App\Models\staff;
use App\Models\branch;

class staffbranchcontroller extends Controller
{
    //
    public function branch(){
        $staffbranch = staffbranch::all();
        $staff = staff::all();
        $branch = branch::all();
        return view('tugas.mingguan',compact('staffbranch','staff','branch'));
        
    }
}
