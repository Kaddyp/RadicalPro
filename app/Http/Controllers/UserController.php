<?php

namespace App\Http\Controllers;
use App\Models\User;
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

    function signUpHandler(Request $request){
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


        $obj = new User();
        $obj->name = $name;
        $obj->email = $email;
        $obj->password = $password;
        $obj->mobile = $mobile;
        $obj->save(); // Save is a elocant builtin function
        return redirect('login');
        //echo "Data Saved.";

        //$message = 'User register successfully!';
        //return view('login',compact('message'));
    }

    function login_authenticate(Request $request){
        $email = $request->email;
        $password = $request->password;
  
        echo $email."<br>".$password;
    }


    function delete($id){
      //Delete From tablename Where id is $id
      User::find($id)->delete();
      return redirect('show');
    }






    // function SignUp(){
    //   $name = $request->name;
    //   $email = $request->email;
    //   $password = $request->password;
    //   $mobile = $request->mobile;

    //   $request->validate([
    //       'name' => 'required|alpha',
    //       'email' => 'required',
    //       'password' => 'required',
    //       'mobile' => 'required|numeric|min:10',
    //     ],
    //     [
    //       'name.required' => 'Name is required!',
    //       'name.alpha' => 'The name is accept only letters',
    //       'email.required' => 'The email is required',
    //       'password.required' => 'The password is required',
    //       'mobile.required' => 'The mobile number is required',
    //       'mobile.numeric' => 'The mobile number is accept only numbers',
    //     ]
    //   );
    
    //   $obj = new User();
    //   $obj->name = $name;
    //   $obj->email = $email;
    //   $obj->password = $password;
    //   $obj->user_type = "user";
    //   $obj->save();

    //   echo "Data has been saved";
    // }


    // function login(Request $request){
    //   $email = $request->email;
    //   $password = $request->password;

    //   $k = Auth::attempt(['email' => $email, 'password' => $password]);

    //   if($k){
    //     return redirect('dashboard');
    //   }else{
    //     echo 'Invalid Login';
    //   }
    // }

    // function logout(Request $request){
    //   Auth::logout();
    //   return redirect('login');
    // }


    function show()
    {
        // fetch data from users table - SELECT * from users - Model::all() -> Laravel
        $k = User::all();
        return view('show',compact('k'));

    }



}
