<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('auth.login');
    }
    public function check(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("admin/login")->withSuccess('Login details are not valid');
    }


    public function createRegister()
    {
        return view('back.pages.admin.register');
    }
      
    public function storeRegister(Request $request)
    {  
        $request->validate([
            'name'      => 'required',
            'username'  => 'required|unique:users',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("admin/dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],

            'email' => $data['email'],
            'phone' => $data['phone'],
            'username' => $data['username'],
        
            'role' => $data['role'],
            'status' => $data['status'],
            'photo' => $data['photo'],
            'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            $teamMembers = User::orderBy('id','DESC')->get();
            return view('back.pages.dashboard', compact('teamMembers'));
        }
  
        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return Redirect('admin/login');
    }


    // Active & Inactive
    public function Active(){
        $activemembers = User::where(['status'=>'active'])->orderBy('id','DESC')->get(); 
        return view('back.pages.admin.activeteams', compact('activemembers'));
    }
    public function Inactive(){
        $inactivemembers = User::where(['status'=>'inactive'])->orderBy('id','DESC')->get(); 
        return view('back.pages.admin.inactiveteams', compact('inactivemembers'));
    }



}
