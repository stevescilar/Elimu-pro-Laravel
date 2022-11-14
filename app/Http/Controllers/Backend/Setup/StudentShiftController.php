<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentShift;

class StudentShiftController extends Controller
{
    // view shifts
    public function ViewShift(){
        $data['allData'] = StudentShift::all();

        return view('backend.setup.shift.view_shift',$data);
    }

    public function AddShift(){
        return view('backend.setup.shift.add_shift');
    }

    public function StoreShift(Request $request){
        // validate entry
        $validateInfo = $request->validate([
            'name' => 'required|unique:student_shifts,name',
        ]);

        $data = new StudentShift();
        $data ->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'New Shift  Inserted successfully',
            'alert-type' =>'success'
        );
        return redirect()->route('student.shift.view')->with($notification);
    }

    public function StudentShiftEdit($id){
        $editData = StudentShift::find($id);
        return view('backend.setup.shift.edit_shift',compact('editData'));
    }

    // updating Db
    public function UpdateShift(Request $request, $id){
        $validateInfo = $request->validate([
            'name' => 'required|unique:student_shifts,name',
        ]);
        $data = StudentShift::find($id);
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Shift Updated successfully',
            'alert-type' =>'info'
        );

        return redirect()->route('student.shift.view')->with($notification);

    }

    public function DeleteShift($id){
        $user = StudentShift::find($id);
        $user->delete();
        
        $notification = array(
            'message' =>'Shift Deleted Successfully',
            'alert-type'=>'danger'
        );

        return redirect()->route('student.shift.view')->with($notification);
    }
}
