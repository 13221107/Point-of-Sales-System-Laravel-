<?php

namespace App\Http\Controllers;

use App\Models\TransactionItemModel;
use Illuminate\Http\Request;

class TransactionItemController extends Controller
{
    public function index(){
        $model = new TransactionItemModel();
        $dbResult = $model->getAllTransactionItems();
        $data = [
            'transaction_item_list' => $dbResult
        ];
        return view('transaction_item/index', $data);
    }
    public function add(){
        return view('/transaction_item/add');
    }

    public function create(Request $request){
        $quantity = $request->input('quantity');
        $unit_price = $request->input('unit_price');
        $subtotal = $request->input('subtotal');
        $transaction_id = $request->input('transaction_id');
        $product_id = $request->input('product_id');

        $model = new TransactionItemModel();
        $model->setNewTransactionItems($quantity, $unit_price, $subtotal, $transaction_id, $product_id);
        return redirect('/transaction_item');
    }

    public function edit($id){
        $model = new TransactionItemModel();
        $dbResult = $model->getSpecificTransactionItem($id);
        $data = [
            'transaction_item_entry' => $dbResult,
        ];
        return view ('/transaction_item/edit', $data);
    }
    public function update($id, Request $request){
        $model = new TransactionItemModel();
        $quantity = $request->input('quantity');
        $unit_price = $request->input('unit_price');
        $subtotal = $request->input('subtotal');
        $transaction_id = $request->input('transaction_id');
        $product_id = $request->input('product_id');

        $model->updateTransactionItem($id, $quantity, $unit_price, $subtotal, $transaction_id, $product_id);
        return redirect('/transaction_item');    
    }

    public function delete($id){
        $model = new TransactionItemModel();
        $dbResult = $model->getSpecificTransactionItem($id);
        $data = [
            'transaction_item_entry' => $dbResult,
        ];
        return view ('/transaction_item/delete', $data);
    }
    
    public function destroy($id){
        $model = new TransactionItemModel();
        $model->destroyTransactionItem($id);
        return redirect('/transaction_item');
    }
}
