<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentYear;

class StudentYearController extends Controller
{
    // View Year
    public function ViewYear(){

        $data['allData'] = StudentYear::all();

        return view('backend.setup.student_year.view_year',$data);
    }
    // add year
    public function StudentYearAdd(){
        return view('backend.setup.student_year.add_year');
    }

    // Store Year
    public function StudentYearStore(Request $request){

        $validateData = $request->validate([
            'name' => 'required|unique:student_years,name',
        ]);

        $data = new StudentYear();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' =>'Year Inserted Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('student.year.view')->with($notification);
    }

    // Edit function
    public function StudentYearEdit($id){
        $editData  = StudentYear::find($id);
        return view('backend.setup.student_year.edit_year',compact('editData'));

    }

    public function StudentYearUpdate(Request $request, $id){

        $validateData = $request->validate([
            'name' => 'required|unique:student_years,name',
        ]);

        $data = StudentYear::find($id);
        $data->name = $request->name;
        $data-> save();



        $notification = array(
            'message' =>'Year Updated Successfully!',
            'alert-type'=>'success'
        );
        return redirect()->route('student.year.view')->with($notification);

    }

    public function YearStudentDelete($id){
        $user = StudentYear::find($id);
        $user->delete();

        $notification = array(
            'message' =>'Year Deleted Successfully',
            'alert-type'=>'danger'
        );
        return redirect()->route('student.year.view')->with($notification);
    }
    
}
