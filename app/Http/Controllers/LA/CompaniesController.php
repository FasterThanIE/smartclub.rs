<?php

namespace App\Http\Controllers\LA;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CompaniesController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {

        $sql = DB::connection()->getPdo();
        $query = $sql->prepare("
            SELECT * FROM companies 
            LIMIT 100
        ");

        $query->execute();

         $data = $query->fetchAll();

        return view('la/companies/index', ['data' => $data]);
    }

    /**
     * @param Request $request
     * @param $pib
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getSpecificCompany(Request $request, $pib)
    {
        return view('la/companies/company_page');
    }
}
