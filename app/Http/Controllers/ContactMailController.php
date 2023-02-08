<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMailController extends Controller
{
    //
    function contactMail(Request $request)
    {

        $title = '聯絡我們內容信件';
        $details = [
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'content' => $request->input('content'),
            'clientMail' => $request->input('clientMail')
        ];

        if ($details['clientMail'] == 'true') {
            $contactmail = Mail::to("bryantchi.work@gmail.com")->cc($details['email'])->send(new ContactMail($title, $details));
        } else {
            $contactmail = Mail::to("bryantchi.work@gmail.com")->send(new ContactMail($title, $details));
        }

        if (empty($contactmail)) {
            // return response()->json(['message' => 'Mail Sent Sucssfully'], 200);
            return json_encode(array('status' => "success"));
        }else{
            // return response()->json(['message' => 'Mail Sent fail'], 400);
            return json_encode(array('status' => "fail"));
        }

        /**
         * 聯絡人：
         * 聯絡電話：
         * Email：
         * 聯絡內容：
         */
    }
}
