<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = "products";
    protected $fillable = [
        'product_name',
         'price', 
         'description', 
         'stocklevel', 
        ];
    public $timestamps = false;
    public function getAllProduct(){
        return self::all();
    }
    public function setNewProduct($product_name, $price, $description, $stocklevel){
        self::create([
            'product_name' => $product_name,
            'price'=> $price,
            'description'=> $description,
            'stocklevel' => $stocklevel,
        ]);
    }
    public function getSpecificProduct($id){
        return self::where('id', $id)->get();
    }
    public function setUpdateProduct($id,$product_name, $price, $description, $stocklevel){
        return self::where('id', $id)->update([
            'product_name'=> $product_name,
            'price'=> $price,
            'description'=> $description,
            'stocklevel'=> $stocklevel,
        ]);
    }
    public function destroyProduct($id){
        self::destroy($id);
    }
}