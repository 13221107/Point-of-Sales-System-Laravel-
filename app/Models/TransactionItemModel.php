<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionItemModel extends Model
{
    protected $table = "transaction_items";
    protected $primaryKey = 'id';
    protected $fillable = [
        'quantity',
        'unit_price',
        'subtotal',
        'transaction_id',
        'product_id'
    ];
    public $timestamps = false;

    public function getAllTransactionItems(){
        return self::all();
    }

    public function setNewTransactionItems($quantity, $unit_price, $subtotal, $transaction_id, $product_id){
        self::create([
            'quantity'=> $quantity,
            'unit_price'=> $unit_price,
            'subtotal' => $subtotal,
            'transaction_id'=> $transaction_id,
            'product_id' => $product_id,
        ]);
    }

    public function getSpecificTransactionItem($id){
        return self::where('id', $id)->get();
    }

    public function updateTransactionItem($id, $quantity, $unit_price, $subtotal, $transaction_id, $product_id){
        return self::where('id', $id)->update([
            'quantity'=> $quantity,
            'unit_price'=> $unit_price,
            'subtotal' => $subtotal,
            'transaction_id'=> $transaction_id,
            'product_id' => $product_id,
        ]);
    }
    public function destroyTransactionItem($id){
        return self::destroy($id);
    }
        
}
