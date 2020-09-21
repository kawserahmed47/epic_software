<?php

namespace App\Http\Controllers;
use App\Report;
use App\Type;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ReportController extends Controller
{


    public function createReport(){
        $data = array();
        $time = time();
        $data['created_at']= date("Y-m-d H:i:s",$time);
        $data['updated_at']= date("Y-m-d H:i:s",$time);
        $company_id= DB::table('reports')->insertGetId($data);

        $types = Type::all();
        foreach($types as $type){
            $data['company_id']= $company_id;
            $data['types_id']= $type->id;
            DB::table('assessments')->insert($data);
        }

        return redirect()->route('report',$company_id);


    }

    public function report($company_id){
        $data = array();
        $data['menu_active']= 1;
        $data['selects']=Type::all();
        $data['company']=Report::find($company_id);
        return view('home',$data);

    }


    public function insertReport(Request $request){
    //    $data = new Report();
        $data = Report::find($request->company_id);
       $data->name=$request->name;
       $data->adderss=$request->adderss;
       $data->city=$request->city;
       $data->state=$request->state;
       $data->postal_code=$request->postal_code;
       $data->country=$request->country;
       $data->geolocation=$request->geolocation;
       $data->phone=$request->phone;
       $data->other_phone=$request->other_phone;
       $data->csan_id=$request->csan_id;
       $data->point_of_contact_name=$request->point_of_contact_name;
       $data->location_added_by=$request->location_added_by;
       $data->website=$request->website;
       $data->point_of_contact_email=$request->point_of_contact_email;
       $data->audit_date=$request->audit_date;
       $data->audit_stage=$request->audit_stage;
       $data->assigned_auditor_name=$request->assigned_auditor_name;
       $data->wco=$request->wco;
       $data->hole_certification=$request->hole_certification;
       $data->has_the_facility=$request->has_the_facility;
       $data->primary_industry=$request->primary_industry;
       $data->product_type=$request->product_type;
       $data->year_established=$request->year_established;
       $data->grounds_size=$request->grounds_size;
       $data->number_of_buildings=$request->number_of_buildings;
       $data->facility_size=$request->facility_size;
       $data->number_of_access=$request->number_of_access;
       $data->hours_of_operation=$request->hours_of_operation;
       $data->number_of_employees=$request->number_of_employees;
       $data->number_of_contract_employees=$request->number_of_contract_employees;
       $data->number_of_security_guards=$request->number_of_security_guards;
       $data->number_of_migrant_workers=$request->number_of_migrant_workers;
       $data->annual_revenue=$request->annual_revenue;
       $data->currency=$request->currency;
       $data->number_of_shipments_to_usa=$request->number_of_shipments_to_usa;
       $data->port_of_embarkation=$request->port_of_embarkation;
       $data->port_of_arrival=$request->port_of_arrival;
       $data->save();
       return redirect()->back();

    }

    public function viewReport(){
        $data = array();
        $data['reports']= Report::all();
        return view('admin.viewReport',$data);
    }

    public function deleteReport($company_id){
         $query = DB::table('reports')->where('id',$company_id)->delete();
         if($query){
             Session::flash('message', 'Report Deleted Successful');
             return redirect()->back();
         }
       
    }
}
