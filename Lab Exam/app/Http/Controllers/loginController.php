<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Employee;

class loginController extends Controller
{
    public function index(){
    	return view('login.index');
    }

    public function verify(Request $req){
        
        $employee  = Employee::where('username', $req->username)
                        ->where('password', $req->password)
                        ->first();

    	if($employee != null){

            $req->session()->put('username', $req->username);
            $req->session()->put('type', $employee['type']);
    		if($employee['type'] == 'Admin')
            {
                return redirect('/adminhome');
            }
            else
            {
                return redirect('/employeehome');   
            }
    	}else{
            $req->session()->flash('msg', 'invalid username/password');
    		return redirect('/login');
    	}
    }
}
