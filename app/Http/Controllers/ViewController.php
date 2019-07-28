<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers;

use App\Http\Requests\Request;

class ViewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public static function getViewFromPageName($pageName)
    {
        $viewController = new ViewController();
        $pageData = $viewController->generatePageDataFromUrl($pageName);
        return view('pages/permalink', ['data' => $pageData]);
    }


    public function generatePageDataFromUrl($pageName)
    {
        $page = $this->getPageNameFromUrl($pageName);
        return $page;
    }


    public function getPageNameFromUrl($pageName)
    {
        $name = null;
        switch($pageName)
        {
            case "kes-krediti":
                $name = "cash_credits";
                break;

            case "refinansirajuci":
                $name = "refinancing";
                break;

            case "auto-krediti":
                $name = "car_credits";
                break;

            case "stambeni-krediti":
                $name = "home_credits";
                break;

            case "putno-osiguranje":
                $name = "travel_insurance";
                break;

            case "osiguranje-od-ao":
                $name = "ao_insurance";
                break;

            case "kasko-osiguranje":
                $name = "casco_insurance";
                break;

            case "zivotno-osiguranje":
                $name = "life_insurance";
                break;

            default:
                $name = false;
        }
        return $name;
    }
}