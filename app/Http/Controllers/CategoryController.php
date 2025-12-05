<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $model = new CategoryModel();
        $dbResults = $model->getAllCategoryEntries();
        $data = [
            'categoryList'=> $dbResults,
        ];
        return view('/categories/index', $data);
    }
    public function add(){
        return view('/categories/add');
    }
    public function create(Request $request){
        $categoryName = $request->input('category_name');
        $description = $request->input('description');

        $model = new CategoryModel();   
        $model->setNewCategory($categoryName, $description); 
        return redirect('/categories');
    }

    public function edit($id){
        $model = new CategoryModel();
        $dbResult = $model->getSpecificCategory($id);

        $data = [
            'categoryEntry'=> $dbResult,
        ];
        return view('/categories/edit', $data);
    }
    public function update($id, Request $request){
        $model = new CategoryModel();
        $categoryName = $request->input('category_name');
        $description = $request->input('description');
        $model->setUpdateCategory($id, $categoryName, $description);
        
        return redirect('/categories');
    }

    public function delete($id){
        $model = new CategoryModel();
        $dbResult = $model->getSpecificCategory($id);

        $data = [
            'categoryEntry'=> $dbResult,
        ];
        return view('/categories/delete', $data);
    }

    public function destroy($id){
        $model = new CategoryModel();
        $model->destroyCategory($id);
        return redirect('/categories');
    }
};  