<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class SelectController extends Controller
{
    public function security(){
        $data = array();
        $data['menu_active']= 2;
        $data['selects']=Type::all();
        return view('layouts.frontend.partial.select.security',$data);
    }
}
