<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Mail\Mailer;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Validator;

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


        Mail::send(['text'=>'emails.contact'], $data, function($message) {
            $message->to('tomislavnikolic1993@gmail.com', 'Tutorials Point')
                ->subject('Laravel Basic Testing Mail');
            $message->from('xyz@gmail.com','Virat Gandhi');
        });



    }

}
