<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

use DB;

class AssessmentController extends Controller
{
    public function insertAssessment(Request $request){
        $time = time();
        $data = array();

        // $data['company_id']= $request->company_id;
        // $data['types_id']= $request->types_id;
        $data['status_1']= json_encode($request->status_1);
        $data['evidence']= json_encode($request->evidence);
        $data['status_2']= json_encode($request->status_2);
        $data['updated_at']= date("Y-m-d H:i:s",$time);
        $query = DB::table('assessments')->where('company_id', $request->company_id)->where('types_id',$request->types_id)->update($data);
        if($query){
            Session::flash('message','Data Recored Successfully');
            return redirect()->back();
        }
        
    }
}
