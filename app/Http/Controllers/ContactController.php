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

        \Mail::send(function ($message) {

            $message->from('yourEmail@domain.com', 'Learning Laravel');

            $message->to('yourEmail@domain.com')->subject('Learning Laravel test email');

        });

//        $endpoint = "https://api.sendgrid.com/v3/mail/send";
//        $client = new \GuzzleHttp\Client();
//
//        $headers = [
//            'Authorization' => 'Bearer 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',
//            'Accept'        => 'application/json',
//            'content-type' => 'application/json'
//        ];
//
//        $zData = [
//            "personalizations"=>  [
//            [
//                "to"=>  [
//                [
//                    "email"=>  "tomislavnikolic1993@gmail.com"
//                ]
//              ],
//            ]
//          ],
//          "from"=>  [
//                "email"=>  "tomislav.nikolic@mojagaraza.rs"
//          ],
//            "subject"=>  "Hello, World!",
//          "content"=>  [
//            [
//                "type"=>  "text/plain",
//                "value"=>  "Hello, World!"
//            ]
//          ]
//        ];
//
//        $response = $client->request('POST', $endpoint, [
//            'headers' => $headers,
//            $zData
//        ]);


    }

}
