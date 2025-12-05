<?php

namespace App\Http\Controllers;

use App\Models\TaxRuleModel;
use Illuminate\Http\Request;

class TaxRuleController extends Controller
{
    public function index(){
        $model = new TaxRuleModel();
        $dbResult = $model->getAllTaxRule();
        $data = [
            'tax_rule_list' => $dbResult,
        ];
        return view('/tax_rule/index', $data);
    }
    public function add(){
        return view('/tax_rule/add');
    }
    public function create(Request $request){
        $tax_name = $request->input('tax_name');
        $rate = $request->input('rate');

        $model = new TaxRuleModel();
        $model->setNewTaxRule($tax_name, $rate);
        return Redirect('/tax_rule');
    }
    public function edit($id){
        $model = new TaxRuleModel();
        $dbResult = $model->getSpecificTaxRule($id);
        $data = [
            'tax_rule_entry'=> $dbResult,
        ];
        return view('tax_rule/edit', $data);
    }
    public function update($id, Request $request){
        $model = new TaxRuleModel();
        $tax_name = $request->input('tax_name');
        $rate = $request->input('rate');

        $model->setUpdateTaxRule($id, $tax_name, $rate);

        return redirect('/tax_rule');
    }

    public function delete($id){
        $model = new TaxRuleModel();
        $dbResult = $model->getSpecificTaxRule($id);
        $data = [
            'tax_rule_entry'=> $dbResult,
        ];
        return view('tax_rule/delete', $data);
    }

    public function destroy($id){
        $model = new TaxRuleModel();
        $model->destroyTaxRule($id);
        return redirect('tax_rule');
    }
}
