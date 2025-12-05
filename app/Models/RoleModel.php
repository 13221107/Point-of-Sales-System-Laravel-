<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    protected $table = "roles";
    protected $fillable = ['role_name'];

    public $timestamps = false;

    public function getAllRoles(){
        return self::all();
    }

    public function setNewRole($role_name){
        self::create([
            'role_name' => $role_name,
        ]);
    }

    public function getSpecificRole($id){
        return self::where('id', $id)->get();
    }

    public function SetUpdateRole($id, $role_name){
        return self::where('id', $id)->update([
            'role_name'=> $role_name
        ]);
    }
    public function destroyRole($id){
        self::destroy($id);
    }
}
