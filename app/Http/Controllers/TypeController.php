<?php

namespace App\Http\Controllers;
use App\Type;
use App\Question;
use App\Report;
use App\Assessment;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function types($slug, $company_id){
        $query = Type::where('slug',$slug)->first();
        $data = array();
        $data['menu_active']= 2;
        $data['selects']=Type::all();
        $data['types']=Question::where('types_id',$query->id)->get();
        $data['types_id']= $query->id;
        $data['company']=Report::find($company_id);
        $data['assessments']=false;
        $query2=Assessment::where('company_id',$company_id)->where('types_id',$query->id)->first();
        if($query2){
            $data['assessments'] = json_decode($query2->evidence, true);
            $data['status_1'] = json_decode($query2->status_1, true);
            $data['status_2'] = json_decode($query2->status_2, true);
        }
        return view('layouts.frontend.partial.select.selectedType',$data);
    }
}
