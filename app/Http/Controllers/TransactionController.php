<?php

namespace App\Http\Controllers;

use App\Models\TransactionModel;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(){
        $model = new TransactionModel();
        $dbResult = $model->getAllTransaction();
        $data = [
            'transaction_list'=> $dbResult
        ];
        return view('/transaction/index', $data);
    }
    public function add(){
        return view('/transaction/add');
    }
    public function create(Request $request){
        $transaction_date = $request->input('transaction_date');
        $total_amount = $request->input('total_amount');
        $status = $request->input('status');
        $user_id = $request->input('user_id');
        $receipt_id = $request->input('receipt_id');   

        $model = new TransactionModel();
        $model->setNewTransaction($transaction_date,$total_amount, $status, $user_id, $receipt_id);
        return redirect('/transaction');
    }
    public function edit($id){
        $model = new TransactionModel();
        $dbResult = $model->getSpecificTransaction($id);
        $data = [
            'transaction_entry'=> $dbResult,
        ];
        return view('/transaction/edit', $data);
    }
    public function update($id, Request $request){
        $model = new TransactionModel();
        $transaction_date = $request->input('transaction_date');
        $total_amount = $request->input('total_amount');
        $status = $request->input('status');
        $user_id = $request->input('user_id');
        $receipt_id = $request->input('receipt_id');
        $model->setUpdateTransaction($id, $transaction_date, $total_amount, $status, $user_id, $receipt_id);
        return redirect('/transaction');
    }   
    public function delete($id){
        $model = new TransactionModel();
        $dbResult = $model->getSpecificTransaction($id);
        $data = [
            'transaction_entry'=> $dbResult,
        ];
        return view('/transaction/delete', $data);
    }
    public function destroy($id){
        $model = new TransactionModel();
        $model->destroyTransaction($id);
        return redirect('/transaction');
    }

}
