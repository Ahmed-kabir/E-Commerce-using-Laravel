<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufecture;

class ManufectureController extends Controller
{
    public function addManufecture(){
        return view('manufecture.add_manufecture');
    }
    public function saveManufecture(Request $request){
        $manufecture=new Manufecture();
        $manufecture->manufecture_name=$request->manufecture_name;
        $manufecture->manufecture_description=$request->manufecture_description;
        $manufecture->publication_status=$request->publication_status;
        $manufecture->save();
        return back()->with('message','data saved successffully');
        
    }
    public function manageManufecture(){
        $manufectures=Manufecture::all();
        return view('manufecture.manageManufecture',['manufecture'=>$manufectures]);
    }
    public function editManufecture($id){
        $manufectureById=Manufecture::where('id',$id)->first();
        return view('manufecture.editManufecture',['manufectureById'=>$manufectureById]);
        
    }
    public function updateManufecture(Request $request){
        $manufecture=Manufecture::find($request->manufectureId);
        $manufecture->manufecture_name=$request->manufecture_name;
        $manufecture->manufecture_description=$request->manufecture_description;
        $manufecture->publication_status=$request->publication_status;
        $manufecture->save();
        return back()->with('message','data updated successfully');
    }
    public function deleteManufecture($id){
        $manufecture=Manufecture::where('id',$id);
        $manufecture->delete();
        return back()->with('message','data deleted successfully');
        
    }
}
