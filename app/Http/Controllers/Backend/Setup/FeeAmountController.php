<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeeAmount;
use App\Models\FeeCategory;
use App\Models\StudentClass;


class FeeAmountController extends Controller
{
    public function ViewFeeAmount(){
        // $data['allData'] = FeeAmount::all();
        $data['allData'] = FeeAmount::select('fee_category_id')->groupBy('fee_category_id')->get();
        return view('backend.setup.fee_amount.view_fee_amount',$data);
    }

    public function AddAmount(){
        $data['fee_categories'] = FeeCategory::all();
        $data['classes'] = StudentClass::all();
        return view('backend.setup.fee_amount.add_fee_amount',$data);
    }

    public function StoreFeeAmount(Request $request){

        $countClass = count($request->class_id);
        if ($countClass !=NULL) {
            for ($i=0; $i <$countClass; $i++){
                $fee_amount = new FeeAMount();
                $fee_amount->fee_category_id = $request->fee_category_id;
                $fee_amount->class_id = $request->class_id[$i];
                $fee_amount->amount = $request->amount[$i];
                $fee_amount->save();
            }   
        } //End If condition
        $notification = array(
            'message' => 'Fee Amount  Inserted successfully',
            'alert-type' =>'success'
        );
        return redirect()->route('fee.amount.view')->with($notification);
    }

    public function EditFeeAmount($fee_category_id){
        $data['editData'] = FeeAmount::where('fee_category_id',$fee_category_id)->orderBy('class_id','asc')->get();
        // dd($data['editData']->toArray());
        $data['fee_categories'] = FeeCategory::all();
        $data['classes'] = StudentClass::all();
        return view('backend.setup.fee_amount.edit_fee_amount',$data);
    }
}
