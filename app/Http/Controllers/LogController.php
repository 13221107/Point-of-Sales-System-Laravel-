<?php

namespace App\Http\Controllers;

use App\Models\LogModel;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        $model = new LogModel();
        $dbResult = $model->getAllLogs();
        $data = [
            'log_list' => $dbResult
        ];
        return view('log/index', $data);
    }

    public function add()
    {
        return view('/log/add');
    }

    public function create(Request $request)
    {
        $actionType = $request->input('ActionType');
        $entityID = $request->input('entityID');
        $entityType = $request->input('entityType');
        $details = $request->input('details');
        $userID = $request->input('userID');

        $model = new LogModel();
        $model->create([
            'ActionType' => $actionType,
            'entityID' => $entityID,
            'entityType' => $entityType,
            'details' => $details,
            'userID' => $userID,
            'timestamp' => now()
        ]);
        
        return redirect('/log');
    }

    public function edit($id)
    {
        $model = new LogModel();
        $dbResult = $model->getSpecificLog($id);
        $data = [
            'log_entry' => $dbResult,
        ];
        return view('/log/edit', $data);
    }

    public function update($id, Request $request)
    {
        $model = new LogModel();
        $actionType = $request->input('ActionType');
        $entityID = $request->input('entityID');
        $entityType = $request->input('entityType');
        $details = $request->input('details');
        $userID = $request->input('userID');

        $model->updateLog($id, $actionType, $entityID, $entityType, $details, $userID);
        return redirect('/log');
    }

    public function delete($id)
    {
        $model = new LogModel();
        $dbResult = $model->getSpecificLog($id);
        $data = [
            'log_entry' => $dbResult,
        ];
        return view('/log/delete', $data);
    }

    public function destroy($id)
    {
        $model = new LogModel();
        $model->destroyLog($id);
        return redirect('/log');
    }

    // Additional filter methods
    public function filterByEntityType($entityType)
    {
        $model = new LogModel();
        $dbResult = $model->getLogsByEntityType($entityType);
        $data = [
            'log_list' => $dbResult,
            'filter_type' => 'entityType',
            'filter_value' => $entityType
        ];
        return view('log/index', $data);
    }

    public function filterByUser($userID)
    {
        $model = new LogModel();
        $dbResult = $model->getLogsByUser($userID);
        $data = [
            'log_list' => $dbResult,
            'filter_type' => 'user',
            'filter_value' => $userID
        ];
        return view('log/index', $data);
    }
}