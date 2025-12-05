<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = "users";
    protected $fillable = [
        'username',
        'password',
        'email',
        'role_id',
        'created_at', 
        'updated_at',
        'last_login',
     ];
     public function getAllUser(){
        return self::all();
     }
     
     public function setNewUser($username, $password, $email, $role_id){
        self::create([
            'username' => $username,
            'password'=> $password,
            'email'=> $email,
            'role_id'=> $role_id,
            'last_login' => now(),
        ]);
     }
     public function getSpecificUser($id){
        return self::where('id', $id)->get();
     }

     public function setUpdateUser($id, $username, $password, $email, $role_id){
        return self::where('id', $id)->update([
            'username'=> $username,
            'password'=> $password,
            'email'=> $email,
            'role_id'=> $role_id,
        ]);
    }
    public function destroyUser($id){
        return self::destroy($id);
    }
}