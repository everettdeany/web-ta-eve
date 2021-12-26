<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PengajarModels;

class UserController extends Controller
{
    //
    public function index(Request $request) {
        // $request->session()->remove('user-data');
        if ( $request->session()->get('user-data') != null ) {
            return redirect('/');
        } else {
            return view('user/login');
        }
    }

    public function LoginPost(Request $request) {
        $UserData = User::where('username', $_POST['username'])->get()->first();
        $AllData = array($UserData);
        if ( $_POST['password'] === $UserData->password) {
            var_dump($UserData->roles);
            $request->session()->put('user-data', $AllData);
            $request->session()->put('username', $_POST['username']);
            $request->session()->put('roles', $UserData->roles);
            if ( $request->session()->get('user-data') != null ) {
                return redirect('/');
            }

            // if ( $UserData->roles != 'admin') {
            //     echo "bukan admin";
            //     $request->session()->put('user-data', $AllData);
            //     $request->session()->put('username',$_POST['username']);
            //     if ( $request->session()->get('user-data') != null ) {
            //         return redirect('/');
            //     }
            // } else {
            //     echo "admin";
            //     $request->session()->put('user-data', $AllData);
            //     $request->session()->put('username',$_POST['username']);
            //     if ( $request->session()->get('user-data') != null ) {
            //         return redirect('/');
            //     }
            // }
        }
    }

    public function Logout(Request $request) {
        if ( $request->session()->remove('user-data') ) {
            $request->session()->forget('username');
            return redirect('/');
        } else {
            return redirect('/');
        }
    }
}
