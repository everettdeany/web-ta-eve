<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userControllerphp extends Controller
{
    

   public function login() {
       return view('user/login');
   }

   public function login_post(Request $request) {
       $DataUser = User::where('username', $_POST['username'])->get()->first();
       var_dump($DataUser->username);
       if ($_POST['password'] != $DataUser->password) {
           echo 'error';
       } else {
           $request->session()->put('user-data', $DataUser);
           return redirect('/dashboard');
       }
   }
}
