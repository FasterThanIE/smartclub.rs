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
        $data = $viewController->getPageViewFromUrl($pageName);
        return view("partials/".$data['page'], ['form' => $data['form']]);
    }



    public function getPageViewFromUrl($pageName)
    {
        $name = null;
        switch($pageName)
        {
            case "kes-krediti":
                $name = "cash_credits";
                $form = "credits";
                break;

            case "refinansirajuci":
                $name = "refinancing";
                $form = "credits";
                break;

            case "auto-krediti":
                $name = "car_credits";
                $form = "credits";
                break;

            case "stambeni-krediti":
                $name = "house_credit";
                $form = "credits";
                break;

            case "potrosacki-krediti":
                $name = "consumer_credit";
                $form = "credits";
                break;

            case "putno-osiguranje":
                $name = "travel_insurance";
                $form = "insurance";
                break;

            case "osiguranje-od-ao":
                $name = "ao_insurance";
                $form = "insurance";
                break;

            case "kasko-osiguranje":
                $name = "casco_insurance";
                $form = "insurance";
                break;

            case "zivotno-osiguranje":
                $name = "life_insurance";
                $form = "insurance";
                break;

            case "osiguranje-imovine":
                $name = "property_insurance";
                $form = "insurance";
                break;

            default:
                $name = false;
        }
        return ['page' => $name, 'form' => $form];
    }
}