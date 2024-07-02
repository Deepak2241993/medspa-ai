<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommonModel;

class PatientController extends Controller
{
    public function index(){
        return view('procedure_iq.patients.patients_form');
    }

    public function patientinfo(Request $request){
        $api= new CommonModel();
        $data_arr = $request->except('_token');
        $data = json_encode($data_arr);
        $result = $api->postAPI('submit',$data);

        if(isset($result['error']))
        {
            return redirect()->back()->with('msg', '<h5 style="color: red;">' . $result['error'] . '</h5>');
        }
        else{
            return view('procedure_iq.patients.patient_result',compact('result','data_arr'));
        }


    }
}
