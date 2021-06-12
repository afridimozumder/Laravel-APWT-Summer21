<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req){
        // check session or cookie
        


        $id = '47';
        $name = $req->session()->get('uname');

        if($req->session()->has('uname')){
            return view('home.index', compact('id', 'name'));

        }
        else{
            $req->session()->flash('msg', 'You have to login first!');
            return redirect('/login');
        }

        
        //Alternate way:
        //return view('home.index')->with('id', '123');
        // return view('home.index')
        //         ->withId('123')
        //         ->withName('alamin');
        //return view('home.index', ['id'=>123, 'name'=>'alamin']);
    }
}
