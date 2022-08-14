<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
   public function index()
   {
       return view('admin.login');
   }

   //****************************Authentification********************************//

   public function store(Request  $request)
   {      
      $check = $request->all();
      if(Auth::guard('admin')->attempt(['email' =>$check['email'], 'password' =>$check['password']]))
       {     
          return redirect()->route('admin.dash')->with('message','Admin login successfully');
       }
        else
       {
           return back()->withErrors(['failed' => "Invalid email or pasword!!"]);
       }
   }

   public function destroy()
   {
       Auth::guard('admin')->logout();
       return redirect()->route('admin.login')->with('message','Admin logout Successfully');
   }
}
