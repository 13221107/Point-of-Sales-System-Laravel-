<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $model = new UserModel();
        $dbResult = $model->getAllUser();

        $data = [
            'user_list' => $dbResult,
        ];
        return view('/user/index', $data);
    }
    public function add(){
        return view('/user/add');
    }
    public function create(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $email = $request->input('email');
        $role_id = $request->input('role_id');

        $model = new UserModel();
        $model->setNewUser($username, $password, $email, $role_id);

        return redirect('/user');
    }
    public function edit($id){
        $model = new UserModel();
        $dbResult = $model->getSpecificUser($id);
        $data = [
            'user_entry'=> $dbResult
        ];
        return view('/user/edit', $data);
    }
    public function update($id, Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $email = $request->input('email');
        $role_id = $request->input('role_id');

        $model = new UserModel();
        $model->setUpdateUser($id,$username, $password, $email, $role_id);
        return redirect('/user');
    }
    public function delete($id){
         $model = new UserModel();
        $dbResult = $model->getSpecificUser($id);
        $data = [
            'user_entry'=> $dbResult
        ];
        return view('/user/delete', $data);
    }
    public function destroy($id){
        $model = new UserModel();
        $model->destroyUser( $id );
        return redirect('/user');
    }
}
