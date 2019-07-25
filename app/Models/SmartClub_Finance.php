<?php
/**
 * Model genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SmartClub_Finance extends Model
{
    use SoftDeletes;
	
	protected $table = 'smartclub_finances';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];

	public function getCurrentFinances()
    {
        $euro = 118.5;
        $finances = DB::table($this->table)->get();
        $amount = 0;

        foreach($finances as $finance)
        {
            $converted = ($finance->currency == "[\"Dinar\"]") ? $finance->amount : $finance->amount*$euro;
            if($finance->type == "[\"Priliv\"]")
            {
                $amount += $converted;
            } else
            {
                $amount -= $converted;
            }
        }

        return $amount;
    }
}
