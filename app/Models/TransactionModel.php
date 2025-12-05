<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Model;

class TransactionModel extends Model
{
    protected $table = "transactions";
    protected $primaryKey = 'id';
    protected $fillable = [
        'transaction_date',
        'total_amount',
        'status',
        'user_id',
        'receipt_id'
    ];
    
    public $timestamps = false;

    public function getAllTransaction(){
        return self::all();
    }

    public function setNewTransaction($transaction_date, $total_amount, $status, $user_id, $receipt_id){
        self::create([
            'transaction_date'=> $transaction_date,
            'total_amount' => $total_amount,
            'status'=> $status,
            'user_id'=> $user_id,
            'receipt_id'=> $receipt_id 
        ]);
    }
    public function getSpecificTransaction($id){
        return self::where('id', $id)->get();
    }
    public function setUpdateTransaction($id, $transaction_date, $total_amount, $status, $user_id, $receipt_id){
        return self::where('id', $id)->update([
            'transaction_date'=> $transaction_date,
            'total_amount'=> $total_amount,
            'status'=> $status,
            'user_id'=> $user_id,
            'receipt_id' => $receipt_id,
        ]);
    }
    public function destroyTransaction($id){
        self::destroy($id);
    }
}
