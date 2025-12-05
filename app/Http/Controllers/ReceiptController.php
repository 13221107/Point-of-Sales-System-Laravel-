<?php

namespace App\Http\Controllers;

use App\Models\ReceiptModel;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function index(){
        $model = new ReceiptModel();
        $dbResult = $model->getAllReceipt();
        $data = [
            'receipt_list' => $dbResult,
        ];
        return view('/receipt/index', $data);
    }
    public function add(){
        return view('/receipt/add');
    }

    public function create(Request $request){
        $date = $request->input('date');
        $printed_by_user_id = $request->input('printed_by_user_id');

        $model = new ReceiptModel();
        $model->setNewReceipt($date, $printed_by_user_id);
        return redirect('/receipt');
    }
    public function edit($id){
        $model = new ReceiptModel();
        $dbResult = $model->getSpecificReceipt($id);
        $data = [
            'receipt_entry'=> $dbResult,
        ];
        return view('/receipt/edit', $data);
    }
    public function update($id, Request $request){
        $model = new ReceiptModel();
        $date = $request->input('date');
        $printed_by_user_id = $request->input('printed_by_user_id');
        $model->setUpdateReceipt($id, $date, $printed_by_user_id);
    return redirect('receipt');
    }

    public function delete($id){
        $model = new ReceiptModel();
        $dbResult = $model->getSpecificReceipt($id);
        $data = [
            'receipt_entry'=> $dbResult,
        ];
        return view('/receipt/delete', $data);
    }
    public function destroy($id){
        $model = new ReceiptModel();
        $model->destroyReceipt($id);
        return redirect('/receipt');
    }

}
