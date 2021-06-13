<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

        public function verify(Request $req){
            //dd($req);
            //echo "username : ".$req->uname. "and password: ".$req->password;

            
            //$uname = $req->session()->get('uname');

            $validation = Validator::make($req->all(), [
                'uname' => 'required|min:5',
                'password' => 'required',

            ]);

            if($validation->fails()){
                return redirect('/login')
                    ->with('errors', $validation->errors());
            }
            
            if( $req->uname == $req->password){
                $req->session()->put('uname', $req->uname);
                return redirect('/home');
                

            }else{
                $req->session()->flash('msg', 'Invalid username or password!');
                //$req->session()->flush();
                return redirect('/login');

                //return view('login.index');
            }
            
        }
}
