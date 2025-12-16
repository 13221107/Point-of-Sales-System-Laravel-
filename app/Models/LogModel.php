<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class LogModel extends Model
{
    protected $table = "logs";
    protected $primaryKey = 'logID';
    protected $fillable = [
        'ActionType',
        'entityID',
        'timestamp',
        'entityType',
        'details',
        'userID'
    ];
    public $timestamps = false;

    // Relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class, 'userID');
    }

    // Get all logs
    public function getAllLogs()
    {
        return self::with('user')->orderBy('timestamp', 'desc')->get();
    }

    // Create a new log entry
    public function createLog($actionType, $entityID, $entityType, $details = null)
    {
        return self::create([
            'ActionType' => $actionType,
            'entityID' => $entityID,
            'entityType' => $entityType,
            'details' => $details,
            'userID' => Auth::id() ?? 1, // Get current user ID or default to 1
            'timestamp' => now()
        ]);
    }

    // Get specific log
    public function getSpecificLog($id)
    {
        return self::with('user')->where('logID', $id)->get();
    }

    // Get logs by entity type
    public function getLogsByEntityType($entityType)
    {
        return self::with('user')
            ->where('entityType', $entityType)
            ->orderBy('timestamp', 'desc')
            ->get();
    }

    // Get logs by user
    public function getLogsByUser($userID)
    {
        return self::with('user')
            ->where('userID', $userID)
            ->orderBy('timestamp', 'desc')
            ->get();
    }

    // Get logs by action type
    public function getLogsByActionType($actionType)
    {
        return self::with('user')
            ->where('ActionType', $actionType)
            ->orderBy('timestamp', 'desc')
            ->get();
    }

    // Update log (rarely used, but included for completeness)
    public function updateLog($id, $actionType, $entityID, $entityType, $details, $userID)
    {
        return self::where('logID', $id)->update([
            'ActionType' => $actionType,
            'entityID' => $entityID,
            'entityType' => $entityType,
            'details' => $details,
            'userID' => $userID
        ]);
    }

    // Delete log
    public function destroyLog($id)
    {
        return self::destroy($id);
    }
}