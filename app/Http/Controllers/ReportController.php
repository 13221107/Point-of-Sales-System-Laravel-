<?php

namespace App\Http\Controllers;

use App\Models\ReportModel;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index() {
        $model = new ReportModel();
        $dbResult = $model->getAllReportsEntry();
        $data = [
            'report_list' => $dbResult,
        ];
        return view('/report/index', $data);
    }

    public function add(){
        return view('/report/add');
    }

    public function create(Request $request){
        $model = new ReportModel();
        $period_start = $request->input('period_start');
        $period_end = $request->input('period_end');
        $report_type = $request->input('report_type');
        $generated_by_user_id = $request->input('generated_by_user_id');

        $model->setNewReport($period_start, $period_end, $report_type, $generated_by_user_id);
        return redirect('/report');
    }
    public function edit($id){
        $model = new ReportModel();
        $dbResult = $model->getSpecificReport($id);
        $data = [
            'report_entry'=> $dbResult,
        ];
        return view('/report/edit', $data);
    }
    public function update($id, Request $request){
        $model = new ReportModel();
        $period_start = $request->input('period_start');
        $period_end = $request->input('period_end');
        $report_type = $request->input('report_type');
        $generated_by_user_id = $request->input('generated_by_user_id');

        $model->setUpdateReport($id,$period_start, $period_end, $report_type, $generated_by_user_id);
        return redirect('report');
    }

    public function delete($id){
        $model = new ReportModel();
        $dbResult = $model->getSpecificReport($id);
        $data = [
            'report_entry'=> $dbResult,
        ];
        return view('/report/delete', $data);
    }
    public function destroy($id){
        $model = new ReportModel();
        $model->destroyReport($id);
        return redirect('/report');
    }
}  
