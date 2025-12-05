<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaxRuleModel extends Model
{
    protected $table = "tax_rules";
    protected $fillable = [
        'tax_name',
        'rate',
        ];
    public $timestamps = false;

    public function getAllTaxRule(){
        return self::all();
    }
    public function setNewTaxRule($tax_name, $rate){
        self::create([
            'tax_name' => $tax_name,
            'rate' => $rate,
        ]);
    }
    public function getSpecificTaxRule($id){
        return self::where('id', $id)->get();
    }
    public function setUpdateTaxRule($id, $tax_name, $rate){
        return self::where('id', $id)->update([
            'tax_name' => $tax_name,
            'rate' => $rate,
        ]);
    }
    public function destroyTaxRule($id){
        self::destroy($id);
    }
}
