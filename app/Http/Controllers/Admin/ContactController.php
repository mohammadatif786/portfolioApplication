<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Jobs\ContactMailJob;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function index(Request $request){

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg,
            'subject' => $request->subject
        ];


        $email = ContactMailJob::dispatch($data);

        return back()->with('success',"Thanks for contact me.");

    }
}
