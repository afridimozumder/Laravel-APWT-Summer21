<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

        public function verify(Request $req){
            //dd($req);
            //echo "username : ".$req->uname. "and password: ".$req->password;
            
            if($req->uname == $req->password){
                //set session or cookie here
                return redirect('/home');
            }else{
                echo "invalid user!";
            }
            
        }
}
