<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    public function index(){
        $model = new ProductModel();
        $dbResult = $model->getAllProduct();
        $data = [
            'product_list' => $dbResult,
        ];
        return view('/product/index', $data);
    }
    public function add(){
        return view('/product/add');
    }
    public function create(Request $request){
        $product_name = $request->input('product_name');
        $price = $request->input('price');
        $description = $request->input('description');
        $stocklevel = $request->input('stocklevel');

        $model = new ProductModel();
        $model->setNewProduct($product_name, $price, $description, $stocklevel);
        return Redirect('/product');
    }
    public function edit($id){
        $model = new ProductModel();
        $dbResult = $model->getSpecificProduct($id);
        $data = [
            'product_entry'=> $dbResult,
        ];
        return view('product/edit', $data);
    }
    public function update($id, Request $request){
        $model = new ProductModel();
        $product_name = $request->input('product_name');
        $price = $request->input('price');
        $description = $request->input('description');
        $stocklevel = $request->input('stocklevel');

        $model->setUpdateProduct($id, $product_name, $price, $description, $stocklevel);

        return redirect('/product');
    }

    public function delete($id){
        $model = new ProductModel();
        $dbResult = $model->getSpecificProduct($id);
        $data = [
            'product_entry'=> $dbResult,
        ];
        return view('product/delete', $data);
    }

    public function destroy($id){
        $model = new ProductModel();
        $model->destroyProduct($id);
        return redirect('product');
    }
}
    

