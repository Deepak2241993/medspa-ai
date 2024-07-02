<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommonModel;
use Session;
class AuthController extends Controller
{
    public function index(){
        if(session()->has('result'))
        {
            return redirect('/dashboard');    
        }
        return view('auth.login');
        
    }
    public function login(Request $request){
        $api= new CommonModel();
        $data_arr = $request->except('_token');
        $data = json_encode($data_arr);
        $result = $api->postAPI('login',$data);
        // echo "<pre>";
        // print_r($result['success']); die();

        if(isset($result['error']))
        {
            session()->flash('msg', '<h5 style="color: red;">' . $result['error'] . '</h5>');
            return redirect('/');
        }
        if(empty($result))
        {
            return redirect('/');
        }
        else
        {
            $request->session()->put('result',$result);
            return redirect('/dashboard');    
        }


    }

    public function register(Request $request){
        return view('auth.register');
    }

    // for registration form submition
    public function registersubmit(Request $request){
        $api= new CommonModel();
        $data_arr = $request->except('_token');
        $data = json_encode($data_arr);
        $result = $api->postAPI('clinic_registration',$data);
        if(isset($result['error']))
        {
            session()->flash('msg', '<h5 style="color: red;">' . $result['error'] . '</h5>');
            return redirect('/register');
        }
        else{
            session()->flash('msg', '<h5 style="color: green;">' . $result['success'] . '</h5>');
            return redirect('/');
        }
       
       
    }
    
    public function forget(){
        return view('auth.forget');
    }

    public function password_update(){
        return view('auth.otp_confirmation');
    }
    public function logout(Request $request) {
        if(session()->has('result'))
        {
            session()->pull('result',null);
        }
        return redirect('/');
      }

}
