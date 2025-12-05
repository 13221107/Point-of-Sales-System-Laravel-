<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CategoryModel extends Model
{   
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'category_name', 
        'description', 
        'created_at', 
        'updated_at'
    ];

    public function getAllCategoryEntries(){
        return self::all();
    }
    public function setNewCategory($category_name, $description){
        // DB::insert('INSERT INTO categories (category_name, description) 
        // VALUES (?, ?)', [$category_name, $description]);
        self::create([
            'category_name' => $category_name,
            'description'=> $description,
        ]);
    }  

    public function getSpecificCategory($id){
        //return DB::select('SELECT * FROM categories WHERE id = ?', [$id]); 
        return self::where('id', $id)->get();
    }

    public function setUpdateCategory($id, $category_name, $description){
        // return DB::update('UPDATE categories SET category_name = ?, description = ? WHERE id = ?',
        //  [$category_name, $description, $id]);
        return self::where('id', $id)->update([
            'category_name' => $category_name,
            'description'=> $description,
        ]);
    }
    public function destroyCategory($id){
        //DB::delete('DELETE FROM categories WHERE id = ?', [$id]);
        self::destroy($id);
    }
};
 