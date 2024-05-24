<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function insertion(Request $request) {
        $name = $request->post('name');
        $email = $request->post('email');
        $password = $request->post('password');
        
        // Check if all required fields are provided
        if (!$name || !$email || !$password) {
            $msg = "Please provide name, email, and password";
            return $msg;
        }
        
        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $msg = "Invalid email format";
            return $msg;
        }
        
        // Check if the email already exists
        $existingUser = DB::table('users')->where('email', $email)->first();
        
        if($existingUser) {
            $msg = "Email already exists";
            return $msg;
        } else {
            // Hash the password before insertion
            $hashedPassword = bcrypt($password);
            
            // Insert the user data
            DB::table('users')->insert(['name' => $name, 'email' => $email, 'password' => $hashedPassword]);
            $msg = "Data inserted";
            return $msg;
        }
    }
    
    

    public function show(Request $request){
       $Arr['data'] =  DB::table('users')->get();
       //check($Arr);
       return view('show' , $Arr);
    }
    public function edit(Request $request , $id){
        $Arr['data'] =  DB::table('users')->where((['id'=>$id]))->get();
        //check($Arr);
        return view('edit',$Arr);
     }
     public function update(Request $request , $id){
         //   check($request->post());
         $name = $request->post('name');
        $email = $request->post('email');
        $Arr['data'] =  DB::table('users')->where((['id'=>$id]))->update(['name'=>$name , 'email'=>$email]);
        $msg = "data updated successfully" ;
        
        return $msg;
     }
     public function delete(Request $request , $id){
         DB::table('users')->where(['id'=>$id])->delete();
        return redirect('/show');
     }
}
 function check($arr){
    echo "<pre>" ;
    print_r($arr);
 }