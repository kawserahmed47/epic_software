<?php

namespace App\Http\Controllers;
use App\Type;

use Illuminate\Http\Request;

class CorrectiveController extends Controller
{
    public function index(){
        $data = array();
        $data['menu_active']= 4;
        $data['selects']=Type::all();
        return view('layouts.frontend.partial.corrective',$data);
//        return view('layouts.frontend.partial.photo',$data);
    }
}
