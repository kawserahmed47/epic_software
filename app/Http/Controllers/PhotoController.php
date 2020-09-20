<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\Report;
use App\Photo;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use DB;
class PhotoController extends Controller
{
    public function index($company_id){
        $data = array();
        $data['menu_active']= 5;
        $data['selects']=Type::all();
        $data['company']=Report::find($company_id);
        $data['photos']=Photo::where('company_id',$company_id)->get();
        return view('layouts.frontend.partial.photo',$data);
    }

    public function insertPhoto(Request $request){
        $data = array();
        $time = time();
        $data['caption']=$request->caption;
        $data['company_id']=$request->company_id;
        $data['created_at']= date("Y-m-d H:i:s",$time);
    
        $image=$request->file('image');
    
            if($image){
                $image_name=Str::random(12);
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.".".$ext;
                $upload_path='photo/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                if($success){
                    $data['image']=$image_url;
                    DB::table('photos')->insert($data);
                    Session::flash('message', 'Photo Added Successfully!');
                    return Redirect::back();
                }else{
                    Session::flash('message', 'Photo Insert Error!');
                    return Redirect::back();
                }
            }else{
                    Session::flash('message', 'Image Not Found!!!');
                    return Redirect::back();

            }
    }


    public function deletePhoto($id){
        $results = DB::table('photos')->where('id',$id)->first();
        if(!empty($results->image)){
            unlink($results->image);
        }
        $result= DB::table('photos')->where('id',$id)->delete();
                    if($result){
                    Session::flash('message', 'Photo Deleted Successfully!!');
                    return Redirect::back(); }

    }

}
