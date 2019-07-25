<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers\LA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DB;
use Validator;
use Datatables;
use Collective\Html\FormFacade as Form;
use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFields;

use App\Models\SmartClub_Reminder;

class SmartClub_RemindersController extends Controller
{
	public $show_action = true;
	public $view_col = 'date';
	public $listing_cols = ['id', 'date', 'for', 'text'];
	
	public function __construct() {
		// Field Access of Listing Columns
		if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
			$this->middleware(function ($request, $next) {
				$this->listing_cols = ModuleFields::listingColumnAccessScan('SmartClub_Reminders', $this->listing_cols);
				return $next($request);
			});
		} else {
			$this->listing_cols = ModuleFields::listingColumnAccessScan('SmartClub_Reminders', $this->listing_cols);
		}
	}
	
	/**
	 * Display a listing of the SmartClub_Reminders.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$module = Module::get('SmartClub_Reminders');
		
		if(Module::hasAccess($module->id)) {
			return View('la.smartclub_reminders.index', [
				'show_actions' => $this->show_action,
				'listing_cols' => $this->listing_cols,
				'module' => $module
			]);
		} else {
            return redirect(config('laraadmin.adminRoute')."/");
        }
	}

	/**
	 * Show the form for creating a new smartclub_reminder.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created smartclub_reminder in database.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		if(Module::hasAccess("SmartClub_Reminders", "create")) {
		
			$rules = Module::validateRules("SmartClub_Reminders", $request);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();
			}
			
			$insert_id = Module::insert("SmartClub_Reminders", $request);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.smartclub_reminders.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Display the specified smartclub_reminder.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		if(Module::hasAccess("SmartClub_Reminders", "view")) {
			
			$smartclub_reminder = SmartClub_Reminder::find($id);
			if(isset($smartclub_reminder->id)) {
				$module = Module::get('SmartClub_Reminders');
				$module->row = $smartclub_reminder;
				
				return view('la.smartclub_reminders.show', [
					'module' => $module,
					'view_col' => $this->view_col,
					'no_header' => true,
					'no_padding' => "no-padding"
				])->with('smartclub_reminder', $smartclub_reminder);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("smartclub_reminder"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Show the form for editing the specified smartclub_reminder.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		if(Module::hasAccess("SmartClub_Reminders", "edit")) {			
			$smartclub_reminder = SmartClub_Reminder::find($id);
			if(isset($smartclub_reminder->id)) {	
				$module = Module::get('SmartClub_Reminders');
				
				$module->row = $smartclub_reminder;
				
				return view('la.smartclub_reminders.edit', [
					'module' => $module,
					'view_col' => $this->view_col,
				])->with('smartclub_reminder', $smartclub_reminder);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("smartclub_reminder"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Update the specified smartclub_reminder in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		if(Module::hasAccess("SmartClub_Reminders", "edit")) {
			
			$rules = Module::validateRules("SmartClub_Reminders", $request, true);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();;
			}
			
			$insert_id = Module::updateRow("SmartClub_Reminders", $request, $id);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.smartclub_reminders.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Remove the specified smartclub_reminder from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		if(Module::hasAccess("SmartClub_Reminders", "delete")) {
			SmartClub_Reminder::find($id)->delete();
			
			// Redirecting to index() method
			return redirect()->route(config('laraadmin.adminRoute') . '.smartclub_reminders.index');
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}
	
	/**
	 * Datatable Ajax fetch
	 *
	 * @return
	 */
	public function dtajax()
	{
		$values = DB::table('smartclub_reminders')->select($this->listing_cols)->whereNull('deleted_at');
		$out = Datatables::of($values)->make();
		$data = $out->getData();

		$fields_popup = ModuleFields::getModuleFields('SmartClub_Reminders');
		
		for($i=0; $i < count($data->data); $i++) {
			for ($j=0; $j < count($this->listing_cols); $j++) { 
				$col = $this->listing_cols[$j];
				if($fields_popup[$col] != null && starts_with($fields_popup[$col]->popup_vals, "@")) {
					$data->data[$i][$j] = ModuleFields::getFieldValue($fields_popup[$col], $data->data[$i][$j]);
				}
				if($col == $this->view_col) {
					$data->data[$i][$j] = '<a href="'.url(config('laraadmin.adminRoute') . '/smartclub_reminders/'.$data->data[$i][0]).'">'.$data->data[$i][$j].'</a>';
				}
				// else if($col == "author") {
				//    $data->data[$i][$j];
				// }
			}
			
			if($this->show_action) {
				$output = '';
				if(Module::hasAccess("SmartClub_Reminders", "edit")) {
					$output .= '<a href="'.url(config('laraadmin.adminRoute') . '/smartclub_reminders/'.$data->data[$i][0].'/edit').'" class="btn btn-warning btn-xs" style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>';
				}
				
				if(Module::hasAccess("SmartClub_Reminders", "delete")) {
					$output .= Form::open(['route' => [config('laraadmin.adminRoute') . '.smartclub_reminders.destroy', $data->data[$i][0]], 'method' => 'delete', 'style'=>'display:inline']);
					$output .= ' <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-times"></i></button>';
					$output .= Form::close();
				}
				$data->data[$i][] = (string)$output;
			}
		}
		$out->setData($data);
		return $out;
	}
}
