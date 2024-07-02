<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommonModel;
use App\Http\Controllers\Controller;
use Session;

class ModalityController extends Controller
{
    public function index(){
        $commonmodel = new CommonModel();
        $company = $commonmodel->getApi('company');
        return view('equipment.equipment_form',compact('company'));
    }

    public function platforms(Request $request){
        $commonmodel = new CommonModel();
        $result = $commonmodel->getApi('platform?company_name='.$request->company_name);
        if($result)
        {
        return response()->json(['platforms' => $result]);
        }
        else{
          echo "No Data Found";
        }
        
    }
    
    public function handpieces(Request $request){
        $commonmodel = new CommonModel();
        $company_name = $request->company_name;
        $platform = $request->platform_name;
// dd('handpiece?company_name='.$company_name.'&platform='.$platform);
        $result = $commonmodel->getApi('handpiece?company_name='.$company_name.'&platform='.$platform.'');
        if($result)
        {
        return response()->json(['handpieces' => $result]);
        }
        else{
          echo "No Data Found";
        }
        
    }

    public function modality(Request $request){
        $commonmodel = new CommonModel();
        $company_name = $request->company_name;
        $platform = $request->platform_name;
        $handpiece_name = $request->handpiece_name;

        $result = $commonmodel->getApi('modality?company_name='.$company_name.'&platform='.$platform.'&handpiece='.$handpiece_name.'');
        if($result)
        {
        return response()->json(['modality' => $result]);
        }
        else{
          echo "No Data Found";
        }
        
    }

    public function submitmodality(Request $request){
        $api= new CommonModel();
        $data_arr = $request->except('_token');
        $data = json_encode($data_arr);
        $result = $api->postAPI('submit_equipment',$data);

        if(isset($result['error']))
  {
      session()->flash('msg', '<h5 style="color: red;">' . $result['error'] . '</h5>');
      return redirect('/modalitylist');
  }
  else{
      session()->flash('msg', '<h5 style="color: green;">' . $result['success'] . '</h5>');
      return redirect('/modalitylist');
    }


  }

public function modalitylist(){
  $commonmodel = new CommonModel();
  $clinic_id =Session::get('result')['content']['clinic_id'];
  $result = $commonmodel->getApi('get_equipment?clinic_id='.$clinic_id);


  if(isset($result['error']))
  {
      session()->flash('msg', '<h5 style="color: red;">' . $result['error'] . '</h5>');
      return redirect('/equipment.equipment_list');
  }
  else{
      return view('equipment.equipment_list',compact('result'));
    }
}


public function equip_delete(Request $request,$eqip_id){
  $api= new CommonModel();
  $data_arr = array();
  $data_arr=['clinic_id'=>Session::get('result')['content']['clinic_id'],'equip_id'=>$eqip_id];
  $data = json_encode($data_arr);
  $result = $api->postAPI('delete_equipment',$data);

  if(isset($result['error']))
{
session()->flash('msg', '<h5 style="color: red;">' . $result['error'] . '</h5>');
return redirect('/modalitylist');
}
else{
session()->flash('msg', '<h5 style="color: green;">' . $result['success'] . '</h5>');
return redirect('/modalitylist');
}
}





}
