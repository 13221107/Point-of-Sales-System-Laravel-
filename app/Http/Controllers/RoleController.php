<?php

namespace App\Http\Controllers;

use App\Models\RoleModel;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $model = new RoleModel();
        $dbresult = $model->getAllRoles();
        $data = [
            'role_list' => $dbresult,
        ];
        return view('/role/index', $data);
    }
    public function add(){
        return view('/role/add');
    }
    public function create(Request $request){
        $role_name = $request->input('role_name');

        $model = new RoleModel();
        $model->setNewRole($role_name);
        return redirect('/role');
    }

    public function edit($id){
        $model = new RoleModel();
        $dbResult = $model->getSpecificRole($id);
        $data = [
            'role_entry'=> $dbResult,
        ] ;
        return view('/role/edit', $data);
    }
    public function update($id, Request $request){
        $model = new RoleModel();
        $role_name = $request->input('role_name');
        $model->SetUpdateRole($id, $role_name);

        return redirect('role');
    }
    public function delete($id){
        $model = new RoleModel();
        $dbResult = $model->getSpecificRole($id);
        $data = [
            'role_entry'=> $dbResult,
        ] ;
        return view('/role/delete', $data);
    }
    public function destroy($id){
        $model = new RoleModel();
        $model->destroyRole($id);
        return redirect('/role');
    }
}
