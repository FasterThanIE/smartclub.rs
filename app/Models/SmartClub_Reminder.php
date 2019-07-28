<?php
/**
 * Model genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class SmartClub_Reminder extends Model
{
    use SoftDeletes;
	
	protected $table = 'smartclub_reminders';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];

	public function getRemindersForToday()
    {
        $reminders = DB::select("
            SELECT scr.*, u.name FROM smartclub_reminders as scr
                INNER JOIN users AS u ON u.id = scr.for
                WHERE scr.date <= NOW()
            ORDER BY 
                scr.date DESC
            ");

        return $reminders;
    }
}
