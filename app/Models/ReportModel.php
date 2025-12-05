<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportModel extends Model
{
    protected $table = 'reports';

    protected $primaryKey = 'id';

    protected $fillable = [
        'period_start',
        'period_end',
        'report_type',
        'generated_by_user_id',
        'created_at',
        'updated_at',
    ];

    public function getAllReportsEntry(){
        return self::all();
    }

    public function setNewReport($period_start, $period_end, $report_type, $generated_by_user_id){
        self::create([
            'period_start'=> $period_start,
            'period_end'=> $period_end,
            'report_type' => $report_type,
            'generated_by_user_id' => $generated_by_user_id,
        ]);
    }
       public function getSpecificReport($id){
      return self::where('id', $id)->get();
   }

   public function setUpdateReport($id,$period_start, $period_end, $report_type, $generated_by_user_id){
      return self::where('id', $id)->update([
            'period_start'=> $period_start,
            'period_end'=> $period_end,
            'report_type' => $report_type,
            'generated_by_user_id' => $generated_by_user_id,
      ]);
   }
   public function destroyReport($id){
      self::destroy($id);
   }

}
