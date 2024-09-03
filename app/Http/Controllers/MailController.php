<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\UserRequests\WelcomeEmail;

class MailController extends Controller
{
    public function sendWelcomeEmail($recipient, $name)
    {
        $details = [
            'title' => 'Account approved',
            'body' => 'Your account has been approved. You can now sign in to this email at http://127.0.0.1:8000/signin',
            'name' => $name
        ];

        Mail::to($recipient)->send(new WelcomeEmail($details));

        return 'Email sent successfully';
    }
}