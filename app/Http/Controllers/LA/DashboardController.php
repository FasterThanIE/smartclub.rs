<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers\LA;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\SmartClub_Action;
use App\Models\SmartClub_Finance;
use Illuminate\Http\Request;
use App\Models\SmartClub_User;

/**
 * Class DashboardController
 * @package App\Http\Controllers
 */
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $user = new SmartClub_User();
        $finances = new SmartClub_Finance();
        $actions = new SmartClub_Action();
        return view('la.dashboard', [
            'members' => $user->getUserCount(),
            'finances' => $finances->getCurrentFinances(),
            'activeActions' => $actions->getCurrentActiveActionsCount(),
        ]);
    }
}