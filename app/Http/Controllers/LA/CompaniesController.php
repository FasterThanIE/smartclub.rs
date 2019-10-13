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
            WHERE pib NOT IN (
              SELECT pib
              FROM blocked_companies 
            )
            LIMIT 100
        ");

        $query->execute();

        $data = $query->fetchAll();

        $counties = $this->getAllCounties();
        $score = $this->getUniqueScores();

        return view('la/companies/index', [
            'data' => $data,
            'counties' => array_combine($counties, $counties),
            'score' => array_combine($score, $score)
        ]);
    }

    /**
     * @param Request $request
     * @param $pib
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getSpecificCompany(Request $request, $pib)
    {

        $sql = DB::connection()->getPdo();

        $stmt = $sql->prepare("
            SELECT * FROM companies 
            WHERE pib = :pib
        ");
        $stmt->bindParam(":pib", $pib, \PDO::PARAM_INT);
        $stmt->execute();

        return view('la/companies/company_page', [
            'data' => $stmt->fetch()
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $where = [];
        $parameters = [];

        if($request->get('pib'))
        {
            $where[] = "pib = ?";
            $parameters[] = $request->get('pib');
        }

        if($request->get('mb'))
        {
            $where[] = "mb = ?";
            $parameters[] = $request->get('mb');
        }

        if($request->get('county'))
        {
            $where[] = "county = ?";
            $parameters[] = $request->get('county');
        }

        if($request->get('name'))
        {
            $where[] = "name LIKE ?";
            $parameters[] = "%".$request->get('name')."%";
        }

        if($request->get('score'))
        {
            $where[] = "score = ?";
            $parameters[] = $request->get('score');
        }

        if ($request->get('address'))
        {
            $where[] = "address  LIKE ?";
            $parameters[] = "%".$request->get('address')."%";
        }

        if($request->get('phone'))
        {
            $where[] = "phone = ?";
            $parameters[] = $request->get('phone');
        }

        if($request->get('website'))
        {
            $where[] = "website = ?";
            $parameters[] = $request->get('website');
        }

        if($request->get('active_funds_from'))
        {
            $where[]= "active_funds > ?";
            $parameters[] = $request->get('active_funds_from');
        }

        if($request->get('active_funds_to'))
        {
            $where[] = "active_funds < ?";
            $parameters[] = $request->get('active_funds_to');
        }

        if($request->get('income_from'))
        {
            $where[] = "income > ?";
            $parameters[] = $request->get('income_from');
        }

        if($request->get('income_to'))
        {
            $where[] = "income < ?";
            $parameters[] = $request->get('income_to');
        }

        if($request->get('neto_from'))
        {
            $where[] = "neto > ?";
            $parameters[] = $request->get('neto_from');
        }

        if($request->get('neto_to'))
        {
            $where[] = "neto < ?";
            $parameters[] = $request->get('neto_to');
        }

        if($request->get('employees_from'))
        {
            $where[] = "employees > ?";
            $parameters[] = $request->get('employees_from');
        }

        if($request->get('employees_to'))
        {
            $where[] = "employees < ?";
            $parameters[] = $request->get('employees_to');
        }


        $sql = DB::connection()->getPdo();
        $query = $sql->prepare("
            SELECT * FROM companies 
            WHERE ".implode(" AND ", $where)."
            AND pib NOT IN (
              SELECT pib
              FROM blocked_companies 
            )
        ");
        $query->execute($parameters);
        $data = $query->fetchAll();


        $counties = $this->getAllCounties();
        $score = $this->getUniqueScores();

        return view('la/companies/index', [
            'data' => $data,
            'counties' => array_combine($counties, $counties),
            'score' => array_combine($score, $score)
        ]);
    }

    /**
     * @return mixed
     */
    public function getAllCounties()
    {
        $sql = DB::connection()->getPdo();
        $query = $sql->prepare("
            SELECT county FROM companies
            GROUP BY county
            ORDER BY county ASC
        ");
        $query->execute();

        $data = ['' => ''] + $query->fetchAll(\PDO::FETCH_COLUMN);

        return $data;
    }


    /**
     * @return mixed
     */
    public function getUniqueScores()
    {
        $sql = DB::connection()->getPdo();
        $query = $sql->prepare("
            SELECT score FROM companies
            GROUP BY score
            ORDER BY score ASC
        ");
        $query->execute();

        $data = ['' => ''] + $query->fetchAll(\PDO::FETCH_COLUMN);

        return $data;
    }

    public function blockedCompany(Request $request , $id)
    {
        $sql = DB::connection()->getPdo();
        $query = $sql->prepare("
            INSERT INTO blocked_companies (pib, date_time) VALUES
            (:pib, NOW())
        ");

        $query->bindParam(':pib', $id, \PDO::PARAM_INT);
        $query->execute();
    }

    /**
     * @param Request $request
     * @param $note
     */
    public function addNewNote(Request $request)
    {
        $pib = $request->get('pib');
        $note = $request->get('note');

        $sql = DB::connection()->getPdo();
        $query = $sql->prepare("
            INSERT INTO company_notes (pib, note, date_time) VALUES
            (:pib, :note, NOW())
        ");

        $query->bindParam(':pib' , $pib, \PDO::PARAM_INT);
        $query->bindParam(':note', $note, \PDO::PARAM_STR);
        $query->execute();
    }
}
