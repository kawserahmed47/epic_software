<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class FrontController extends Controller
{
    public function index(){
        $data = array();
        $data['menu_active']= 1;
        $data['selects']=Type::all();
        return view('home',$data);
    }
}
