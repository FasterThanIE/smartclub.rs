<?php
/**
 * Model genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class SmartClub_Action extends Model
{
    use SoftDeletes;
	
	protected $table = 'smartclub_actions';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];

	public function getCurrentActiveActionsCount()
    {
        $action = DB::table($this->table)
            ->whereRaw('MONTH(action_from) = ?',[date("m")])
            ->get();
        return count($action);
    }
}
