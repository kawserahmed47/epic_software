<?php

namespace App\Http\Controllers;
use App\Type;
use App\Assessment;
use App\Report;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index($company_id){
        $data = array();
        $data['menu_active']= 3;
        $data['selects']=Type::all();
        $data['company']=Report::find($company_id);
       $query= $data['results']= Assessment::where('company_id',$company_id)->get();
       if($query){
        return view('layouts.frontend.partial.result',$data);
       }else{
           return "No Result Found";
       }
    }
}
