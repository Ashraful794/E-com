<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use Session;
class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            $adminCount = Admin::where(['username'=>$data['username'],'password'=>$data['password'],'status'=>1])->count();
            // echo "<pre>";print_r($adminCount);die;
            if($adminCount > 0){
                Session ::put('adminSession',$data['username']);
                return redirect('admin/dashboard');
            }else{
                
                return redirect('/admin')->with('flash_message_error','Invalid Username or Password');
            }
        }
        return view('admin.admin_login');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function logout()
    {
        Session::forget('adminSession');
        Session::forget('session_id');
        return redirect('/admin')->with('flash_message_success','loged out Successfully!');
    }
}
