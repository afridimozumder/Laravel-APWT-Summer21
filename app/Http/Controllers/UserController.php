<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        //
    }

    public function create(){
        return view('user.create');
    }

    public function details($id){

        $users = $this->getUserList();
        $user = '';

        foreach ($users as $u){
            if($u['id'] == $id){
                $user = $u;
                break;
            }
        }

        //$user = ['id'=>1, 'username'=>'hitman', 'password'=>'agent47', 'email'=>'agent47@cia.us', 'type'=>'spy'];
        return view('user.details')->with('user', $user);
    }


    public function userlist(){

        $users = $this->getUserList();

        return view('user.userlist')->with('userlist', $users);
    }

    public function edit($id){
        $users = $this->getUserList();
        $user = '';

        foreach ($users as $u){
            if($u['id'] == $id){
                $user = $u;
                break;
            }
        }

        //$user = ['id'=>1, 'username'=>'hitman', 'password'=>'agent47', 'email'=>'agent47@cia.us', 'type'=>'spy'];
        return view('user.edit')->with('user', $user);
    }

    public function update(Request $req, $id){
        echo $id;
        echo "User updated";
    }

    public function delete($id){
        echo $id;
    }

    public function destroy($id){
        echo $id;
    }

    public function getUserList(){
        return [
            ['id'=>1, 'username'=>'alamin', 'password'=>'123', 'email'=>'email@aiub.edu', 'type'=>'admin'],
            ['id'=>2, 'username'=>'xyz', 'password'=>'223', 'email'=>'xyz@aiub.edu', 'type'=>'admin'],
            ['id'=>3, 'username'=>'abc', 'password'=>'124453', 'email'=>'abc@aiub.edu', 'type'=>'admin'],
        ];
    }
}
