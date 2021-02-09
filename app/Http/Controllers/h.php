<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class h extends Controller
{
    //
    public function index()
    {
    	return "hello";
    }

    public function login()
    {
    	return view('login');
    }

    public function chk_login(Request $request)
    {
    	 $request->validate([
            'user_name'=>['required'],
            'password'=>['required']
        ]);
        $user_name = addslashes(trim($request->input('user_name')));
        $password = $request->input('password');
     

      if(Auth::attempt(['user_name'=>$user_name,'password'=>$password])){
            
        Auth::login(Auth::user(), true);

        // print user information
          $data=Auth::user();

            // $data=User::('users')->where('password','admin');
            return view('dashboard',['data' => $data]);

        }
  return redirect()->back()->withInput($request->only('user_name', 'remember'))->withErrors([
                    'approve' => 'Invalid User Name and Password',
                ]);  

                 
    }


    public function dashboard()
    {
    	return view('dashboard');
    }

    public function logout()
    {    
    	Auth::logout();
    	return redirect('/login');
    }

}
