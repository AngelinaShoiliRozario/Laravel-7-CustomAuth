<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // own defined functions
    public function username(){
      return Auth::user()->name;
    }
    public function login()
    {
        return view('login');
    }  
    
    public function postLogin(Request $request)
    {
        $request->validate([
          'email' => 'required',
          'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $request->filled('remember')))        
          {
            return redirect()->intended('dashboard');
          }
        return redirect("login")->withSuccess('Opps! You have entered invalid credentials');
    }
    public function register()
    {
        return view('register');
    }
    public function postRegister(Request $request)
    {  
        $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:3',
        ]);
        
        User::create([
          'name' => $request->name,
          'email' => $request->email,
          'admin' => $request->filled('admin'),
          'password' => Hash::make($request->password)
        ]);
        return redirect("login");
        // return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
     
    public function dashboard()
    {
      $data =Auth::user();
      if(Auth::check())
      {
        return view('dashboard')->with('data', $data); 
      }
      return redirect("login")->withSuccess('Opps! You do not have access');
    }
    public function adminDashboard()
    {
      if(Auth::check())
      {
        return view('admindashboard'); 
      }
      return redirect("login")->withSuccess('Opps! You do not have access');
    }
    public function userDashboard()
    {
      
      if(Auth::check())
      {
        return view('userdashboard'); 
      }
      return redirect("login")->withSuccess('Opps! You do not have access');
    }
    public function forgetPassword()
    {
      return view('forgetPassword');
    }
    public function forgetPasswordPost(Request $request)
    {
      $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:3',
        'confirmpassword' => 'required|min:3',
        ]);
      $email = $request->get('email');
      $user = User::where('email',$email)->first();
      //dd($user);
     if($request->password===$request->confirmpassword){
        //dd($request->password);
        $success=User::where('email', $request->email)
                        ->update(['password' => Hash::make($request->password)]);
        if($success){
          return redirect('login');
        }
        else{
          return back();
        }
     }
      
    }
    public function logout() {
        session()->flush();
        Auth::logout();
        return Redirect('login');
    }
}
