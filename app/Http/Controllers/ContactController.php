<?php

namespace App\Http\Controllers;

use App\CashCreditsModel;
use App\InsuranceModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Mail\Mailer;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Validator;
use \Illuminate\Support\Facades\View as View;

class ContactController extends Controller
{
    /**
     * @param Request $request
     */
    public function mailToAdmin(Request $request)
    {
        $data = $request->all();

        if(isset($data['page_name']))
        {
            $tmp_page_name = strtolower($data['page_name']);
            if(strpos($tmp_page_name, "osiguranje"))
            {
                $this->validate($request, [
                    'name' => 'required',
                    'phone_number' => 'required',
                    'date_of_birth' => 'required',
                    'email' => 'required',
                    'gender' => 'required',
                    'job' => 'required',
                    'location' => 'required',
                    'insurance_length' => 'required',
                    'health' => 'required'
                ]);
                #$insurance = new InsuranceModel();
                $data['subject'] = "[".$data['page_name']."] Kontakt sa sajta";

                Mail::send('emails.insurance_contact', ['data' => $data], function($message) use (&$data) {
                    $message->to('office@smartclub.rs', $data['name'])
                        ->subject($data['subject']);

                    $message->from($data['email'],$data['name']);
                });

            }
            else
            {
                $this->validate($request, [
                    'name' => 'required',
                    'phone_number' => 'required',
                    'credit_amount' => 'required',
                    'email' => 'required'
                ]);
                #$cashCredits = new CashCreditsModel();
                #$cashCredits->addNewRequest($data);

                $data['subject'] = "[".$data['page_name']."] Kontakt sa sajta";

                Mail::send('emails.cash_credit_contact', ['data' => $data], function($message) use (&$data) {
                    $message->to('office@smartclub.rs', $data['name'])
                        ->subject($data['subject']);

                    $message->from($data['email'],$data['name']);
                });
            }
        } else {
            return redirect('/');
        }

        return redirect('/thank-you');
    }

}
