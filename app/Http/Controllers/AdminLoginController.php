<?php

namespace App\Http\Controllers;

use App\Jobs\AdminVerifiyEmailJob;
use Illuminate\Http\Request;
use App\Mail\AdminVerifyEmial;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('auth.admin.login');
    }

    public function AdminEmailVerify(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            
            $email = $request->input('email');
            $verificationCode = random_int(1000, 9999);

            session(['email_verification_code' => $verificationCode]);

            $emailDetails = [
                'email' => $email,
                'message' => 'Your verification code is ' . $verificationCode,
                'subject' => 'Please Verify Your Email', 
            ];
            
            // AdminVerifiyEmailJob::dispatch($emailDetails);

            // session(['email_verification_code' => $verificationCode], now()->addMinutes(10) );

            return view('auth.admin.verify-email-code');

            
        }else{

              return response()->json([
                'status' => 'error',
                'message' => 'The provided credentials do not match our records.'
            ]);
        }



    }

    public function AdminEmailCodeVerified(Request $request)
    {
        $email_verification_code = session('email_verification_code');
        
        return response()->json([
            'status' => 'success',
            'message' => 'Email verified',
        ]);

        // if($request->email_verified_code == $email_verification_code)
        // {
        //     return response()->json([
        //         'status' => 'success',
        //         'message' => 'Email verified',
        //     ]);

        // }else{
            
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'Email verification code does not matched',
        //     ]);
        // }
    }
}
