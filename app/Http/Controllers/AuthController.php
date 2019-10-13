<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Session;
class AuthController extends Controller
{
    public function login(Request $request){
         if($request->session()->has('userid')){ // if userid is not set in session
            return redirect()->to('/');
        }
        else
    	return view('login');
    }
   public function view_ct(){
        return view('view_ct');
    }
    

    public function view_routine(){
        return view('view_routine');
    }
    public function create_ct(){
        return view('create_ct');
    }
    public function enter_ct(){
        return view('enter_ct');
    }
    public function loginstore(Request $req){
    	$email = $req->email;
    	$password = md5($req->password);
        //$password=md5('$password');
    	// select * from employees where email='.$email.' AND password='.$password.'
    	$obj = Employee::where('email','=',$email)
		    		   ->where('password','=', $password)
		    		   ->first(); // returns only one row
                       //dd($obj);

    	if($obj){ // successfully logged in
    		$req->session()->put('userid', $obj->id);
    		$req->session()->put('username', $obj->name);
    		$req->session()->put('userrole', $obj->role);

    		return redirect()->to('/');
    	}
    	else {
    		return redirect()->back()->with('msg',"Invalid Email or Password");
    	}
    }

    public function logout()
    {
       Session::flush();
       return redirect()->to('login'); 
    }
}
