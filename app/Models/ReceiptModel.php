<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReceiptModel extends Model
{
   protected $table = "receipts";
   protected $primaryKey = 'id';
   protected $fillable = [
        'date',
        'printed_by_user_id',
   ];

   public $timestamps = false;

   public function getAllReceipt(){
      return self::all();
   }

   public function setNewReceipt($date, $printed_by_user_id){
      return self::create([
         'date'=> $date,
         'printed_by_user_id'=> $printed_by_user_id,
      ]);
   }
   public function getSpecificReceipt($id){
      return self::where('id', $id)->get();
   }

   public function setUpdateReceipt($id, $date, $printed_by_user_id){
      return self::where('id', $id)->update([
         'date'=> $date,
         'printed_by_user_id'=> $printed_by_user_id,
      ]);
   }
   public function destroyReceipt($id){
      self::destroy($id);
   }

}
