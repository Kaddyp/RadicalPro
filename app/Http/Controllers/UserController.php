<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

use Illuminate\Database\Eloquent\Builder;

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
  

        $k = Auth::attempt(['email'=>$email, 'password'=>$password]);

        //echo $email."<br>".$password;

        if($k){
          return redirect('dashboard');
        }else{
          echo 'Invalid Login';
        }
    }

    function logout(Request $request){
      Auth::logout();
      return redirect('login');
    }

    function delete($id){
      //Delete From tablename Where id is $id
      User::find($id)->delete();
      return redirect('show');
    }

    function softDeleteRecords()
    {
        $k = User::onlyTrashed()->get();
        dd($k->toArray()); //Testing dia and dump 
    }

    function upload(Request $request)
    {
        $path = $request->file("file")->store("public");
        echo "File has been uploaded";

        // $k = $request->file("file")->store("public");
        // $obj = new User();
        // $obj->name = "Ankit";
        // $obj->email = "ankit@gmail.com";
        // $obj->password = "123";
        // $obj->phone = "9415225555";
        // $obj->image = $k;
        // $obj->save();
        // echo "Uploaded";

        

    }

    function show()
    {
        // fetch data from users table - SELECT * from users - Model::all() -> Laravel
        $k = User::all();
        return view('show',compact('k'));

    }


    function save(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        $obj = new User();
        $obj->name = $name;
        $obj->email = $email;
        $obj->password = $password;
        $obj->save();

        return response()->json(['message'=>'Data has been saved']);
    }

    function users()
    {
        $k = User::all();
        return response()->json($k);
    }

    function deleteUsers($id)
    {
        User::find($id)->delete();
        return response()->json(['message'=>'Record has been deleted']);
    }

    function send_email(){
      $to = ""
    }

}
