<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function about(){
        return view("about");
    }

    function contact($id){
        return view("about", compact('id'));
    }

    function store(Request $request){
      $name = $request->name;
      $email = $request->email;
      $password = $request->password;
      $mobile = $request->mobile;

      $request->validate([
        'name' => 'required|alpha',
        'email' => 'required',
        'password' => 'required',
        'mobile' => 'required|numeric|min:10',
      ],
      [
        'name.required' => 'Name is required!',
        'name.alpha' => 'The name is accept only letters',
        'email.required' => 'The email is required',
        'password.required' => 'The password is required',
        'mobile.required' => 'The mobile number is required',
        'mobile.numeric' => 'The mobile number is accept only numbers',
      ]
    );

      echo $name."<br>".$email."<br>".$password."<br>".$mobile;
    }

    function login(Request $request){
        $email = $request->email;
        $password = $request->password;
  
        echo $email."<br>".$password;
      }
}
