<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentGroup;


class StudentGroupController extends Controller
{
    // View Group
    public function ViewGroup(){
        $data['allData'] = StudentGroup::all();

        return view('backend.setup.group.view_group',$data);
    }

    // add group
    public function StudentGroupAdd(){
        return view('backend.setup.group.add_group');
    }

    // store group
    public function StudentGroupStore(Request $request){
        // validate the entry for uniqueness
        $validateInfo = $request->validate([
            'name' => 'required|unique:student_groups,name',
        ]);

        // create new group object and store
        $data = new StudentGroup();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'New Group  Inserted successfully',
            'alert-type' =>'success'
        );
        return redirect()->route('student.group.view')->with($notification);
    }

    // Edit Function
    public function StudentGroupEdit($id){
        $editData  = StudentGroup::find($id);
        return view('backend.setup.group.edit_group',compact('editData'));
    }
    // updateGroup
    public function StudentGroupUpdate(Request $request, $id){

        $validateData = $request->validate([
            'name' => 'required|unique:student_groups,name',
        ]);

        $data = StudentGroup::find($id);
        $data->name = $request->name;
        $data-> save();



        $notification = array(
            'message' =>'Group Updated Successfully!',
            'alert-type'=>'success'
        );
        return redirect()->route('student.group.view')->with($notification);

    }

    public function GroupStudentDelete($id){
        $user = StudentGroup::find($id);
        $user->delete();

        $notification = array(
            'message' =>'Group Deleted Successfully',
            'alert-type'=>'danger'
        );
        return redirect()->route('student.group.view')->with($notification);
    }

}
