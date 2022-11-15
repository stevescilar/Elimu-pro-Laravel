<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeeCategory;

class FeeCategoryController extends Controller
{
    public function ViewFeeCat(){
        $data['allData'] = FeeCategory::all();
        return view('backend.setup.fee.view_cat',$data);
    }

    // AddFeeCat
    public function AddFeeCat(){
        return view('backend.setup.fee.add_cat');
    }

    // StoreCat
    public function StoreCat(Request $request){
        $validateData = $request->validate([
            'name' => 'required|unique:fee_categories,name',
        ]);
        $data = new FeeCategory();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'New Category  Inserted successfully',
            'alert-type' =>'success'
        );
        return redirect()->route('fee.category.view')->with($notification);
    }

    // CatEdit
    public function CatEdit($id){
        $editData = FeeCategory::find($id);
        return view('backend.setup.fee.edit_cat',compact('editData'));
    }
    // UpdateCat
    public function UpdateCat(Request $request, $id){
        $validateData = $request->validate([
            'name' => 'required|unique:fee_categories,name',
        ]);
        $data = FeeCategory::find($id);
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'New Category  Update successfully',
            'alert-type' =>'info'
        );
        return redirect()->route('fee.category.view')->with($notification);
    }

    // DeleteCat
    public function DeleteCat($id){
        $user = FeeCategory::find($id);
        $user->delete();

        $notification = array(
            'message' =>'Category has been Deleted Successfully',
            'alert-type'=>'danger'
        );
        return redirect()->route('fee.category.view')->with($notification);
    }
}
