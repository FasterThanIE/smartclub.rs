<?php

namespace App\Http\Controllers;

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
        $this->validate($request, [
            'name' => 'required',
            'phone_number' => 'required',
            'credit_amount' => 'required',
            'email' => 'required'
        ]);

        $data = $request->all();

        $data['subject'] = "[".$data['page_name']."] Kontakt sa sajta";

        Mail::send('emails.contact', ['data' => $data], function($message) use (&$data) {
            $message->to('tomislavnikolic1993@gmail.com', $data['name'])
                ->subject($data['subject']);

            $message->from($data['email'],$data['name']);
        });



    }

}
